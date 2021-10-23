<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\Presentation;
use App\Models\Comment;


class SecteurActiviteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
 
    public function indexDash()
    {
        $messagesRecu = Contact::where('verified', false);
        $AllSecteurs=SecteurActivite::all();
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.secteurs.index',compact('AllSecteurs', 'messagesRecu', 'commentC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $presentation = Presentation::all();
        return view('dashboard.pages.secteurs.create', compact('AllSecteurs','AllPoles','presentation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomSecteur'=>'required  ',
            'introduction'=>'required  ',
            'description'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $secteur = new SecteurActivite();
        $secteur->NomSecteur = $request->nomSecteur;
        $secteur->Introduction = $request->introduction;
        $secteur->Description = $request->description;
        
        if($request->hasFile('image') == null){
            $secteur->Image == NULL;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $secteur->Image = '/uploads/photo/'.$file_name;
        }

        //Flash session
        $request->session()->flash('secteurAjt',$request->nomSecteur);

        $secteur->save();
        return redirect('secteursDash');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $SelectedSecteurs=SecteurActivite::findOrFail($id);
        $presentation = Presentation::all();
        return view('pages.secteurs.show',compact('SelectedSecteurs','AllSecteurs','AllPoles', 'presentation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $secteur = SecteurActivite::find($id);
        $presentation = Presentation::all();
        return view('dashboard.pages.secteurs.edit', compact('secteur','AllPoles','AllSecteurs', 'presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomSecteur'=>'required  ',
            'introduction'=>'required  ',
            'description'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $secteur = SecteurActivite::find($id);
        $secteur->NomSecteur = $request->nomSecteur;
        $secteur->Introduction = $request->introduction;
        $secteur->Description = $request->description;
        
        if($request->hasFile('image') == null && $secteur->Image == NULL){
            $secteur->Image == NULL;
        }elseif($request->hasFile('image') == null && $secteur->Image != NULL){
            $secteur->Image == $secteur->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $secteur->Image = '/uploads/photo/'.$file_name;
        }

        //Flash session
        $request->session()->flash('secteurMdf',$request->nomSecteur);

        $secteur->save();
        return redirect('secteursDash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secteur= SecteurActivite::find($id);
        $secteur->delete();

        //Flash session
        session()->flash('secteurSupp',$secteur);


        return redirect('secteursDash');
    }

   
}

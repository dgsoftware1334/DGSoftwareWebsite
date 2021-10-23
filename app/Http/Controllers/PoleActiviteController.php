<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\Presentation;
use App\Models\Comment;



class PoleActiviteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function indexDash()
    {
        $AllPoles=PoleActivite::all();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.polesActivites.index',compact('AllPoles','messagesRecu', 'commentC'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
        return view('dashboard.pages.polesActivites.create',compact('AllPoles','AllSecteurs','presentation'));
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
            'nomPole'=>'required  ',
            'introduction'=>'required  ',
            'description'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pole = new PoleActivite();
        $pole->NomPole = $request->nomPole;
        $pole->Introduction = $request->introduction;
        $pole->Description = $request->description;

        if($request->hasFile('image') == null){
            $pole->Image == NULL;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $pole->Image = '/uploads/photo/'.$file_name;
        }

        //Flash session
        $request->session()->flash('poleAjt',$request->nomPole);

        $pole->save();
        return redirect('polesActivitesDash');
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
        $SelectedPoles=PoleActivite::findOrFail($id);
        $presentation = Presentation::all();
        return view('pages.polesActivites.show',compact('SelectedPoles','AllPoles','AllSecteurs','presentation'));
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
        $pole = PoleActivite::find($id);
        $presentation = Presentation::all();
        return view('dashboard.pages.polesActivites.edit', compact('pole','AllPoles','AllSecteurs','presentation'));
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
            'nomPole'=>'required  ',
            'introduction'=>'required  ',
            'description'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pole = PoleActivite::find($id);
        $pole->NomPole = $request->nomPole;
        $pole->Introduction = $request->introduction;
        $pole->Description = $request->description;

        if($request->hasFile('image') == null && $pole->Image == NULL){
            $pole->Image == NULL;
        }elseif($request->hasFile('image') == null && $pole->Image != NULL){
            $pole->Image == $pole->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $pole->Image = '/uploads/photo/'.$file_name;
        }

        //Flash session
        $request->session()->flash('poleMdf',$request->nomPole);

        $pole->save();
        return redirect('polesActivitesDash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pole = PoleActivite::find($id);
        $pole->delete();
        
        //Flash session
        session()->flash('poleSupp',$pole);

        return redirect('polesActivitesDash');
    }
}

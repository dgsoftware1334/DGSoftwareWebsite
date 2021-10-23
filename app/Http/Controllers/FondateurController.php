<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fondateur;
use App\Models\Contact;
use App\Models\SecteurActivite;
use App\Models\Presentation;
use App\Models\PoleActivite;
use App\Models\Comment;


class FondateurController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function indexDash()
    {
        $fondateurs=Fondateur::all();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.fondateurs.index',compact('fondateurs', 'messagesRecu', 'commentC'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllPoles=PoleActivite::all();
        $AllSecteurs =SecteurActivite::all();
        $fondateurs=Fondateur::all();
        $presentation = Presentation::all();
        return view('pages.fondateurs.index',compact('fondateurs','AllSecteurs','AllPoles','presentation'));
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
        return view('dashboard.pages.fondateurs.create',compact('AllSecteurs','AllPoles','presentation'));
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
            'nom'=>'required  ',
            'prenom'=>'required  ',
            'telephone'=>'required ',
            'email'=>'required ',
            'specialite'=>'required ',
            'details'=>'required ',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fondateur = new Fondateur();
        $fondateur->Nom = $request->nom;
        $fondateur->Prenom = $request->prenom;
        $fondateur->Telephone = $request->telephone;
        $fondateur->Email = $request->email;
        $fondateur->Specialite = $request->specialite;
        $fondateur->Details = $request->details;


        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $fondateur->Image = '/uploads/photo/'.$file_name;


        //Flash session
        $request->session()->flash('fondateurAjt',$request->nom);

        $fondateur->save();
        return redirect('fondateursDash');
    }

    /**
     * Display the details of fondateurs in Dashboard.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showDash($id)
    {  
        $fondateur=Fondateur::findOrFail($id);
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.fondateurs.show',compact('fondateur','messagesRecu', 'commentC'));
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
        $fondateurs=Fondateur::findOrFail($id);
        $presentation = Presentation::all();
        return view('pages.fondateurs.show',compact('fondateurs','AllSecteurs','AllPoles', 'presentation'));
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
        $fondateur = Fondateur::find($id);
        $presentation = Presentation::all();
        return view('dashboard.pages.fondateurs.edit', compact('fondateur','AllPoles','AllSecteurs','presentation'));
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
            'nom'=>'required  ',
            'prenom'=>'required  ',
            'telephone'=>'required ',
            'email'=>'required ',
            'specialite'=>'required ',
            'details'=>'required ',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fondateur = Fondateur::find($id);
        $fondateur->Nom = $request->nom;
        $fondateur->Prenom = $request->prenom;
        $fondateur->Telephone = $request->telephone;
        $fondateur->Email = $request->email;
        $fondateur->Specialite = $request->specialite;
        $fondateur->Details = $request->details;

        if($request->hasFile('image') == null && $fondateur->Image != null){
            $fondateur->Image == $fondateur->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $fondateur->Image = '/uploads/photo/'.$file_name;
        }

        //Flash session
        $request->session()->flash('fondateurMdf',$request->nom);

        $fondateur->save();
        return redirect('fondateursDash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fondateur = Fondateur::find($id);
        $fondateur->delete();
        //Flash session
        session()->flash('fondateurSupp',$fondateur);
        return redirect('fondateursDash');
    }
}

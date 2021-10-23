<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presentation;
use App\Models\Fondateur;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\Contact;
use App\Models\Comment;

class PresentationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function indexDash(){

        $messagesRecu = Contact::where('verified', false);
        $presentation = Presentation::all();
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.presentations.index', compact('presentation', 'messagesRecu','commentC'));
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
        $fondateurs= Fondateur::all();
        $presentation=Presentation::all();
        return view('pages.presentations.show',compact('presentation','AllSecteurs','AllPoles','fondateurs'));
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.presentations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $presentations = Presentation::find($id);
        $presentation=Presentation::all();
        return view('dashboard.pages.presentations.edit', compact('presentations','AllSecteurs','AllPoles','presentation'));
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
            'nom'=>'required',
            'address'=>'required',
            'telephone'=>'required',
            'email'=>'required|email',
            'slogan'=>'required',
            'notion'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $presentation = Presentation::find($id);
        $presentation->Nom = $request->nom;
        $presentation->address = $request->address;
        $presentation->telephone = $request->telephone;
        $presentation->email = $request->email;
        $presentation->Slogan = $request->slogan;
        $presentation->Notion = $request->notion;
        $presentation->Description = $request->details;

        if($request->hasFile('image') == null && $presentation->Image != null){
            $presentation->Image == $presentation->Image;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $presentation->Image = '/uploads/photo/'.$file_name;
        }

        //Flash session
        $request->session()->flash('nomMdf',$request->nom);

        $presentation->save();
        return redirect('presentationsDash');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presentation = Presentation::find($id);
        $presentation->delete();
        return redirect('presentationsDash');
    }
}

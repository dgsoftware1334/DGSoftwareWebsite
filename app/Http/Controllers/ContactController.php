<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PoleActivite;
use App\Models\Contact;
use App\Models\Presentation;
use App\Models\SecteurActivite;
use App\Models\Comment;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'store']);
    }

    public function indexDash()
    {
        $contacts=Contact::orderBy('created_at','DESC')->get();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.contact.index',compact('contacts','messagesRecu', 'commentC'));
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
        $presentation = Presentation::all();
        return view('pages.contact.index',compact('AllSecteurs','AllPoles','presentation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact.create' );
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
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|numeric',
            'email'=>'required|email',
            'message'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $message = new Contact();
        $message->Nom = $request->nom;
        $message->Prenom = $request->prenom;
        $message->Telephone = $request->telephone;
        $message->Email = $request->email;
        $message->Sujet = $request->sujet;
        $message->message = $request->message;
        
        if($request->hasFile('image') == null){
            $message->Image == NULL;
        }else{
        $file = $request->file('image');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/uploads/photo'),$file_name);
        $message->Image = '/uploads/photo/'.$file_name;
        }
        

        //Flash session
        $request->session()->flash('messageAjt',$request->nom);

        $message->save();
        return redirect('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        $contact->Verified = true;
        $contact->save();
        $contacts=Contact::all();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.contact.show',compact('contact','contacts','messagesRecu','commentC'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('messagesRecu');
    }
}

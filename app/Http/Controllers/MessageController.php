<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Contact;
use App\Models\SecteurActivite;
use App\Models\PoleActivite;
use App\Models\Presentation;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\reply;
use App\Mail\nouveau;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function reply(Request $request,int $id)
    {

        $contenu = $request->message;
        $contact = Contact::find($id);

        //creation de message dans la table Message
        $message = new Message();
        if($contact->Sujet == ""){
            $message->Sujet = "";
        }else{
            $message->Sujet = $contact->Sujet;
        }
        $message->Message = $contenu;
        $message->Contact_email = $contact->Email;
        $message->save();


        Mail::to($contact->Email)->send(new reply($contact, $contenu));

        //Flash session
        $request->session()->flash('reply',$request->message);


        return redirect('messagesRecu');
    }


    public function store(Request $request)
    {

        $request->validate([
            'sujet'=>'required',
            'message'=>'required',
            'contact_email'=>'required',
        ]);
        //creation de message dans la table Message
        $message = new Message();

        $message->Sujet = $request->sujet;
        $message->Message = $request->message;
        $message->Contact_email = $request->contact_email;
        $message->save();


        Mail::to($message->Contact_email)->send(new nouveau($message));

        //Flash session
        $request->session()->flash('nouveauMsg',$request->message);


        return redirect('messages');
    }

    public function brouillons()
    {
        $contacts = Contact::all();
        $brouillons = DB::table('messages')
                        ->where('deleted_at','!=', null)
                        ->orderBy('deleted_at','DESC')
                        ->get();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.messages.brouillons', compact('brouillons', 'contacts', 'messagesRecu', 'commentC'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        $messages = Message::orderBy('created_at','DESC')->get();
        $messagesRecu = Contact::where('verified', false);
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.messages.index', compact('messages', 'contacts', 'messagesRecu', 'commentC'));
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
        $presentation=Presentation::all();
        return view('dashboard.pages.messages.create', compact('AllSecteurs','AllPoles','presentation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $messagesRecu = Contact::where('verified', false);
        $message = Message::find($id);
        $contacts=Contact::all();
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.messages.show',compact('message','contacts', 'messagesRecu','commentC'));
    }

    public function showBrouillons(int $id)
    {
        $messagesRecu = Contact::where('verified', false);
        $message = DB::table('messages')
                            ->where('deleted_at','!=',null)
                            ->where('id', $id)
                            ->get();
        $contacts=Contact::all();
        $commentC = Comment::where('verified', false)->count();
        return view('dashboard.pages.messages.detailsBrouillons',compact('message','contacts', 'messagesRecu', 'commentC'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect('messages');
    }

    public function deleteBrouillons(int $id)
    {
        $message = DB::table('messages')
                            ->where('deleted_at','!=',null)
                            ->where('id', $id)
                            ->delete();

        //Flash session
        session()->flash('supprimerMsg',$message);
        
        return redirect('brouillons');
    }
}

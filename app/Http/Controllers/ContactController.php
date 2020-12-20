<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Contact;

class ContactController extends Controller
{
   
   public function index(){
   	return view('contact');
   }


   public function store(Request $request){
      
      try {
		   $x = new Contact();
                $x->nom = $request->input('nom');
                $x->email = $request->input('email');
                $x->message = $request->input('message');
                $x->save();
       
      }catch (ModelNotFoundException $exception) {
        return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    }
     return back()->with('success', 'Votre Message a été envoyé! Nous essaierons de vous répondre dans les plus brefs délais');

   }
}

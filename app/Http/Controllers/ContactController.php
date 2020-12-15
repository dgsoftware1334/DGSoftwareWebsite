<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   
   public function store(Request $request){

		 $this->validate($request, [
		        'nom' => 'required',
		        'tel' => 'required',
		        'email' => 'required|email',
		        'message' => 'required'
		        ]);

		        $x = new Contact();
		        $x->nom = $request->input('nom');
		        $x->tel = $request->input('tel');
	            $x->email = $request->input('email');
		        $x->message = $request->input('message');
		        $x->temoin = $request->input('temoin');
		        $x->save();
		 return back()->with('success', 'Message envoyé!');

   }
}

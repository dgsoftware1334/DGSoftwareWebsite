<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
	 public function index()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return back()->with('success', "Merci pour l'abonnement");
        }
        return back()->with('failure', 'Désolé! Vous êtes déjà abonné ');
            
    }
}

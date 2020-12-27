<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $username = $request->username; //the input field has name='username' in form
        $password = $request->password; //the input field has name='username' in form

            if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
                //user sent their email 
                Auth::attempt(['email' => $username, 'password' => $password]);
            } else {
                //they sent their username instead 
                Auth::attempt(['username' => $username, 'password' => $password]);
            }

            //was any of those correct ?
            if ( Auth::check() ) {
                //send them where they are going 
                return redirect()->intended('dash');
            }

            //Nope, something wrong during authentication 
            return redirect()->back()->withErrors([
                'Error' => 'Username ou mot de passe erroné!',

            ]);
    }

    /*  LOGING OUT METHODE   */


     public function logout(Request $request)
            {
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect('/home');
            }
}

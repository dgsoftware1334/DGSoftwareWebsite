<?php

namespace App\Http\Controllers;

use Gate;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $users = User::where('status','Admin')->orWhere('status','Gérant')->get();
        return view('users.index', ['users' => $users]);
    }

    public function clients()
    {
        $users = User::where('status','Offre 1')->orWhere('status','Offre 2')->get();
        return view('demandes.abonnés', ['users' => $users]);
    }

    public function create()
    {

        $this->authorize('create', User::class);
        return view('users.create');
    }


     /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $this->authorize('update',auth()->user());
        return view('users.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request,$id)
    {
        try{
   //auth()->user()->update($request->all());
             $x = User::find($id);
            $x->name= $request->input('name');
            $x->email = $request->input('email');
            if($request->hasFile('profile_photo_path')){
               $user= $request->input('profile_photo_path').'.'.$request->profile_photo_path->getClientOriginalExtenSion();
               $x->profile_photo_path = $request->profile_photo_path->storeAs('avatars',$user);
              }

              $x->save();
        }catch(ModelNotFoundException $exception) {
                
                return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }


        return back()->withStatus(__('Votre profil a été modifié avec succès'));
    }

    public function store(ProfileRequest $request)
    {
        try {
            $x = new User();
            $x->name= $request->input('name');
            $x->email = $request->input('email');
            $x->status = $request->input('status');
            $x->password = Hash::make($request->input('password'));
            if($request->hasFile('profile_photo_path')){
              $user= $request->input('name').'.'.$request->profile_photo_path->getClientOriginalExtenSion();
               $x->profile_photo_path = $request->profile_photo_path->storeAs('avatars',$user);
            }

            $x->save();
            
        } catch(ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        return back()->withStatus(__("L'utilisateur a été ajouté avec succès."));
    }


    public function destroy($id) {

        try {
            $x = User::find($id);
            $this->authorize('delete',$x);
            $x->delete();
        } catch(ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        return back()->withStatus(__("L'utilisateur a été supprimé avec succès."));
      }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        try{

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);
    }catch(ModelNotFoundException $exception) {
         return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    }

        return back()->withPasswordStatus(__('Votre mot de passe a été modifié avec succès .'));
    }
}

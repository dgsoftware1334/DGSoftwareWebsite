<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Service;
use App\Models\Galerie;
use App\Models\Lien;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Hash;




class EmployesController extends Controller
{

    public function __construct(){
       
        $this->middleware('auth');

    }


    //SHOW EMPLOYERS
    public function index(){

    	$employes = User::all();
    	return view('employes.index',['employes'=>$employes]);
    }


    /*  CREATE NEW EMPLOYER  */
    public function Store(Request $request){


    	$employe = new User();
    	$employe->name = $request->input('firstname');
    	$employe->prenom = $request->input('lastname');
    	$employe->username = $request->input('username');
    	$employe->dateNaissance = $request->input('datenaissance');
    	$employe->telephone = $request->input('phone');
    	$employe->address = $request->input('address');
    	$employe->profil = $request->input('profil');
    	$employe->email = $request->input('email');
    	$employe->password = Hash::make($request->input('password'));

    	if($request->hasFile('files')){
            $destionation_path = 'public/img/Profil';
            $image = $request->file('files');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('files')->storeAs($destionation_path,$image_name);

            
            $employe->photo = $image_name;
        }
    
     	$employe->save();
    
   		return redirect('employes')->with('success', 'Nouveau employé inséré avec succès!');

    	
    }

     /*   EDIT SERVICE  */
    public function Edit( $id){

        $employes = User::where('id', '=', $id);
        return view('employes.index',['employes'=>$employes]);


    }


    /*   UPDATE EMPLOYER*/
    public function Update(Request $request, $id){
    	$user =  User::find($id);

    	if (!Hash::check($request->input('oldpassword'), $user->password)) {
    		return redirect('employes')->with('delete', 'Ancien mot de passe est faux!');
		    
		}else{

		$user->name = $request->input('firstname');
    	$user->prenom = $request->input('lastname');
    	$user->username = $request->input('username');
    	$user->dateNaissance = $request->input('datenaissance');
    	$user->telephone = $request->input('phone');
    	$user->address = $request->input('address');
    	$user->profil = $request->input('profil');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));


    	if($request->hasFile('files')){
            $destionation_path = 'public/img/Profil';
            $image = $request->file('files');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('files')->storeAs($destionation_path,$image_name);

            
            $user->photo = $image_name;
        }
    
     	$user->save();
     	return redirect('employes')->with('success', 'Employé modifié avec succès!');

		}

    }

    /*  DISPLAY PROFIL  */
    public function Show($id){

        $users = User::find($id);


        return view('employes.profil',['users'=>$users]);
    }

    /*   DELETE EMPLOYER  */
    public function Destroy(Request $request, $id){
        
        $user = User::find($id);
        //$this->authorize('delete',$a);

        $user->delete();

        return redirect('employes')->with('delete', 'Utilisateur Supprimé!');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Galerie;
use App\Models\Lien;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class ServicesController extends Controller
{
    /*        INDEX SERVICES   */
    public function index(){

    	  $services = DB::table('services')->get();

        return view('services.index', ['services' => $services]);

    }

    //NEW SERVICE
    public function createService(){

    }

    /*         STORE THE NEW SERVICE   */
    public function storeService(Request $request){

        //Error validation
        $validated = $request->validate([
        'titre' => 'required|unique|max:255',
        'description' => 'required',
        'prix' => 'required',
        'files' => 'required',
    ]);

        $service = new Service();
        $service->titre = $request->input('titre');
        $service->description = $request->input('description');
        $service->prix = $request->input('prix');

         if($request->hasFile('files')){
            $destionation_path = 'public/img/Services';
            $image = $request->file('files');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('files')->storeAs($destionation_path,$image_name);

            
            $service->photo = $image_name;
        }

        $service->save();

        return redirect('services')->with('success', 'Nouveau service inséré avec succès!');

    }

    /*   EDIT SERVICE  */
    public function editService( $id){

        $service = Service::where('id', '=', $id);
        return view('services.index',['services'=>$services]);


    }

    /*         UPDATE THE SERVICE    */
    public function updateService(Request $request, $id){

         $service = Service::find($id);
        $service->titre = $request->input('titre');
        $service->description = $request->input('description');
        $service->prix = $request->input('prix');
        $service->updated_at =now();

        if($request->hasFile('files')){
        if( $service->photo != $request->file('files')->getClientOriginalName() ){

            $destionation_path = 'public/img/Services';
            $image = $request->file('files');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('files')->storeAs($destionation_path,$image_name);

            
            $service->photo = $image_name;

        }}
        $service->save();

        return redirect('services')->with('success', 'Le service est modifié avec succès!');

    }


    /*  DELETE SERVICE   */
    public function deleteService($id){

         $service = Service::find($id);
        //$this->authorize('delete',$a);

        $service->delete();

        return redirect('services')->with('delete', 'Service Supprimé!');
    }

    /*         DETAILS SERVICE    */
    public function ShowService($id){


        $service = Service::find($id);
        return view('services.index',['services'=>$services]);


    }


   
}

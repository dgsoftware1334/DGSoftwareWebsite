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

class HomeController extends Controller
{
    public function homepage(){

    	$services = DB::table('services')->get();

    	return view('FrontEnd.home',['services' => $services]);

    }

    /*  Inforgraphie categorie */
    public function indexCategorie($id){

    	$galeries = Galerie::where('id_service', '=', $id)->get();
    	$service = Service::find($id);

    	return view('FrontEnd.indexCategorie',['galeries'=>$galeries,'service'=>$service]);
    }


   
}

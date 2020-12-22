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

    	return view('FrontEnd.indexCategorie',['galeries'=>$galeries]);
    }

    /*  SHOW DETAIL CATEGORIE*/
    public function Show($id){

    	$galerie = Galerie::find($id);
    	$arr['liens'] = DB::table('liens')->select('liens.*')->where('id_galerie', '=', $id)->paginate(6);
    	$lien=Lien::find($id);


    	return view('FrontEnd.show',['galerie'=>$galerie,'lien'=>$lien])->with($arr);
    	

    }
}

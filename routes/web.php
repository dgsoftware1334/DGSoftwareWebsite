<?php

use App\Employe;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\EmployesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Authentification
Auth::routes();

Route::get('/', function (){
	$services = App\Models\Service::all();
        return view('FrontEnd.home',['services' => $services]);
   });

Route::get('/aboutUs', function () {
    return view('FrontEnd.about');
});

Route::get('/service', function () {
    return view('FrontEnd.services');
});
Route::get('/contact' , 'ContactController@index');
Route::post('/contact' , 'ContactController@store');




Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('BackEnd.home');
})->name('/home');


//Employes
Route::get('/employes', [EmployesController::class, 'index']);
Route::post('/NewEmployer', [EmployesController::class, 'Store'])->name('upload.store_employer');;
Route::delete('/delete/employe/{id}',[EmployesController::class,'Destroy']);
Route::put('/employe/update/{id}', [EmployesController::class, 'Update'])->name('upload.upload_updatEmploye');
Route::get('/employe/{id}', [EmployesController::class, 'Edit']);
Route::get('/profil/{id}',[EmployesController::class,'Show']);


//services & Galeries
Route::resource('services','ServiceController')->middleware(['auth']);
Route::resource('galeries','GalerieController')->middleware(['auth']);


Route::get('/galerie', [GalerieController::class, 'indexGalery']);
Route::get('/Show/galeire/{id}',[GalerieController::class, 'ShowGalerie'])->name('ShowGalerie');
Route::post('/newGalerie', [GalerieController::class, 'galerieStore'])->name('upload.upload_file');
Route::delete('/delete/galerie/{id}',[GalerieController::class, 'Destroy']);


//Liens
Route::post('/liens/{id}',[GalerieController::class, 'NewLiens']);
Route::delete('/delete/photo/{id}/{id1}',[GalerieController::class, 'DestroyLien']);


//Home page DGSoftware 
//Route::get('/categories/{id}',[HomeController::class, 'indexCategorie']);
//Route::get('/show/categorie/{id}',[HomeController::class, 'Show']);

Route::get('/service/{id}',function($id){
    
	if($id == 1)
	{
		$galerie = App\Models\Galerie::where('service_id',$id)->get();
		return view('FrontEnd.services.show1',['galerie' =>$galerie, 'service' =>$id]);
	}
	elseif($id == 2)
	{
		$galerie = App\Models\Galerie::where('service_id',$id)->get();
		return view('FrontEnd.services.show2',['galerie' =>$galerie, 'service' =>$id]);
	}
	elseif($id == 3 || $id == 6)
	{
		$catégorie = App\Models\Galerie::select('titre','catégorie')->where('service_id',$id)->groupBy('catégorie','titre')->get();
		return view('FrontEnd.services.show3',['catégorie' =>$catégorie, 'service' =>$id]);
	}
});

Route::get('/services/{id}/details','ServicesController@serviceDetails');
Route::resource('commandes','CommandeController');
Route::get('commandes/{service}/create/{modele}','CommandeController@create'); 






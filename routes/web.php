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

Route::get('/login', function () {
    return view('Login.login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/aboutUs', function () {
    return view('FrontEnd.about');
});

Route::get('/contact', function () {
    return view('FrontEnd.contact');
});

Route::get('/service', function () {
    return view('FrontEnd.services');
});

Route::get('/dash', function () {
    return view('layouts.admin');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Employes
Route::get('/employes', [EmployesController::class, 'index']);
Route::post('/NewEmployer', [EmployesController::class, 'Store'])->name('upload.store_employer');;
Route::delete('/delete/employe/{id}',[EmployesController::class,'Destroy']);
Route::put('/employe/update/{id}', [EmployesController::class, 'Update'])->name('upload.upload_updatEmploye');
Route::get('/employe/{id}', [EmployesController::class, 'Edit']);
Route::get('/profil/{id}',[EmployesController::class,'Show']);


//services & Galeries
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/{id}', [ServicesController::class, 'editService']);
Route::put('/service/update/{id}', [ServicesController::class, 'updateService'])->name('upload.upload_uploadservice');
Route::delete('/delete/service/{id}',[ServicesController::class, 'deleteService']);
Route::get('/Show/service/{id}',[ServicesController::class, 'ShowService']);
Route::post('/newService', [ServicesController::class, 'storeService'])->name('upload.upload_photo');


Route::get('/galerie', [GalerieController::class, 'indexGalery']);
Route::get('/Show/galeire/{id}',[GalerieController::class, 'ShowGalerie'])->name('ShowGalerie');
Route::post('/newGalerie', [GalerieController::class, 'galerieStore'])->name('upload.upload_file');
Route::delete('/delete/galerie/{id}',[GalerieController::class, 'Destroy']);


//Liens
Route::post('/liens/{id}',[GalerieController::class, 'NewLiens']);
Route::delete('/delete/photo/{id}/{id1}',[GalerieController::class, 'DestroyLien']);


//Home page DGSoftware
Route::get('/home',[HomeController::class, 'homepage']);
Route::get('/categories/{id}',[HomeController::class, 'indexCategorie']);
Route::get('/show/categorie/{id}',[HomeController::class, 'Show']);








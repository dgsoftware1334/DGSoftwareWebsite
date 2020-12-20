<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', function () {
    return view('about');
});


Route::get('/cours', function () {
    return view('cours');
});


Route::resource('/contacts' , ContactController::class);
Route::resource('/cours' , CoursController::class);
Route::resource('/offres' , OffreController::class);
Route::resource('/demandes' , DemandeController::class);
Route::get('/demandes/create/{id}' , 'DemandeController@create');


Route::get('newsletter','NewsletterController@index');
Route::post('newsletter/store','NewsletterController@store');

//BackEnd
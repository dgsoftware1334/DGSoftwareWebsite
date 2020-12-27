<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use App\Models\Demande;
use App\Mail\accountCreated;
use App\Mail\demandeNonValide;

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

//Tester les emails

Route::get('/mailable', function () {
    $invoice = App\Models\User::find(2);
    return new App\Mail\accountCreated($invoice,'sfgrger');
});

Route::get('/mailable2', function () {
    $invoice = App\Models\Demande::find(14);
    
    return new App\Mail\demandeNonValide($invoice);
});
//

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', function () {
    return view('about');
});


Route::get('/coursgratuits' ,'CoursController@freeCourses');
Route::resource('/contacts' , ContactController::class);
Route::resource('/offres' , OffreController::class);
Route::resource('/demandes' , DemandeController::class);

Route::get('/inscription' , 'DemandeController@create');

Route::get('newsletter','NewsletterController@index');
Route::post('newsletter/store','NewsletterController@store');

//BackEnd

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('abonnés','UserController@clients');

	//Inscriptions
	Route::get('demande/confirmer/{id}','DemandeController@confirmer');
	Route::get('recu/{id}', 'DemandeController@fileViewer');
	//Cours
	Route::get('/cours', 'CoursController@index');

	Route::put('/cours', 'CoursController@store');

	Route::get('/cours/create', 'CoursController@create');

	Route::get('/cours/{id}', 'CoursController@show');

	Route::get('/cours/{id}/edit', 'CoursController@edit');

	Route::get('/cours/{id}', 'CoursController@update');
	
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'UserController@edit']);
	Route::put('profileUpdate/{id}', ['as' => 'profile.update', 'uses' => 'UserController@update']);
	Route::put('profile', ['as' => 'profile.store', 'uses' => 'UserController@store']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'UserController@password']);
	Route::delete('profile/{id}', ['as' => 'profile.delete', 'uses' => 'UserController@destroy']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});


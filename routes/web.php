<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    $services = DB::table('services')
        ->join('galeries', 'services.id', '=', 'galeries.serviceDe')
        ->select('services.*', 'galeries.typeMedia', 'galeries.lienMedia')
        ->orderBy('services.id', 'asc')
        ->get();

    return view('FrontEnd.home',['services' => $services]);
});

Route::get('/aboutUs', function () {
    return view('FrontEnd.about');
});

Route::get('/contact', function () {
    return view('FrontEnd.contact');
});

Route::get('/services', function () {
    return view('FrontEnd.services');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



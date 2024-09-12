<?php

use Illuminate\Support\Facades\Route;

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

//=======================================================================================================================================================================================

    Route::get('/', function () {
    return view('index');
    })->name('home');

    Route::get('/conocenos', function () {
    return view('conocenos');
    })->name('conocenos');

    Route::get('/servicios', function () {
    return view('servicios');
    })->name('servicios');

    Route::get('/contacto', function () {
    return view('contacto');
    })->name('contacto');

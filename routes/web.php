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

Route::get('/dashboard', function () {
    return view('dashboard',[
        'title' => 'Dashboard'
    ]);
});

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/pencarian', function () {
    return view('pencarian',[
        'title' => 'Fitur Pencarian'
    ]);
});

Route::get('/penjelajahan', function () {
    return view('penjelajahan',[
        'title' => 'Fitur Penjelajahan'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        'title' => 'Dashboard'
    ]);
});
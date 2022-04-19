<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrowsingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchingController;

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

Route::get('/pencarian', [SearchingController::class, 'index']);

Route::get('/penjelajahan', [BrowsingController::class, 'index']);

Route::get('/dashboard', [DashboardController::class,'index']);
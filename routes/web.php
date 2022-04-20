<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrowsingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchingController;
use App\Http\Controllers\DetailController;
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
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/pencarian', [SearchingController::class, 'index']);

Route::get('/penjelajahan', [BrowsingController::class, 'index']);

Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/detail-gender/{namaGender}', [DetailController::class,'index']);
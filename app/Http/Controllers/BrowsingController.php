<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowsingController extends Controller
{
    public function index(){
        return view('penjelajahan',[
            'title' => 'Fitur Penjelajahan'
        ]);
    }
}

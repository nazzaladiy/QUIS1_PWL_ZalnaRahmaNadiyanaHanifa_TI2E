<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $home = home::all();
        return view('index');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function about(){
        return view('about');
    }
    
    public function services(){
        return view('services');
    }
}

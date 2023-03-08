<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return view('p1_js3.home');
    // }
        public function index()
        {
            // throw new Exception("Error Processing Request", 1);
            return view('p2_js3.home');
        }
}
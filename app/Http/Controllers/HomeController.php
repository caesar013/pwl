<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "<h1>Welcome, Travelers!</h1>";
    }
}
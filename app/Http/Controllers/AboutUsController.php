<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $link = "<a href='/about-us/abc'>About us</a>";
        return view('p1_js3.about-us', ['link' => $link]);
    }

    public function about_us()
    {
        return view('p1_js3.about-us-detail', ['cp' => '08986637124', 'email' => 'fikrilha099@gmail.com']);
    }
}

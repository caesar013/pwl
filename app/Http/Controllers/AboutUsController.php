<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        echo "<a href='/about-us/abc'>About us</a>";
    }

    public function about_us()
    {
        echo "CP = 08986637124<br>E-mail = fikrilha099@gmail.com";
    }
}

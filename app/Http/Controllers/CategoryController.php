<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() 
    {
        return view('p1_js3.product');
    }

    public function display($name)
    {
        return view('p1_js3.product-detail', ['name' => $name]);
    }

    // public function marbel_edu_games()
    // {
    //     echo "<h2>Marbel Edu Games</h2>";
    // }

    // public function marbel_and_friends_kids_games()
    // {
    //     echo "<h2>Marbel and Friends Kids Games</h2>";
    // }

    // public function riri_story_books()
    // {
    //     echo "<h2>Riri Story Books</h2>";
    // }

    // public function kolak_kids_songs()
    // {
    //     echo "<h2>Kolak Kids Songs</h2>";
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class NewsController extends Controller
{
    public function index()
    {
        return view('p1_js3.news');
    }


    public function show($news)
    {
        return view('p1_js3.news-detail', ['news' => $news]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    public function index()
    {
        $opo = ArtikelModel::all();
        return view('p1_js4.artikel')->with('data', $opo);
    }
}

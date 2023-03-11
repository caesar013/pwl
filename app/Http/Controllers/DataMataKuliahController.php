<?php

namespace App\Http\Controllers;

use App\Models\DataMataKuliah;
use Illuminate\Http\Request;

class DataMataKuliahController extends Controller
{
    public function index()
    {
        return view('t1_js4.data-mata-kuliah', [
            'data' => DataMataKuliah::all()
        ]);
    }
}

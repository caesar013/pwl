<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    public function index()
    {
        return view('t1_js4.data-keluarga', [
            'data' => DataKeluarga::all()
        ]);
    }
}

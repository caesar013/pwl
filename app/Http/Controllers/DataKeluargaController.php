<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    public function index()
    {
        return view('main.data-keluarga', [
            'data' => DataKeluarga::all()
        ]);
    }
}

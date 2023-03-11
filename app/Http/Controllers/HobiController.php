<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        return view('t1_js4.hobi', [
            'data' => Hobi::all()
        ]);
    }
}

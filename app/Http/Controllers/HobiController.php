<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        return view('main.hobi', [
            'data' => Hobi::all()
        ]);
    }
}

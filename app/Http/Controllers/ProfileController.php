<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Fikril H Ramadhani',
            'email' => 'fikrilha099@gmail.com',
            'cp' => '08986637124',
            'nim' => '2141720175'
        ];
        return view('main.profile', $data);
    }
}

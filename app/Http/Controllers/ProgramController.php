<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('p1_js3.program');
    }

    public function display($name)
    {
        return view('p1_js3.program-detail', ['name' => $name]);
    }

    // public function karir()
    // {
    //     echo "<h1>Selamat Datang di Program Karir</h1><br><br>";
    //     echo "<h3>Selamat menempuh karir anda</h3>";
    // }

    // public function magang()
    // {
    //     echo "<h1>Selamat Datang di Program Magang</h1><br><br>";
    //     echo "<h3>Jadikan waktumu lebih berharga!</h3>";
    // }

    // public function kunjungan_industri()
    // {
    //     echo "<h1>Selamat Datang di Program Kunjungan Industri</h1><br><br>";
    // }
}

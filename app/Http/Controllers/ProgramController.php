<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang di Halaman Program</h1>";
        echo "<br>";
        echo "<ul>";
        echo "<li><a href='/program/karir'>Karir</a></li>";
        echo "<li><a href='/program/magang'>Magang</a></li>";
        echo "<li><a href='/program/kunjungan-industri'>Kunjungan Industri</a></li>";
        echo "</ul>";
    }

    public function karir()
    {
        echo "<h1>Selamat Datang di Program Karir</h1><br><br>";
        echo "<h3>Selamat menempuh karir anda</h3>";
    }

    public function magang()
    {
        echo "<h1>Selamat Datang di Program Magang</h1><br><br>";
        echo "<h3>Jadikan waktumu lebih berharga!</h3>";
    }

    public function kunjungan_industri()
    {
        echo "<h1>Selamat Datang di Program Kunjungan Industri</h1><br><br>";
    }
}

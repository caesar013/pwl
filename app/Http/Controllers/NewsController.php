<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang di Halaman Artikel</h1>";
        echo "<br>";
        echo "<ul>";
        echo "<li><a href='/news/1'>Artikel 1</a></li>";
        echo "<li><a href='/news/2'>Artikel 2</a></li>";
        echo "<li><a href='/news/3'>Artikel 3</a></li>";
        echo "<li><a href='/news/4'>Artikel 4</a></li>";
        echo "<li><a href='/news/5'>Artikel 5</a></li>";
        echo "</ul>";
    }


    public function show($news)
    {
        echo "<h1>Artikel </h1><br>";
        if ($news == 1) {
            echo "<h4>Eduka Studio berbagi untuk warga sekitar terdampak covid-19</h4>";
        } else if($news == 2){
            echo "<h4>Ledakan petasan di Blitar tewaskan 4 orang</h4>"; 
        } else if($news == 3){
            echo "<h4>Bencana Longsor di Jawa Timur lumpuhkan lalu lintas</h4>";
        } else if($news == 4) {
            echo "<h4>Bayi 4 bulan ditemukan tewas setelah dibuang bersama anak kucing</h4>";
        } else if($news == 5){
            echo "<h4>Seorang kakek berusia 69 tahun menyelesaikan marathonnya</h4>";
        }
    }
}
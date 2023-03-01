<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $data = "Awalnya, saya merasa tidak percaya diri setelah diterima di Polinema. Hal ini dikarenakan gambaran awal yang diberikan oleh Politeknik Negeri Jember. Saya sering mendengar kabar miring mengenai
        Politeknik Negeri Jember. Saya mengira bahwa Politeknik Negeri Malang tidak akan jauh berbeda. Tapi ternyata tidak. Ekspektasi saya mengenai Polinema salah besar. Sistem paket yang sudah menyiapkan sks untuk mahasiswanya yang malas 
        mengurus krs seperti saya. Matkul praktek yang membantu saya untuk memahami matkul teori lebih cepat. Semua ekspektasi negatif saya perlahan-lahan menghilang. Teman sekelas saya adalah alasan terbesar saya bisa 'betah' di Polinema.";
        return view('p2_js3.history', ['data'=>$data]);
    }
}

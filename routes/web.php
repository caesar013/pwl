<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [HomeController::class,"hello"]);

Route::get('/', function() 
{
    echo "Selamat Datang";
});

Route::get('/about', function() {
    echo "NIM   : 2141720175";
    echo "\n";
    echo "\nNama  : Fikril H Ramadhani";
});

Route::get('/articles/{id}', function($id){
    echo "Halaman artikel dengan ID = $id";
});
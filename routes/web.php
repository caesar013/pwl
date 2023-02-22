<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\ProgressBar;

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
 //
// Route::get('/', [HomeController::class,"hello"]);

// Route::get('/', function() 
// {
//     echo "Selamat Datang";
// });

// Route::get('/about', function() {
//     echo "NIM   : 2141720175";
//     echo "<br>";
//     echo "Nama  : Fikril H Ramadhani";
// });

// Route::get('/articles/{id}', function($id){
//     echo "Halaman artikel dengan ID = $id";
// });

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// Halaman homepage 
Route::get('/', [HomeController::class, 'index']);

// Halaman category (route prefix)
Route::prefix('category')->group(function() {
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbel_edu_games']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'marbel_and_friends_kids_games']);
    Route::get('/riri-story-books', [CategoryController::class, 'riri_story_books']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolak_kids_songs']);
    Route::get('/', [CategoryController::class, 'index']);
});

// Halaman news (route param)
Route::get('/news/{news}', [NewsController::class, 'show']);
Route::get('/news', [NewsController::class, 'index']);

// Halaman program (route prefix)
Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan_industri']);
    Route::get('/', [ProgramController::class, 'index']);
});

// Halaman About us (route biasa)
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/about-us/abc', [AboutUsController::class, 'about_us']);

// Halaman Contact us (route resource only)
Route::resource('contact-us', ContactUsController::class);
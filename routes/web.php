<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\DataMataKuliahController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\ProgressBar;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasiswaMatakuliahController;
use App\Http\Controllers\MatakuliahController;
use App\Models\MahasiswaMatakuliahModel;
use App\Models\MatakuliahModel;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function() {
    Route::prefix('category')->group(function() {
        Route::get('/{name}', [CategoryController::class, 'display']);
        Route::get('/', [CategoryController::class, 'index']);
    });

    // Halaman news (route param)
    Route::get('/news', [NewsController::class, 'index']);
    Route::get('/news/{news}', [NewsController::class, 'show']);


    // Halaman program (route prefix)
    Route::prefix('program')->group(function(){
        Route::get('/{name}', [ProgramController::class, 'display']);
        Route::get('/', [ProgramController::class, 'index']);
    });

    // Halaman About us (route biasa)
    Route::get('/about-us', [AboutUsController::class, 'index']);
    Route::get('/about-us/abc', [AboutUsController::class, 'about_us']);

    // Halaman Contact us (route resource only)
    Route::resource('contact-us', ContactUsController::class);

    Route::get('/profile', [ProfileController::class, 'index']);

    Route::get('/history', [HistoryController::class, 'index']);

    Route::get('/artikel', [ArtikelController::class, 'index']);

    Route::get('/', [HomeController::class, 'index']);

    Route::resource('/student', MahasiswaController::class);

    Route::resource('/hobby', HobiController::class);

    Route::resource('/family', DataKeluargaController::class);

    Route::resource('/college', DataMataKuliahController::class);

    Route::resource('/score', MahasiswaMatakuliahController::class);

    Route::resource('/subject', MatakuliahController::class);

    Route::get('/articles/cetak_pdf', [ArticlesController::class, 'cetak_pdf']);

    Route::resource('/articles', ArticlesController::class);

    Route::post('/mahasiswa/data', [MahasiswaController::class, 'data']);

});

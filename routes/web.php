<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;

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
// Praktikum 1
// Route::get('/', function (){
//     echo "Selamat Datang";
// });

// Route::get('/about', function (){
//     echo "Aryo Deva Saputra <br> 2141720176";
// });

// Route::get('/articles/{id}', function ($id){
//     return view('article', ['id' => $id]);
// });


// Praktikum 2
// Route::get('/', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

// Route::get('/article/{id}', [ArticleController::class,'article']);


// Praktikum 3
Route::get('/', function(){
    return view('home');
});

Route::prefix('category')->group(function() {
    Route::get('/marbel-edu-game', function () {
        return 'Ini halaman kategory marbel edu game';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return 'Ini halaman kategori marbel and friends kids games';
    });
    Route::get('/riri-story-books', function () {
        return 'Ini halaman kategori riri story books';
    });
    Route::get('/kolak-kids-songs', function () {
        return 'Ini halaman kategori kolak kids songs';
    });
});

Route::get('/news/{link?}', function($link=''){
    if ($link==''){
        echo 'Ini halaman menu news';
    } else {
        echo 'Ini halaman news educa studio berbagi untuk warga sekitar terdampak covid-19';
    }
});

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class,'karir']);
    Route::get('/magang', [ProgramController::class,'magang']);
    Route::get('/kunjungan', [ProgramController::class,'kunjungan']);
});

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::resource('contact-us', ContactController::class);
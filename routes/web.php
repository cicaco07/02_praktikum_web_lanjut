<?php

use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/article/{id}', [PageController::class,'article']);
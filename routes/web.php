<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route ke halaman Home
Route::get('/home', function () {
    return view('home');
});

// Route ke halaman About
Route::get('/about', function () {
    return view('about', [
        'nama' => 'R. Angga Kusna Jati',
        'jurusan' => 'Teknologi Rekayasa Perangkat Lunak'
    ]);
});

// Route yang ditangani oleh PostController
Route::get('/posts', [PostController::class, 'index']);

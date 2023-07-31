<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('awal.home',[
        'title' => 'Home'
    ]);
});
Route::get('/academic', function () {
    return view('academic.index', [
        'title' => 'Academic'
        ]);
});
Route::get('/about', function () {
    return view('awal.about',[
        'title' => 'About'
    ]);
});

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/galeries', [PostController::class, 'index']);

Route::get('galeries/{slug}', [PostController::class, 'show']);
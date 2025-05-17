<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::resource('buku', BukuController::class);
// Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about',['nama' => 'AhmadEpendi']);
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});




<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\Auth\RegisterController; // Import RegisterController sudah ditambahkan

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Homepage
Route::get('/', function () {
    return view('home'); 
})->name('home');

// 2. Route Kategori
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// 3. Auth Routes (Login)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 4. Auth Routes (Register) - SUDAH DIPERBAIKI
// Menampilkan Halaman Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Memproses Data Pendaftaran (Mencegah eror Method Not Allowed)
Route::post('/register', [RegisterController::class, 'register']);

// 5. Route Search
Route::get('/search', function (Request $request) {
    $query = $request->input('query');
    if (!$query) {
        return redirect()->back();
    }
    return view('category', [
        'slug' => 'Hasil Pencarian: ' . strtoupper($query),
        'products' => [] 
    ]);
})->name('search');
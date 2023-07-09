<?php

use Illuminate\Support\Facades\Route;

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

Route::get(
    '/welcome',
    function () {
        return view('welcome');
    }
);

Route::get(
    '/produk',
    function () {
        return view('produk');
    }
);

Route::get(
    '/login',
    function () {
        return view('auth.login');
    }
);

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
        "image" => "Klinik.jpg"
    ]);
});

Route::get('/kontakMobile1', function () {
    return view('kontakMobile1', [
        "title" => "Kontak"
    ]);
});

Route::get('/kontakMobile2', function () {
    return view('kontakMobile2', [
        "title" => "Kontak"
    ]);
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
Route::resource('/carts', App\Http\Controllers\CartController::class);

Route::resource('/dashboard', App\Http\Controllers\DashboardController::class);

Route::resource('/user', App\Http\Controllers\UserDashboardController::class);



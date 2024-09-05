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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hallo', function () {
    return "hallo ...";
});

Route::post('/hallo', function () {
    return "hallo ...";
});

// Rute dengan parameter
Route::get('/user/{xx}', function ($d) {
    return "User ID: " . $d;
});

// Rute dengan parameter opsional
Route::get('/user/{name?}', function ($name = '') {
    return "Hello, " . $name;
});

//Rute group
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/profile', function () {
        return 'Admin Profile';
    });
});

Route::get('/dashboard', function () {
    return 'Welcome to your dashboard!';
})->middleware('auth');

Route::get('/pejumlahan', function () {
    return 1 + 2;
});

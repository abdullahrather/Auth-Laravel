<?php

use App\Http\Controllers\AuthController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/error-404', function () {
    return view('admin.404');
});
Route::get('/blank', function () {
    return view('admin.blank');
});
Route::get('/buttons', function () {
    return view('admin.buttons');
});
Route::get('/cards', function () {
    return view('admin.cards');
});
Route::get('/charts', function () {
    return view('admin.charts');
});
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
});
Route::get('/', function () {
    return view('admin.index');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/tables', function () {
    return view('admin.tables');
});
Route::get('/animation', function () {
    return view('admin.utilities-animation');
});
Route::get('/border', function () {
    return view('admin.utilities-border');
});
Route::get('/color', function () {
    return view('admin.utilities-color');
});
Route::get('/other', function () {
    return view('admin.utilities-other');
});

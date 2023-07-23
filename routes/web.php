<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\PagesController;

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


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::get('/', [AuthController::class, 'register'])->name('register');
    Route::post('/', [AuthController::class, 'registerPost'])->name('register.store');
});

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'components', 'as' => 'components.'], function () {
        Route::get('/button', [ComponentsController::class, 'button'])->name('button');
        Route::get('/card', [ComponentsController::class, 'card'])->name('card');
    });

    Route::group(['prefix' => 'utilities', 'as' => 'utilities.'], function () {
        Route::get('/color', [UtilitiesController::class, 'color'])->name('color');
        Route::get('/border', [UtilitiesController::class, 'border'])->name('border');
        Route::get('/animation', [UtilitiesController::class, 'animation'])->name('animation');
        Route::get('/other', [UtilitiesController::class, 'other'])->name('other');
    });

    Route::group(['prefix' => 'charts', 'as' => 'charts.'], function () {
        Route::get('/', [ChartsController::class, 'chart'])->name('chart');
    });

    Route::group(['prefix' => 'tables', 'as' => 'tables.'], function () {
        Route::get('/', [TablesController::class, 'table'])->name('table');
    });

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('/blank', [PagesController::class, 'blank'])->name('blank');
    });
});

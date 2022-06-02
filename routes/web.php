<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/menu', [App\Http\Controllers\TrainingController::class, 'menuCreatePost'])->name('menuCreate');
    Route::post('/musclecountRegister', [App\Http\Controllers\TrainingController::class, 'musclecountRegister'])->name('musclecountRegister');
    Route::get('/menulist', [App\Http\Controllers\TrainingController::class, 'menulist'])->name('menulist');
    Route::get('/menuDelete/{id}',[App\Http\Controllers\TrainingController::class,'menuDelete']);
    Route::get('/taisosei', [App\Http\Controllers\HealthController::class, 'taisosei'])->name('taisosei');
    Route::post('/taisosei', [App\Http\Controllers\HealthController::class, 'create']);
    Route::get('/chart', [App\Http\Controllers\ChartController::class, 'index'])->name('chart');
});

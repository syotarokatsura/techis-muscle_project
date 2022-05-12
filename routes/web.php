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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basics', [App\Http\Controllers\BasicController::class, 'index'])->name('basics');
Route::get('/add', [App\Http\Controllers\BasicController::class, 'add'])->name('add');
Route::post('/add', [App\Http\Controllers\BasicController::class, 'create'])->name('create');
Route::post('/basics', [App\Http\Controllers\BasicController::class, 'index'])->name('basics');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/menu', [App\Http\Controllers\TestController::class, 'index'])->name('menu'); 
Route::post('/menuCreate', [App\Http\Controllers\TestController::class, 'menuCreate'])->name('menuCreate');
Route::post('/musclecountRegister', [App\Http\Controllers\TestController::class, 'musclecountRegister'])->name('musclecountRegister'); 
Route::get('/menulist', [App\Http\Controllers\TestController::class, 'menulist'])->name('menulist');


Route::get('/taisosei', [App\Http\Controllers\HealthController::class, 'taisosei']);
Route::get('/menuDelete/{id}',[App\Http\Controllers\TestController::class,'menuDelete']);
Route::get('/register', [App\Http\Controllers\TrainingController::class, 'register']);

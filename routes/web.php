<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontController::class,'index']);

Route::get('/add/score',[FrontController::class,'addScore'])->name('add.score');
Route::post('/update/score',[FrontController::class,'updateScore'])->name('update.score');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

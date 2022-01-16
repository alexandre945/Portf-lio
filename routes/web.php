<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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


Route::get('/challeng',[PortfolioController::class, 'challeng'])->name('challeng.index');
Route::get('/profile',[PortfolioController::class, 'create'])->name('create.profile');
Route::get('/home' , [PortfolioController::class, 'index'])->name('home.index');


Route::get('/', function () {
    return view('welcome');
});

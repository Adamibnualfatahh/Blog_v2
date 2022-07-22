<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('main.index');
})->name('home');

Route::get('/about', function () {
    return view('main.about');
})->name('about');

Route::get('/blog',[BlogsController::class,'index'])->name('blog');
Route::get('/portofolio',[ProjectController::class,'index'])->name('portofolio');
Route::get('/content/adamibnu/{path}',[BlogsController::class,'show','path'=>'path'])->name('content');
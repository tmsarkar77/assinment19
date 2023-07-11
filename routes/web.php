<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'page']);

Route::get('/postdata',[HomeController::class,'postdata']);
Route::get('/singlepost',[HomeController::class,'singlepost'])->name('singlepost');

Route::get('/commentpage',[CommentController::class,'commentpage'])->name('commentpage');
Route::post('/comment',[CommentController::class,'comment'])->name('comment');
Route::get('/commentdata',[HomeController::class,'commentdata'])->name('commentdata');
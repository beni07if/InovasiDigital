<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WebpageController::class, 'index'])->name('index');
Route::get('/about', [WebpageController::class, 'about'])->name('about');
Route::get('/events-and-highlight', [WebpageController::class, 'event'])->name('event');
Route::get('/single-blog', [WebpageController::class, 'singleBlog'])->name('singleBlog');
Route::get('/career', [WebpageController::class, 'career'])->name('career');
Route::get('/solution', [WebpageController::class, 'solution'])->name('solution');

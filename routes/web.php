<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MainController;
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


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'do_login'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'do_register'])->name('register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/search', [IndexController::class, 'search'])->name('search');
Route::get('/article', [IndexController::class, 'article'])->name('article');
Route::get('/article/{id}', [IndexController::class, 'article_detail'])->name('article.detail');
Route::get('/article/download/{path}', [IndexController::class, 'download'])->name('download');
Route::get('/article/form/add', [IndexController::class, 'article_form'])->name('article.form');
Route::post('/article/form/add', [IndexController::class, 'article_create'])->name('article.form.post');

<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
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
// Routes defined
Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/category', function(){
    return view('category.index');
});
Route::get('/medicine', function(){
    return view('medicine.index');
});

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

// Route::get('/dashboard', [PagesController::class, 'dashboard']);

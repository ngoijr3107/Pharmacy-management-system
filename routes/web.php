<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MedicineController;
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
    return view('auth.login');
});
Route::get('/category', function(){
    return view('category.index');
});
Route::get('/medicine', function(){
    return view('medicine.index');
});

Route::get('/category', [CategoryController::class, 'index']);
Route::post('category/create', [CategoryController::class, 'store']);
Route::get('category/edit/{id}', [CategoryController::class, 'edit']);
Route::patch('category/edit', [CategoryController::class, 'update']);
Route::delete('category/{id}', [CategoryController::class, 'destroy']);

Route::get('/medicine', [MedicineController::class, 'index']);
Route::post('medicine/create',[MedicineController::class, 'store']);
Route::put('medicine',[MedicineController::class, 'update']);

Route::get('/user', [UserController::class, 'index']);

// Route::get('/dashboard', [PagesController::class, 'dashboard']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

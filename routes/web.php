<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
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

Route::view('/', 'welcome');


//dashboard routes
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard', 'as' => 'admin.'], function () {
    //single action controllers
    Route::get('/', HomeController::class)->name('home');

    //Category routes...
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/CreateCategory', [CategoryController::class, 'create'])->name('CreateCategory');
    Route::post('/category', [CategoryController::class, 'store'])->name('category');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('EditCategory');
    Route::put('/CategoryUpdate/{category}', [CategoryController::class, 'update'])->name('CategoryUpdate');
    Route::delete('/CategoryDelete/{id}', [CategoryController::class, 'destroy'])->name('CategoryDelete');

    //medicine routes
    Route::get('/medicine', [MedicineController::class, 'index'])->name('medicine');
    Route::get('/CreateMedicine', [MedicineController::class, 'create'])->name('CreateMedicine');
    Route::post('/medicine', [MedicineController::class, 'store'])->name('medicine');
    Route::get('medicine/{id}/edit', [MedicineController::class, 'edit'])->name('EditMedicine');
    Route::put('UpdateMedicine/{medicine}', [MedicineController::class, 'update'])->name('UpdateMedicine');
    Route::delete('medicine/{id}', [MedicineController::class, 'destroy'])->name('DeleteMedicine');

    //Supplier routes
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
    Route::get('/CreateSupplier', [SupplierController::class, 'create'])->name('CreateSupplier');
    Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier');
    Route::get('supplier/{id}/edit', [SupplierController::class, 'edit'])->name('EditSupplier');
    Route::put('UpdateSupplier/{supplier}', [SupplierController::class, 'update'])->name('UpdateSupplier');
    Route::delete('supplier/{id}', [SupplierController::class, 'destroy'])->name('DeleteSupplier');

    //Customer routes
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('/CreateCustomer', [CustomerController::class, 'create'])->name('CreateCustomer');
    Route::post('/customer', [CustomerController::class, 'store'])->name('customer');
    Route::get('customer/{id}/edit', [CustomerController::class, 'edit'])->name('EditCustomer');
    Route::put('UpdateCustomer/{customer}', [CustomerController::class, 'update'])->name('UpdateCustomer');
    Route::delete('customer/{id}', [CustomerController::class, 'destroy'])->name('DeleteCustomer');

    Route::view('/buttons', 'admin.buttons')->name('buttons');
    Route::view('/cards', 'admin.cards')->name('cards');
    Route::view('/charts', 'admin.charts')->name('charts');
    Route::view('/forms', 'admin.forms')->name('forms');
    Route::view('/modals', 'admin.modals')->name('modals');
    Route::view('/tables', 'admin.tables')->name('tables');

    Route::group(['prefix' => 'pages', 'as' => 'page.'], function () {
        Route::view('/404-page', 'admin.pages.404')->name('404');
        Route::view('/blank-page', 'admin.pages.blank')->name('blank');
        Route::view('/create-account-page', 'admin.pages.create-account')->name('create-account');
        Route::view('/forgot-password-page', 'admin.pages.forgot-password')->name('forgot-password');
        Route::view('/login-page', 'admin.pages.login')->name('login');
    });
});


require __DIR__ . '/auth.php';

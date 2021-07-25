<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
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


// |========================================================================================|
// *--------------------------------- FRONTEND ROUTE LIST ----------------------------------*
// |========================================================================================|

Route::get('/',[FrontendController::class, 'index'])->name('home.page');


// |========================================================================================|
// *--------------------------------- BACKEND ROUTE LIST ----------------------------------*
// |========================================================================================|


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// ADMIN CATEGORY ROUTES
Route::prefix('category')->group(function () {

    Route::get('/', [CategoryController::class, 'Index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'Create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'Store'])->name('category.store');
    Route::get('/edit/{category}', [CategoryController::class, 'Edit'])->name('category.edit');
    Route::post('/update/{category}', [CategoryController::class, 'Update'])->name('category.update');
    Route::get('/destroy/{category}', [CategoryController::class, 'Destroy'])->name('category.destroy');
});

// ADMIN SUBCATEGORY ROUTES
Route::prefix('subcategory')->group(function () {

    Route::get('/', [SubCategoryController::class, 'index'])->name('subcategory.index');
    Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
    Route::post('/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
    Route::get('/edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
    Route::post('/update/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
    Route::get('/destroy/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
});

// ADMIN PRODUCT ROUTES
Route::prefix('product')->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/view/{id}', [ProductController::class, 'show'])->name('product.view');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::post('/image/update/{id}', [ProductController::class, 'productImageUpdate'])->name('product.image.update');

    Route::get('/subcategory/ajax/{category_id}', [ProductController::class, 'GetSubCategory']);

});

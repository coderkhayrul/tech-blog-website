<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\LanguageController;
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

Route::get('/', [FrontendController::class, 'index'])->name('home.page');

// Website Include Route List Start
Route::get('/contact', [FrontendController::class, 'homeContact'])->name('home.contact');
Route::get('/about', [FrontendController::class, 'homeAbout'])->name('home.about');
Route::get('/copyright', [FrontendController::class, 'homeCopyright'])->name('home.copyright');
Route::get('/privacy', [FrontendController::class, 'homePrivacy'])->name('home.privacy');
Route::get('/terms', [FrontendController::class, 'homeTerms'])->name('home.terms');
// Website Include Route List Start

Route::get('post/{slug}', [FrontendController::class, 'postShow'])->name('post.show');

Route::get('category/post/{id}/{slug}', [FrontendController::class, 'categoryPostAll']);

//  SINGLE POST NEXT AND PREVIOUS BUTTON FUNCTION
Route::get('post/{id}/{slug}', [FrontendController::class, 'previousProduct']);
Route::get('post/{id}/{slug}', [FrontendController::class, 'nextProduct']);


// Multi Language Route List
Route::get('/language/english/', [LanguageController::class, 'English'])->name('english.language');
Route::get('/language/bangla/', [LanguageController::class, 'Bangla'])->name('bangla.language');


// |========================================================================================|
// *--------------------------------- BACKEND ROUTE LIST ----------------------------------*
// |========================================================================================|



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {
    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
        'forgot' => false, //Email Forgot Routes...
    ]);

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
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

            Route::get('/status/enable/{id}', [ProductController::class, 'productStatusEnable'])->name('product.status.enable');
            Route::get('/status/disable/{id}', [ProductController::class, 'productStatusDisable'])->name('product.status.disable');
        });

        // ADMIN SETTING ROUTES
        Route::prefix('setting')->group(function () {

            Route::get('/index', [AdminController::class, 'setting'])->name('setting.index');
            Route::post('/update/{id}', [AdminController::class, 'settingUpdate'])->name('admin.setting.update');

            Route::get('/social', [AdminController::class, 'settingSocial'])->name('admin.setting.social');
            Route::post('/social/update/{id}', [AdminController::class, 'settingSocialUpdate'])->name('setting.social.update');

            Route::get('/seo', [AdminController::class, 'settingSeo'])->name('admin.setting.seo');
            Route::post('/seo/update/{id}', [AdminController::class, 'settingSeoUpdate'])->name('setting.seo.update');

            Route::get('/contact', [AdminController::class, 'settingContact'])->name('admin.setting.contact');
            Route::post('/contact/update/{id}', [AdminController::class, 'settingContactUpdate'])->name('setting.contact.update');
        });

        // ADMIN SETTING ROUTES
        Route::prefix('profile')->group(function () {

            Route::get('/view', [ProfileController::class, 'profileView'])->name('admin.profile.view');
            Route::get('/edit', [ProfileController::class, 'profileEdit'])->name('admin.profile.edit');
            Route::post('/update', [ProfileController::class, 'profileUpdate'])->name('admin.profile.update');
            Route::post('/image/update', [ProfileController::class, 'profileImageUpdate'])->name('admin.profile.image.update');
        });
    });
});

<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::view('contact', 'contact')->name('contact');
Route::view('about-us', 'about-us')->name('about-us');
Route::view('vendors', 'vendors')->name('vendors');

Route::get('news', [PostController::class,'news'])->name('news');
Route::get('news-item/{post}', [PostController::class,'show'])->name('news-item');
Route::get('products', [\App\Http\Controllers\ProductController::class,'products_show'])->name('products');

Route::get('products-item/{product}', [\App\Http\Controllers\ProductController::class,'show'])->name('products-item');

Route::group(['prefix' => 'about-vendor', 'as' => 'about-vendor.'], function () {
    Route::view('about-vendor--axis', 'about-vendor.about-vendor--axis')->name('about-vendor--axis');
    Route::view('about-vendor--acer', 'about-vendor.about-vendor--acer')->name('about-vendor--acer');
    Route::view('about-vendor--canon', 'about-vendor.about-vendor--canon')->name('about-vendor--canon');
    Route::view('about-vendor--cisco', 'about-vendor.about-vendor--cisco')->name('about-vendor--cisco');
    Route::view('about-vendor--lenovo', 'about-vendor.about-vendor--lenovo')->name('about-vendor--lenovo');
    Route::view('about-vendor--nec', 'about-vendor.about-vendor--nec')->name('about-vendor--nec');
    Route::view('about-vendor--panasonic', 'about-vendor.about-vendor--panasonic')->name('about-vendor--panasonic');
    Route::view('about-vendor--realme', 'about-vendor.about-vendor--realme')->name('about-vendor--realme');
    Route::view('about-vendor--samsung', 'about-vendor.about-vendor--samsung')->name('about-vendor--samsung');
});

Auth::routes([
    'confirm' => false,
    'login' => true,
    'logout' => true,
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('messages/index', [MessageController::class,'index'])->name('messages.index');
    Route::delete('messages/delete/{message}', [MessageController::class,'destroy'])->name('messages.delete');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('posts', PostController::class);
    Route::resource('contacts', \App\Http\Controllers\ContactController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);

});
Route::post('index', [MessageController::class,'store'])->name('messages.store');
Route::get('index', [\App\Http\Controllers\LocalizationController::class,'index'])->name('index');
Route::get('change/lang', 'LocalizationController@lang_change')->name('LangChange');
Route::get('/', function (){
    return redirect('index');
});
Route::get('products/categories/{category}',[\App\Http\Controllers\ProductController::class,'get_category_products'])->name('get_category_products');



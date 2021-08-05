<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('index', 'index')->name('index');
Route::view('contact', 'contact')->name('contact');
Route::view('about-us', 'about-us')->name('about-us');
Route::view('vendors', 'vendors')->name('vendors');
Route::view('news', 'news')->name('news');
Route::view('news', 'news')->name('news');
Route::view('news-item', 'news-item.news-item')->name('news-item');
Route::view('products', 'products')->name('products');
Route::view('products-item', 'product-item.product-item')->name('products-item');


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

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('posts', PostController::class);
});

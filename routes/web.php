<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\ShoppingController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {

    /**
    * Auth (Register / Login)
    */
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');

    /**
    * Home
    */
    Route::get('/', 'home')->name('home');

    /**
    * Gallery
    */
    Route::get('gallery', 'gallery')->name('gallery');

    /**
    * Cart (Shopping)
    */
    Route::get('/cart', function () {
        Route::resource('shoppings', ShoppingController::class);
        return view('cart');
    })->name('cart');

    /**
    * Account
    */
    Route::get('account', 'account')->name('account');

    /**
     * Admin Dashboard
     */
    Route::group(['middleware' => ['is_admin']], function(){
        Route::redirect('admin/dashboard', '/admin/dashboard/nfts')->name('nfts-dashboard');
        Route::resource('admin/dashboard/nfts', NftController::class);
    });

    /**
     * Shoppings
     */
    Route::group(['middleware' => ['auth']], function(){
        Route::resource('shoppings', ShoppingController::class);
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

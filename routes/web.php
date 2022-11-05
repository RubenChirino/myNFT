<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\NftController;
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
     * Admin Dashboard
     */
    Route::group(['middleware' => ['auth']], function(){
        Route::resource('nfts', NftController::class);

        Route::get('admin/dashboard', 'admin_dashboard')->name('admin-dashboard');
    });



    Route::get('admin/dashboard/edit/{nft:slug}', 'admin_dashboard_edit')->name('edit-nft');
});

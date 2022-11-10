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
    Route::group(['middleware' => ['is_admin']], function(){
        Route::get('admin/dashboard', 'dashboard')->name('dashboard');

        Route::resource('admin/dashboard/nfts', NftController::class); // Or only NFT
    });



    Route::get('admin/dashboard/edit/{nft:slug}', 'dashboardedit')->name('edit-nft');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {
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
    Route::get('admin/dashboard', 'admin_dashboard')->name('admin-dashboard');

    Route::get('admin/dashboard/edit/{nft:slug}', 'admin_dashboard_edit')->name('edit-nft');
});

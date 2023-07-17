<?php

use App\Http\Controllers\Admin\ArticaleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('/admin')->group(function () {
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/articales', ArticaleController::class);
    Route::resource('/site', SiteSettingController::class);
    Route::resource('/blog', BlogController::class);
    Route::get('/contact/{id}',[ContactController::class ,'show'])->name('contact.show');

});


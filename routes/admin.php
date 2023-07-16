<?php

use App\Http\Controllers\Admin\ArticaleController;
use App\Http\Controllers\Admin\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/articales', ArticaleController::class);

});


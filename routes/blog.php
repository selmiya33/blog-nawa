<?php

use App\Http\Controllers\ArticaleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class ,'index'])->name('home');
Route::get('/articales-classic',[ArticaleController::class ,'classic'])->name('articales.classic');
Route::get('/articales-simple',[ArticaleController::class ,'simpel'])->name('articales.simpel');
Route::get('/articales-single/{id}',[ArticaleController::class ,'single'])->name('articales.single');

Route::get('/contact-us',[ContactController::class ,'index'])->name('contact.index');
Route::post('/contact-us',[ContactController::class ,'store'])->name('contact.store');





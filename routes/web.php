<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/skills', [PageController::class, 'skills']);
Route::get('/projects', [PageController::class, 'projects']);
Route::get('/resume', [PageController::class, 'resume']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

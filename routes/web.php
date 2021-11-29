<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Page\{
    PageController,
    LanguageController,
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');
Route::post('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/change-locale/{lang}', [LanguageController::class, 'changeLocale'])->name('change-locale');
Route::get('/images/{path}', [App\Http\Controllers\Page\ImageController::class, 'show'])->where('path', '.*')->name('image');

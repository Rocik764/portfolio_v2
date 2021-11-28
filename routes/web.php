<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Page\{
    PageController,
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
Route::get('/change-locale/{lang}', [PageController::class, 'changeLocale'])->name('change-locale');
Route::post('/contact', [PageController::class, 'contact'])->name('contact');

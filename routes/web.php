<?php

use App\Http\Controllers\Guest\ComicController as GuestComicController;
use App\Http\Controllers\Admin\ComicController as AdminComicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GuestComicController::class, 'index'])->name('home.index');

Route::get('/comics/{comic}', [GuestComicController::class, 'show'])->name('comic.show');

Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('comics', AdminComicController::class);
});


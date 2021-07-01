<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookmarksController;

Route::get('/', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\BookmarksController::class, 'index'])->name('home');

Route::post('store',[BookmarksController::class, 'store'])->name('bookmarks.store');

Route::delete('/bookmarks/{bookmark}', [BookmarksController::class, 'destroy'])->name('bookmarks.delete');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', [ItemController::class, 'index'])->name('item.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('item.create');
Route::post('/items', [ItemController::class, 'store'])->name('item.store');
Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('item.edit');
Route::put('/items/{item}/update', [ItemController::class, 'update'])->name('item.update');
Route::delete('/items/{item}/destroy', [ItemController::class, 'destroy'])->name('item.destroy');
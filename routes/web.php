<?php

use App\Http\Controllers\StoreBookController;
use App\Models\StoreBook;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['bookstores'=>StoreBook::paginate(5)]);
})->name('home');


Route::get('/create', [StoreBookController::class, 'create']);
Route::post('/store', [StoreBookController::class, 'bookAdd'])->name('store');

Route::get('/edit/{id}', [StoreBookController::class, 'editData'])->name('edit');
Route::post('/update/{id}', [StoreBookController::class, 'updateData'])->name('update');

Route::get('/delete/{id}', [StoreBookController::class, 'deleteData'])->name('delete');
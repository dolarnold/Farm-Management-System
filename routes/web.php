<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Livestock Routes
Route::get('/livestock', 'LivestockController@index')->name('livestock.index');
Route::get('/livestock/create', 'LivestockController@create')->name('livestock.create');
Route::post('/livestock', 'LivestockController@store')->name('livestock.store');
Route::get('/livestock/{livestock}', 'LivestockController@show')->name('livestock.show');
Route::get('/livestock/{livestock}/edit', 'LivestockController@edit')->name('livestock.edit');
Route::put('/livestock/{livestock}', 'LivestockController@update')->name('livestock.update');
Route::delete('/livestock/{livestock}', 'LivestockController@destroy')->name('livestock.destroy');
});

require __DIR__.'/auth.php';

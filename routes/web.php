<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//listings
// Route::get('/listings/index', [ListingController::class, 'index']);

// Route::get('/listings/create', [ListingController::class, 'create']);

// Route::post('/listings/store', [ListingController::class, 'store']);

// Route::get('/listings/edit', [ListingController::class, 'edit']);

// Route::put('/listings/update', [ListingController::class, 'update']);

// Route::delete('/listings/{id}', [ListingController::class, 'destroy']);

Route::resource('listings', ListingController::class);

//messages
Route::get('/messages', [MessageController::class, 'index']);

Route::get('/MAINPAGE', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('MAINPAGE');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::resource('listings', ListingController::class);

require __DIR__.'/auth.php';

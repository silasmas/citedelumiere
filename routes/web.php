<?php

use App\Http\Controllers\CulteController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [CulteController::class, 'index'])->name('home');
Route::get('/apropo', [CulteController::class, 'about'])->name('apropo');
Route::get('/contact', [CulteController::class, 'contact'])->name('contact');
Route::get('/programmes', [CulteController::class, 'programmes'])->name('programmes');
Route::get('/membre', [CulteController::class, 'membre'])->name('membre');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

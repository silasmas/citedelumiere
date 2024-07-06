<?php

use App\Http\Controllers\CulteController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PredicationController;
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

Route::get('/enseignement', [CulteController::class, 'enseignement'])->name('enseignement');
Route::get('/priere', [CulteController::class, 'priere'])->name('priere');
Route::get('/adoration', [CulteController::class, 'adoration'])->name('adoration');
Route::get('/seminaire', [CulteController::class, 'seminaire'])->name('seminaire');

Route::get('/detail/{id}', [CulteController::class, 'detail'])->name('detail');

Route::get('/membres', [FormationController::class, 'index'])->middleware(['auth', 'verified'])->name('membres');

Route::middleware('auth')->prefix('membres')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
    Route::get('/admin_culte', [CulteController::class, 'culte'])->name('admin_culte');
    Route::get('/admin_sermon', [PredicationController::class, 'index'])->name('admin_sermon');

    Route::post('/addCulte', [CulteController::class, 'store'])->name('addCulte');
    Route::post('/addPreach', [PredicationController::class, 'store'])->name('addPreach');

    Route::post('/updateCulte', [CulteController::class, 'update'])->name('updateCulte');
    Route::post('/updatePreach', [PredicationController::class, 'update'])->name('updatePreach');

    Route::get('/editeCulte/{id}', [CulteController::class, 'show'])->name('editeCulte');
    Route::get('/editePreach/{id}', [PredicationController::class, 'show'])->name('editePreach');

    Route::get('/deleteCulte/{id}', [CulteController::class, 'destroy'])->name('deleteCulte');
    Route::get('/deletePreach/{id}', [PredicationController::class, 'destroy'])->name('deletePreach');
});

require __DIR__ . '/auth.php';

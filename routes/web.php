<?php

use App\Http\Controllers\CulteController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\MessageController;
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

Route::post('/sendMessage', [MessageController::class, 'store'])->name('sendMessage');
Route::get('/detail/{id}', [CulteController::class, 'detail'])->name('detail');

Route::get('/membres', [FormationController::class, 'index'])->middleware(['auth', 'verified'])->name('membres');

Route::middleware('auth')->prefix('membres')->group(function () {
    Route::get('/formationDetail/{id}', [FormationController::class, 'show'])->name('formationDetail');
    Route::get('/formateur/{id}', [FormateurController::class, 'show'])->name('formateur');
    Route::get('/addFavori/{id}', [FavorisController::class, 'index'])->name('addFavori');
    Route::get('beginForm/{id}', [FormationController::class, 'beginForm'])->name('beginForm');
    Route::get('mesFormations', [FormationController::class, 'mesFormations'])->name('mesFormations');
    Route::get('favories', [FavorisController::class, 'favories'])->name('favories');
    Route::get('/cours/{id}', [FormationController::class, 'cours'])->name('cours');

    Route::get('profil', [FormationController::class, 'profil'])->name('profil');
    Route::get('compte', [FormationController::class, 'compte'])->name('compte');
    Route::get('photo', [FormationController::class, 'photo'])->name('photo');

    Route::get('deleteFavorie/{id}', [FavorisController::class, 'deleteFavorie'])->name('deleteFavorie');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/editProfil', [FormationController::class, 'editProfil'])->name('editProfil');
    Route::post('/editCompte', [FormationController::class, 'editCompte'])->name('editCompte');
    Route::post('/editephoto', [FormationController::class, 'editphoto'])->name('editephoto');

});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
    Route::get('/admin_culte', [CulteController::class, 'culte'])->name('admin_culte');
    Route::get('/admin_sermon', [PredicationController::class, 'index'])->name('admin_sermon');
    Route::get('/admin_form', [FormationController::class, 'admin_form'])->name('admin_form');
    Route::get('/admin_student', [FormationController::class, 'admin_student'])->name('admin_student');
    Route::get('/admin_exam', [FormationController::class, 'admin_exam'])->name('admin_exam');
    Route::get('/admin_prof', [FormationController::class, 'admin_prof'])->name('admin_prof');
    Route::get('/admin_users', [FormationController::class, 'admin_users'])->name('admin_users');

    Route::post('/addCulte', [CulteController::class, 'store'])->name('addCulte');
    Route::post('/addPreach', [PredicationController::class, 'store'])->name('addPreach');
    Route::post('/addFormation', [FormationController::class, 'store'])->name('addFormation');

    Route::post('/updateCulte', [CulteController::class, 'update'])->name('updateCulte');
    Route::post('/updatePreach', [PredicationController::class, 'update'])->name('updatePreach');

    Route::get('/editeCulte/{id}', [CulteController::class, 'show'])->name('editeCulte');
    Route::get('/editePreach/{id}', [PredicationController::class, 'show'])->name('editePreach');

    Route::get('/deleteCulte/{id}', [CulteController::class, 'destroy'])->name('deleteCulte');
    Route::get('/deletePreach/{id}', [PredicationController::class, 'destroy'])->name('deletePreach');
});

require __DIR__ . '/auth.php';

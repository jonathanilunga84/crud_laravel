<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EtudiantController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('pages.Home');
})->name('Accueil');

Route::get('about', [PostsController::class,'index'])->name('About');

//Route::get('Etudiant', [PostsController::class,'etudiant'])->name('Etudiant');

Route::get('Etudiant', [EtudiantController::class,'index'])->name('Etudiant');

Route::get('/Etudiant/Create', [EtudiantController::class,'create'])->name('Create');

Route::post('/Etudiant/Create', [EtudiantController::class,'store'])->name('AjoutEtudiant');

Route::delete('/Etudiant/{etudiant}', [EtudiantController::class,'delete'])->name('Etudiant.supprimer');
/*
Route::get('/hg', function () {
    return view('pages.Home');
});*/


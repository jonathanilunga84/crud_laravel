<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\UserController;

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
Route::get('/Etudiant/{etudiant}', [EtudiantController::class,'edit'])->name('Etudiant.edit');

Route::post('/Etudiant/Create', [EtudiantController::class,'store'])->name('AjoutEtudiant');

Route::delete('/Etudiant/{etudiant}', [EtudiantController::class,'delete'])->name('Etudiant.supprimer');
Route::put('/Etudiant/{etudiant}', [EtudiantController::class,'update'])->name('Etudiant.update');
/*
Route::get('/hg', function () {
    return view('pages.Home');
});*/
Route::get('Contact', [PostsController::class,'contact'])->name('Contact');
Route::post('/Contact/Create', [PostsController::class,'store'])->name('Contact.Add');

Route::get('Upload', [ImagesController::class,'index'])->name('Upload');
Route::post('Upload/image', [ImagesController::class,'store'])->name('Upload.Add');

Route::resource('user',UserController::class);
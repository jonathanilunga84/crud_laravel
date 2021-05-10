<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('Etudiant', [PostsController::class,'etudiant'])->name('Etudiant');

/*
Route::get('/hg', function () {
    return view('pages.Home');
});*/


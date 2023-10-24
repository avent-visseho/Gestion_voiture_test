<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\voitureController;
use Illuminate\Support\Facades\Route;

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

//categorie controller

Route::get('/', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/categorie/addCategorie', [CategorieController::class, 'create'])->name('addCategorie');
Route::post('/categorie/storeCategorie', [CategorieController::class, 'store'])->name('storeCategorie');
Route::get('/categories/{id}', [CategorieController::class, 'show'])->name('categories.show');


//voiture controller

Route::get('/voitures/addVoiture', [voitureController::class, 'create'])->name('addVoiture');
Route::post('/voitures/storeVoiture', [voitureController::class, 'store'])->name('storeVoiture');
//Route::get('/voitures/details/{id}', [voitureController::class, 'show'])->name('detais');
Route::get('/voitures/details/{id}', [voitureController::class, 'show'])->name('details');

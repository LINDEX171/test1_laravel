<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

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

Route::get('/apprenant', [ApprenantController::class, 'listeApprenant'])->name('liste-apprenant');
Route::get('/formation', [FormationController::class, 'listeFormation'])->name('liste-formation');
Route::get('/creer-formation', [FormationController::class, 'create']);
Route::get('/creer-apprenant', [ApprenantController::class, 'create']);



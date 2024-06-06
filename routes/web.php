<?php

use App\Http\Controllers\NamesController;
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
    return view('home');
});

// creo le varie rotte delle crud

// INDEX
Route::get('/names', [NamesController::class, 'index'])->name('names.index');

// CREATE
Route::get('/names/create', [NamesController::class, 'create'])->name('names.create');

// SHOW
Route::get('/names/{name}', [NamesController::class, 'show'])->name('names.show');

// STORE
Route::post('/names', [NamesController::class, 'store'])->name('names.store');

// EDIT
Route::get('/names/{name}/edit', [NamesController::class, 'edit'])->name('names.edit');

// UPDATE
// put sovrascrive tuta la risorsa mentre patch invece aggiorna solo una parte della risorsa
Route::put('/names/{name}', [NamesController::class, 'update'])->name('names.update');

// DESTROY
Route::delete('/names/{name}', [NamesController::class, 'delete'])->name('names.delete');

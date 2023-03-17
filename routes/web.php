<?php

use App\Http\Controllers\SuperheroController;
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

Route::get('/superheroes/archive',[SuperheroController::class, 'archive']);
Route::post('/superheroes/{superhero}/restore', [SuperheroController::class, 'restore'])->name('superheroes.restore');



Route::delete('/superheroes/{superhero}', [SuperheroController::class, 'destroy']);


Route::resource('superheroes', SuperheroController::class);


// Route::get('/superheroes/create',[SuperheroController::class, 'create']);

// Route::get('/superheroes.store',[SuperheroController::class, 'store']);


// Route::resource('superheroes', SuperheroController::class);

// Route::get('/superheroes',[SuperheroController::class, 'index']);




Auth::routes();

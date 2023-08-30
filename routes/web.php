<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(SeriesController::class)->group(function () {
    Route::get('/series',[SeriesController::class, 'index']);

    Route::get('/series/create',[SeriesController::class, 'create'])->name('series.create');
    Route::post('/series/create',[SeriesController::class, 'post'])->name('series.post');

    Route::delete('/series/{series}',[SeriesController::class, 'destroy'])->name('series.destroy');

    Route::put('/series/{id}',[SeriesController::class, 'update'])->name('series.update');
    Route::get('/series/editar/{id}',[SeriesController::class, 'edit'])->name('series.edit');
});

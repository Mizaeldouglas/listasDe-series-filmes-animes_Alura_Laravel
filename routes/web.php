<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;


Route::get('/', function () {
    return view('welcome');
});


Route::controller(SeriesController::class)->group(function () {
    Route::get('/favoritos',[SeriesController::class, 'index'])->name('series.index');

    Route::get('/favoritos/create',[SeriesController::class, 'create'])->name('series.create');
    Route::post('/favoritos/create',[SeriesController::class, 'post'])->name('series.post');

    Route::delete('/favoritos/{series}',[SeriesController::class, 'destroy'])->name('series.destroy');

    Route::put('/favoritos/{id}',[SeriesController::class, 'update'])->name('series.update');
    Route::get('/favoritos/editar/{id}',[SeriesController::class, 'edit'])->name('series.edit');
});

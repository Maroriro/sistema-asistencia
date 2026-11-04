<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/asistencia', 'asistencia')->name('asistencia');
Route::view('/personas', 'personas')->name('personas');
Route::view('/organizacion', 'organizacion')->name('organizacion');
Route::view('/reportes', 'reportes')->name('reportes');

Route::get('/hola', function () {
    return view('hola', ['nombre' => 'Facundo']);
});
Route::resource('cursos', CursoController::class);
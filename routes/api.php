<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(\App\Http\Controllers\AlunoController::class)->group(function () {
    Route::prefix('alunos')->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::delete('/{id}', 'destroy');
        Route::put('/{id}', 'update');
        Route::post('/', 'store');
    });
});

Route::controller(\App\Http\Controllers\CursoController::class)->group(function () {
    Route::prefix('cursos')->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::delete('/{id}', 'destroy');
        Route::put('/{id}', 'update');
        Route::post('/', 'store');
    });
});

Route::controller(\App\Http\Controllers\MatriculaController::class)->group(function () {
    Route::prefix('matriculas')->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::delete('/{id}', 'destroy');
        Route::put('/{id}', 'update');
        Route::post('/', 'store');
    });
});


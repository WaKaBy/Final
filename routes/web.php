<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatistikaController;

Route::get('/statistika', [StatistikaController::class, 'index']);
Route::get('/statistika/create', [StatistikaController::class, 'create']);
Route::post('/statistika', [StatistikaController::class, 'store']);
Route::get('/statistika/{id}/edit', [StatistikaController::class, 'edit']);
Route::put('/statistika/{id}', [StatistikaController::class, 'update']);
Route::delete('/statistika/{id}', [StatistikaController::class, 'destroy']);

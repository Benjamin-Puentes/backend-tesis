<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Documento_Controller;
use App\Http\Controllers\ReporteFinancieroController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Definición de rutas para Documentos
Route::resource('documentos', Documento_Controller::class);
Route::post('/documentos/upload', [Documento_Controller::class, 'upload'])->name('documentos.upload');

// Rutas para reportes financieros
Route::get('/reportes', [ReporteFinancieroController::class, 'index'])->name('reportes.index');
Route::post('/reportes/generar', [ReporteFinancieroController::class, 'generar'])->name('reportes.generar');

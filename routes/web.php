<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FiscalController;
use App\Http\Controllers\SueldosController;
use App\Http\Controllers\FlujoCajaController;
use App\Http\Controllers\WelcomeController;
//routes/web.php
use App\Http\Controllers\Documento_Controller;



//Auth::routes(['verify' => true]);
//Route::get('/', function () {
    //   print("Wena los k xdxd");
    //});
    
//Route::get('/login', []);
Route::resource('documentos', Documento_Controller::class);
Route::get('documentos/export/pdf', [Documento_Controller::class, 'exportPdf'])->name('documentos.exportPdf');
Route::get('documentos/export/excel', [Documento_Controller::class, 'exportExcel'])->name('documentos.exportExcel');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/flujo-caja', [FlujoCajaController::class, 'index'])->name('flujo.caja');
Route::get('/calcular-sueldos', [SueldosController::class, 'index'])->name('calcular.sueldos');
Route::get('/gestion-fiscal', [FiscalController::class, 'index'])->name('gestion.fiscal');
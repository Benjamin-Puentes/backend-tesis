<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Documento_Controller;
use App\Http\Controllers\ReporteFinancieroController;

//Auth::routes(['verify' => true]);
//Route::get('/', function () {
    //   print("Wena los k xdxd");
    //});
    
    

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::resource('documentos', Documento_Controller::class);
Route::get('/documentos/create', [Documento_Controller::class, 'create'])->name('documentos.crear');
Route::post('/documentos', [Documento_Controller::class, 'store']);
Route::post('/documentos/upload', [Documento_Controller::class, 'upload']);
//Route::get('documentos/export/pdf', [Documento_Controller::class, 'exportPdf'])->name('documentos.exportPdf');
//Route::get('documentos/export/excel', [Documento_Controller::class, 'exportExcel'])->name('documentos.exportExcel');

Route::get('/reportes', [ReporteFinancieroController::class, 'index'])->name('reportes.index');
Route::post('/reportes/generar', [ReporteFinancieroController::class, 'generar'])->name('reportes.generar');


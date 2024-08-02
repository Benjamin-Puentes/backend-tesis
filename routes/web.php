<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Documento_Controller;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ReporteFinancieroController;



//Auth::routes(['verify' => true]);
//Route::get('/', function () {
    //   print("Wena los k xdxd");
    //});
    
    
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::resource('Documentos', Documento_Controller::class);
Route::post('/Documentos', [Documento_Controller::class, 'store']);
Route::get('/Documentos/crear', [Documento_Controller::class, 'create']);
Route::post('/Documentos/upload', [Documento_Controller::class, 'upload']);
//Route::get('Documentos/export/pdf', [Documento_Controller::class, 'exportPdf'])->name('documentos.exportPdf');
//Route::get('Documentos/export/excel', [Documento_Controller::class, 'exportExcel'])->name('documentos.exportExcel');

//Route::resource('compras', CompraController::class);

Route::get('/reportes', [ReporteFinancieroController::class, 'index'])->name('reportes.index');
Route::post('/reportes/generar', [ReporteFinancieroController::class, 'generar'])->name('reportes.generar');
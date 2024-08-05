<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Admin routes


//User routes


Route::get('/images/{nombreImagen}', function ($nombreImagen) {
    return response()->file(public_path('images/' . $nombreImagen));
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });//->middleware('auth:sanctum')
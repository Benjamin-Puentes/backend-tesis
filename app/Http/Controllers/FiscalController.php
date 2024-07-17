<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FiscalController extends Controller
{
    public function index()
    {
        // Obtener los documentos almacenados (ejemplo simple)
        $documentos = [
            ['id' => 1, 'nombre' => 'Documento1.pdf', 'fecha' => '2024-07-16'],
            // Más documentos aquí
        ];
        
        return view('gestion-fiscal', compact('documentos'));
    }

    public function subirDocumento(Request $request)
    {
        $request->validate([
            'documento' => 'required|file|mimes:pdf,docx,xlsx',
        ]);

        $path = $request->file('documento')->store('documentos-fiscales');

        // Guardar el documento en la base de datos si es necesario

        return redirect()->back()->with('success', 'Documento subido exitosamente.');
    }
}
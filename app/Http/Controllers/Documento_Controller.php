<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use Excel;

class Documento_Controller extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }

    public function crear()
    {
        return view('documentos.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string',
            'numero' => 'required|string',
            'fecha' => 'required|date',
            'monto' => 'required|numeric',
            'archivo_pdf' => 'required|file|mimes:pdf',
        ]);

        $archivo_pdf = $request->file('archivo_pdf')->store('documentos');

        Documento::crear([
            'tipo' => $request->tipo,
            'numero' => $request->numero,
            'fecha' => $request->fecha,
            'monto' => $request->monto,
            'archivo_pdf' => $archivo_pdf,
        ]);

        return redirect()->route('documentos.index')->with('success', 'Documento subido con éxito.');
    }

    public function show(Documento $documento)
    {
        return view('documentos.show', compact('documento'));
    }

    public function edit(Documento $documento)
    {
        return view('documentos.edit', compact('documento'));
    }

    public function update(Request $request, Documento $documento)
    {
        $request->validate([
            'tipo' => 'required|string',
            'numero' => 'required|string',
            'fecha' => 'required|date',
            'monto' => 'required|numeric',
            'archivo_pdf' => 'nullable|file|mimes:pdf',
        ]);

        if ($request->hasFile('archivo_pdf')) {
            Storage::delete($documento->archivo_pdf);
            $archivo_pdf = $request->file('archivo_pdf')->store('documentos');
            $documento->archivo_pdf = $archivo_pdf;
        }

        $documento->update($request->all());

        return redirect()->route('documentos.index')->with('success', 'Documento actualizado con éxito.');
    }

    public function destroy(Documento $documento)
    {
        Storage::delete($documento->archivo_pdf);
        $documento->delete();
        
        return redirect()->route('documentos.index')->with('success', 'Documento eliminado con éxito.');
    }

    public function exportPdf()
    {
        $documentos = Documento::all();
        $pdf = PDF::loadView('documentos.pdf', compact('documentos'));
        return $pdf->download('documentos.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new DocumentosExport, 'documentos.xlsx');
    }
}

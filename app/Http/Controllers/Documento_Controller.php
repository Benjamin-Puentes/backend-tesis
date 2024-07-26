<?php

namespace App\Http\Controllers;
use App\Models\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;


class Documento_Controller extends Controller
{
    public function index()
    {
        $documentos = Documentos::all();
        return view('documentos.index', compact('documentos'));
    }

    public function crear()
    {
        return view('documentos.crear');
    }

    public function upload(Request $request)
{
    $request->validate([
        'archivo' => 'required|file|mimes:pdf,doc,docx,csv,xmlx',
    ]);

    $path = $request->file('archivo')->store('documentos');

    return response()->json(['path' => $path]);
}


    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'monto' => 'required|numeric',
            'archivo' => 'required|file|mimes:pdf,doc,docx,csv,xmlx',
        ]);

        $archivo = $request->file('archivo')->store('documentos');

        Documentos::crear([
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'monto' => $request->monto,
            'archivo' => $archivo,
        ]);

        return redirect()->route('documentos.index')->with('success', 'Documento subido con éxito.');
    }

    public function show(Documentos $documento)
    {
        return view('documentos.show', compact('documento'));
    }

    public function edit(Documentos $documento)
    {
        return view('documentos.edit', compact('documento'));
    }

    public function update(Request $request, Documentos $documento)
    {
        $request->validate([
            'tipo' => 'required|string',
            'numero' => 'required|string',
            'fecha' => 'required|date',
            'monto' => 'required|numeric',
            'archivo' => 'nullable|file|mimes:pdf,doc,docx,csv,xmlx',
        ]);

        if ($request->hasFile('archivo')) {
            Storage::delete($documento->archivo);
            $archivo = $request->file('archivo')->store('documentos');
            $documento->archivo = $archivo;
        }

        $documento->update($request->all());

        return redirect()->route('documentos.index')->with('success', 'Documento actualizado con éxito.');
    }

    public function destroy(Documentos $documento)
    {
        Storage::delete($documento->archivo);
        $documento->delete();
        
        return redirect()->route('documentos.index')->with('success', 'Documento eliminado con éxito.');
    }

    public function exportPdf()
    {
        $documentos = Documentos::all();
        $pdf = PDF::loadView('documento.pdf', compact('documento'));
        return $pdf->download('documento.pdf');
    }

}

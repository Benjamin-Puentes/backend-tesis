<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\IOFactory;

class Documento_Controller extends Controller
{
    public function index(Request $request)
    {
        $tipos = Documentos::pluck('doc_tipo')->unique();
        $query = Documentos::query();

        if ($request->has('fecha_inicio') && $request->has('fecha_fin')) {
            $query->whereBetween('doc_fecha', [$request->input('fecha_inicio'), $request->input('fecha_fin')]);
        }

        if ($request->has('doc_tipo')) {
            $query->where('doc_tipo', $request->input('doc_tipo'));
        }

        $documentos = $query->get();

        // Obtener los tipos únicos de documentos para el filtro

        //dd($documentos);
        return view('documentos.index', compact('documentos', 'tipos'));
    }


    public function create()
    {
        return view('documentos.create');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'archivo' => 'required|file|mimes:pdf,doc,docx,csv,xlsx',
        ]);

        $path = $request->file('archivo')->store('documentos');

        return response()->json(['path' => $path]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'doc_tipo' => 'required|string',
            'doc_descripcion' => 'nullable|string',
            'doc_fecha' => 'required|date',
            'doc_monto' => 'required|numeric',
            'archivo' => 'required|file|mimes:pdf,doc,docx,csv,xlsx',
        ]);

        $archivo = $request->file('archivo')->store('documentos');

        Documentos::create([
            'doc_tipo' => $request->doc_tipo,
            'doc_descripcion' => $request->doc_descripcion,
            'doc_fecha' => $request->doc_fecha,
            'doc_monto' => $request->doc_monto,
            'archivo' => $archivo,
        ]);

        return redirect()->route('documentos.index')->with('success', 'Documento subido con éxito.');
    }

    public function edit(Documentos $documento)
    {
        return view('documentos.edit', compact('documento'));
    }

    public function update(Request $request, Documentos $documento)
    {
        $request->validate([
            'tipo' => 'required|string',
            'descripcion' => 'nullable|string',
            'fecha' => 'required|date',
            'monto' => 'required|numeric',
            'archivo' => 'nullable|file|mimes:pdf,doc,docx,csv,xlsx',
        ]);

        if ($request->hasFile('archivo')) {
            Storage::delete($documento->archivo);
            $archivo = $request->file('archivo')->store('documentos');
            $documento->archivo = $archivo;
        }

        $documento->update($request->except('archivo'));

        return redirect()->route('documentos.index')->with('success', 'Documento actualizado con éxito.');
    }

    public function destroy(Documentos $documento)
    {
        Storage::delete($documento->doc_archivo);
        $documento->delete();
        
        return redirect()->route('documentos.index')->with('success', 'Documento eliminado con éxito.');
    }

    // public function exportPdf()
    // {
    //     $documentos = Documentos::all();
    //     $pdf = Pdf::loadView('documentos.pdf', compact('documentos'));
    //     return $pdf->download('documentos.pdf');
    // }
}

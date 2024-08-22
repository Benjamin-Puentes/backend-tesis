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
        $query = Documentos::query();

    // Aplicar filtro por fechas
    if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
        $query->whereBetween('doc_fecha', [$request->input('fecha_inicio'), $request->input('fecha_fin')]);
    } elseif ($request->filled('fecha_inicio')) {
        $query->where('doc_fecha', '>=', $request->input('fecha_inicio'));
    } elseif ($request->filled('fecha_fin')) {
        $query->where('doc_fecha', '<=', $request->input('fecha_fin'));
    }

    // Aplicar filtro por tipo de documento
    if ($request->filled('doc_tipo')) {
        $query->where('doc_tipo', $request->input('doc_tipo'));
    }

    $documentos = $query->get();
    $tipos = Documentos::pluck('doc_tipo')->unique();

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

        $path = $request->file('doc_archivo')->store('documentos');

        return response()->json(['path' => $path]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'doc_tipo' => 'required|string|max:255',
            'doc_descripcion' => 'nullable|string|max:255',
            'doc_fecha' => 'required|date',
            'doc_monto' => 'required|numeric',
            'doc_archivo' => 'nullable|file|mimes:pdf,doc,docx,csv,xlsx',
        ]);

        if ($request->hasFile('doc_archivo')) {
            $archivo = $request->file('doc_archivo')->store('documentos');
        } else {
            $archivo = null;
        }

        Documentos::create([
            'doc_tipo' => $request->doc_tipo,
            'doc_descripcion' => $request->doc_descripcion,
            'doc_fecha' => $request->doc_fecha,
            'doc_monto' => $request->doc_monto,
            'doc_archivo' => $archivo,
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
            'doc_tipo' => 'required|string|max:255',
            'doc_descripcion' => 'nullable|string|max:255',
            'doc_fecha' => 'required|date',
            'doc_monto' => 'required|numeric',
            'doc_archivo' => 'nullable|file|mimes:pdf,doc,docx,csv,xlsx',
        ]);

	if ($documento->archivo && $request->hasFile('doc_archivo')) {
            Storage::delete($documento->archivo);
	}

        if ($request->hasFile('doc_archivo')) {
            $archivo = $request->file('doc_archivo')->store('documentos');
            $documento->doc_archivo = $archivo;
        }

        $documento->update($request->except('doc_archivo'));

        return redirect()->route('documentos.index')->with('success', 'Documento actualizado con éxito.');
    }

    public function destroy(Documentos $documento)
    {
        if ($documento->doc_archivo) {
            Storage::delete($documento->doc_archivo);
        }
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\ventas;
use Barryvdh\DomPDF\Facade\Pdf;

class ReporteFinancieroController extends Controller
{
    public function generar()
    {
        $compras = Compra::all();
        $ventas = ventas::all();
        $total = $compras->sum('monto');

        return response()->json(['total' => $total, 'compras' => $compras]);
    }


    public function generarPdf()
    {
        $compras = Compra::all();
        $total = $compras->sum('monto');
        $pdf = Pdf::loadView('reporte_financiero', compact('compras', 'total'));
    
        return $pdf->download('reporte_financiero.pdf');
    }
    

}

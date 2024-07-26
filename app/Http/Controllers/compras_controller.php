<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::all();
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'compra_fecha' => 'required|date',
            'doc_id' => 'required|exists:documento_financieros,id',
        ]);

        Compra::create($request->all());

        return redirect()->route('compras.index')
                         ->with('success', 'Compra creada exitosamente.');
    }
}

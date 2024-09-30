<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required',
            'contrasena' => 'required',
            'tipo_usuario' => 'required',
            'correo_electronico' => 'required|email',
        ]);

        Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'contrasena' => Hash::make($request->contrasena),
            'tipo_usuario' => $request->tipo_usuario,
            'correo_electronico' => $request->correo_electronico,
            'estado_cuenta' => 'activo',
        ]);

        return redirect()->route('usuarios.index');
    }

    // Métodos para show, edit, update, destroy
}
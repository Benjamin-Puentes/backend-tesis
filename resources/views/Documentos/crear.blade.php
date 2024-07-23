<!-- resources/views/documentos/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Subir Documento</h1>
    <form action="{{ route('documentos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" class="form-control" id="monto" name="monto" required>
        </div>
        <div class="form-group">
            <label for="archivo_pdf">Archivo PDF</label>
            <input type="file" class="form-control" id="archivo_pdf" name="archivo_pdf" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

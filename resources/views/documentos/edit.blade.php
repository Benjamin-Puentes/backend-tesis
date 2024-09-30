@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Documento</h1>
    <form action="{{ route('documentos.update', ['documento' => $documento->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="doc_tipo" value="{{ $documento->doc_tipo }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Detalles</label>
            <input type="text" class="form-control" id="doc_descripcion" name="doc_descripcion" value="{{ $documento->doc_descripcion }}" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="doc_fecha" name="doc_fecha" value="{{ $documento->doc_fecha }}" required>
        </div>
        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" class="form-control" id="doc_monto" name="doc_monto" value="{{ $documento->doc_monto }}" required>
        </div>
        <div class="form-group">
            <label for="doc_archivo">Archivo</label>
            <input type="file" class="form-control" id="doc_archivo" name="doc_archivo">
            <small class="form-text text-muted">Deja este campo vacío si no deseas cambiar el archivo.</small>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

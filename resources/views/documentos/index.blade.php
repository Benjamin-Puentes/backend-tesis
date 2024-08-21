@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Documentos</h1>
    <!-- Formulario de Filtros -->
    <form method="GET" action="{{ route('documentos.index') }}" class="mb-4">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="fecha_inicio">Fecha Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ request('fecha_inicio') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="fecha_fin">Fecha Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ request('fecha_fin') }}">
            </div>
            <div class="form-group col-md-3">
                <label for="tipo">Tipo</label>
                <select id="doc_tipo" name="doc_tipo" class="form-control">
                    <option value="">Todos</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo }}" {{ old('doc_tipo', request('doc_tipo')) == $tipo ? 'selected' : '' }}>{{ $tipo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3 align-self-end">
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Limpiar Filtros</a>
            </div>
        </div>
    </form>

    <!-- Tabla de documentos -->
    <a href="{{ route('documentos.create') }}" class="btn btn-primary">Registrar Documento</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Archivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentos as $documento)
            <tr>
                <td>{{ $documento->id }}</td>
                <td>{{ $documento->doc_tipo }}</td>
                <td>{{ $documento->doc_fecha }}</td>
                <td>{{ $documento->doc_monto }}</td>
                <td>
                    @if($documento->doc_archivo)
                        <a href="{{ route('documentos.archivo', ['filename' => basename($documento->doc_archivo)]) }}" target="_blank">Ver Original</a>
                    @else
                        <span>No hay archivo disponible</span>
                    @endif
                </td>
                <td>
                <a href="{{ route('documentos.edit', ['documento' => $documento->id]) }}" class="btn btn-warning">Editar</a>                    
                <form action="{{ route('documentos.destroy', ['documento' => $documento->id]) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este documento?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

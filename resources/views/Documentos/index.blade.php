@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Documentos</h1>
    <a href="{{ route('documentos.crear') }}" class="btn btn-primary">Subir Documento</a>
 <!--   <a href="{{ route('documentos.exportPdf') }}" class="btn btn-secondary">Exportar PDF</a>
    <a href="{{ route('documentos.exportExcel') }}" class="btn btn-secondary">Exportar Excel</a> -->
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Número</th>
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
                <td>{{ $documento->tipo }}</td>
                <td>{{ $documento->numero }}</td>
                <td>{{ $documento->fecha }}</td>
                <td>{{ $documento->monto }}</td>
                <td><a href="{{ Storage::url($documento->archivo_pdf) }}" target="_blank">Ver PDF</a></td>
                <td>
                    <a href="{{ route('documentos.editar', $documento) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('documentos.destroy', $documento) }}" method="POST" style="display:inline;">
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

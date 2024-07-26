@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Documentos</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('documentos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="doc_tipo">Tipo de Documento</label>
            <input type="text" name="doc_tipo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="doc_fecha">Fecha</label>
            <input type="date" name="doc_fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="doc_monto">Monto</label>
            <input type="number" step="0.01" name="doc_monto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection

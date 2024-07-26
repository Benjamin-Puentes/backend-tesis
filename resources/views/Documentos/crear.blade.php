@extends('layouts.app')

@section('content')
<class="container">
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

    < action="{{ route('documentos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="doc_tipo">Tipo de Documento</label>
            <input type="text" name="doc_tipo" class="form-control" required>
        </div>
        </div class="form-group">
            <label for="descripcion">Detalles</label>
            <input type="text" name="descripcion" class="form-control">
        </div>
        <div class="form-group">
            <label for="doc_fecha">Fecha</label>
        <input type="date" id="doc_fecha" name="doc_fecha" value="{{ old('doc_fecha', date('Y-m-d')) }}">        </div>
        <div class="form-group">
            <label for="doc_monto">Monto</label>
            <input type="number" step="0.01" name="doc_monto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection

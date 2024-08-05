@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Generar Reporte Financiero</h1>
    <form id="reporteForm" action="{{ route('reportes.generar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tipo_reporte">Tipo de Reporte</label>
            <select name="tipo_reporte" id="tipo_reporte" class="form-control" required>
                <option value="estado_resultados">Estado de Resultados</option>
                <option value="balance_general">Balance General</option>
                <option value="flujo_caja">Flujo de Caja</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
        </div>
        <div class="form-group" id="tipo_flujo_caja_group" style="display:none;">
            <label for="tipo_flujo_caja">Tipo de Flujo de Caja</label>
            <select name="tipo_flujo_caja" id="tipo_flujo_caja" class="form-control">
                <option value="mensual">Mensual</option>
                <option value="anual">Anual</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Generar Reporte</button>
    </form>
</div>

<script>
    document.getElementById('tipo_reporte').addEventListener('change', function() {
        const tipoReporte = this.value;
        const flujoCajaGroup = document.getElementById('tipo_flujo_caja_group');
        if (tipoReporte === 'flujo_caja') {
            flujoCajaGroup.style.display = 'block';
        } else {
            flujoCajaGroup.style.display = 'none';
        }
    });
</script>
@endsection

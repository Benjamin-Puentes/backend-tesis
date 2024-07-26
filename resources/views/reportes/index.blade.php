<!DOCTYPE html>
<html>
<head>
    <title>Generar Reporte Financiero</title>
</head>
<body>
    <h1>Generar Reporte Financiero</h1>

    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('reportes.generar') }}" method="POST">
        @csrf
        <label for="tipo_reporte">Tipo de Reporte:</label>
        <select id="tipo_reporte" name="tipo_reporte">
            <option value="estado_resultados">Estado de Resultados</option>
            <option value="balance_general">Balance General</option>
            <option value="flujo_caja">Flujo de Caja</option>
        </select>
        <br>

        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio') }}">
        <br>

        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin') }}">
        <br>

        <button type="submit">Generar Reporte</button>
    </form>
</body>
</html>

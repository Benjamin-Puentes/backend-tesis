<!DOCTYPE html>
<html>
<head>
    <title>{{ $reporte['titulo'] }}</title>
</head>
<body>
    <h1>{{ $reporte['titulo'] }}</h1>

    <p>Período: {{ $reporte['fecha_inicio'] }} a {{ $reporte['fecha_fin'] }}</p>

    @if ($reporte['titulo'] == 'Estado de Resultados')
        <p>Ingresos: {{ $reporte['ingresos'] }}</p>
        <p>Gastos: {{ $reporte['gastos'] }}</p>
        <p>Utilidad Neta: {{ $reporte['utilidad_neta'] }}</p>
    @elseif ($reporte['titulo'] == 'Balance General')
        <p>Activos: {{ $reporte['activos'] }}</p>
        <p>Pasivos: {{ $reporte['pasivos'] }}</p>
        <p>Patrimonio: {{ $reporte['patrimonio'] }}</p>
    @elseif ($reporte['titulo'] == 'Flujo de Caja')
        <p>Flujo de Entrada: {{ $reporte['flujo_entrada'] }}</p>
        <p>Flujo de Salida: {{ $reporte['flujo_salida'] }}</p>
        <p>Flujo Neto: {{ $reporte['flujo_neto'] }}</p>
    @endif

    <a href="{{ route('reportes.index') }}">Generar otro reporte</a>
</body>
</html>

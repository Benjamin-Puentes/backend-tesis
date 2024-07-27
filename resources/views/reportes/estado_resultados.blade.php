<!DOCTYPE html>
<html>
<head>
    <title>Estado de Resultados</title>
</head>
<body>
    <h1>{{ $reporte['titulo'] }}</h1>
    <p>Fecha de Inicio: {{ $reporte['fecha_inicio'] }}</p>
    <p>Fecha de Fin: {{ $reporte['fecha_fin'] }}</p>
    <p>Ingresos: {{ $reporte['ingresos'] }}</p>
    <p>Gastos: {{ $reporte['gastos'] }}</p>
    <p>Utilidad Neta: {{ $reporte['utilidad_neta'] }}</p>
</body>
</html>

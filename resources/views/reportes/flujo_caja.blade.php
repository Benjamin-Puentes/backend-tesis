<!DOCTYPE html>
<html>
<head>
    <title>Flujo de Caja</title>
</head>
<body>
    <h1>{{ $reporte['titulo'] }}</h1>
    <p>Fecha de Inicio: {{ $reporte['fecha_inicio'] }}</p>
    <p>Fecha de Fin: {{ $reporte['fecha_fin'] }}</p>
    <p>Tipo: {{ ucfirst($reporte['tipo']) }}</p>
    <table border="1">
        <tr>
            <th>Periodo</th>
            <th>Flujo de Entrada</th>
            <th>Flujo de Salida</th>
            <th>Flujo Neto</th>
        </tr>
        @foreach ($reporte['tabla'] as $fila)
            <tr>
                <td>{{ $fila['periodo'] }}</td>
                <td>{{ $fila['flujo_entrada'] }}</td>
                <td>{{ $fila['flujo_salida'] }}</td>
                <td>{{ $fila['flujo_neto'] }}</td>
            </tr>
        @endforeach
    </table>
    <p>Total Flujo de Entrada: {{ $reporte['flujo_entrada_total'] }}</p>
    <p>Total Flujo de Salida: {{ $reporte['flujo_salida_total'] }}</p>
    <p>Flujo Neto Total: {{ $reporte['flujo_neto_total'] }}</p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Reporte Financiero</title>
</head>
<body>
    <h1>Reporte Financiero</h1>
    <p>Total: {{ $total }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Monto</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->id }}</td>
                <td>{{ $compra->nombre }}</td>
                <td>{{ $compra->monto }}</td>
                <td>{{ $compra->fecha }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión Fiscal</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Gestión Fiscal</h1>
            </div>
            <div class="card-body">
                <p class="card-text">Bienvenido a la Gestión Fiscal. Aquí puedes administrar todas tus operaciones fiscales.</p>

                <form action="/ruta-de-envio" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="documento">Subir Documento Fiscal</label>
                        <input type="file" class="form-control" id="documento" name="documento">
                    </div>
                    <button type="submit" class="btn btn-success">Subir</button>
                </form>

                <div class="mt-4">
                    <h3>Historial de Documentos</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre del Documento</th>
                                <th>Fecha de Subida</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí irían los documentos fiscales -->
                            <tr>
                                <td>1</td>
                                <td>Documento1.pdf</td>
                                <td>2024-07-16</td>
                                <td>
                                    <button class="btn btn-info btn-sm">Ver</button>
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </td>
                            </tr>
                            <!-- Más filas según los documentos disponibles -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS y dependencias -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<tbody>
    @foreach($documentos as $documento)
        <tr>
            <td>{{ $documento['id'] }}</td>
            <td>{{ $documento['nombre'] }}</td>
            <td>{{ $documento['fecha'] }}</td>
            <td>
                <button class="btn btn-info btn-sm">Ver</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </td>
        </tr>
    @endforeach
</tbody>
</html>

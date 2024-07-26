<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('path_to_your_background_image.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .vertical-menu {
            width: 250px;
        }
        .vertical-menu a {
            background-color: #fff;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
        }
        .vertical-menu a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-white">Sistema de Gestión Contable</h1>
        <div class="mt-4 row">
            <div class="col-md-3">
                <div class="vertical-menu bg-light p-3">
                    <h4>Menú</h4>
                    <a href="{{ route('documentos.index') }}">Gestión de Documentos</a>
                    <a href="{{ route('reportes.index') }}">Generar Reportes Financieros</a>
                    
                    <!-- Agregar más opciones de menú aquí según sea necesario -->
                </div>
            </div>
            <div class="col-md-9">
                <!-- Contenido principal puede ir aquí -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

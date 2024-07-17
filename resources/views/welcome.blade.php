<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido a la Gestión Fiscal</h1>
            <p class="lead">Esta es tu página de bienvenida. Desde aquí puedes acceder a todas las funcionalidades del sistema.</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="{{ route('flujo.caja') }}" role="button">Calcular Flujo de Caja</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('calcular.sueldos') }}" role="button">Calcular Sueldos</a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

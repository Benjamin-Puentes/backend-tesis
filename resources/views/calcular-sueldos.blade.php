<!DOCTYPE html>
<html>
<head>
    <title>Calcular Sueldos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Calcular Sueldos</h1>
            </div>
            <div class="card-body">
                <form>
                    <!-- Campos de entrada para calcular sueldos -->
                    <div class="form-group">
                        <label for="horas-trabajadas">Horas Trabajadas:</label>
                        <input type="number" class="form-control" id="horas-trabajadas" name="horas-trabajadas">
                    </div>
                    <div class="form-group">
                        <label for="tarifa-por-hora">Tarifa por Hora:</label>
                        <input type="number" class="form-control" id="tarifa-por-hora" name="tarifa-por-hora">
                    </div>
                    <button type="submit" class="btn btn-success">Calcular</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Calcular Flujo de Caja</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Calcular Flujo de Caja</h1>
            </div>
            <div class="card-body">
                <form>
                    <!-- Campos de entrada para calcular flujo de caja -->
                    <div class="form-group">
                        <label for="ingresos">Ingresos:</label>
                        <input type="number" class="form-control" id="ingresos" name="ingresos">
                    </div>
                    <div class="form-group">
                        <label for="gastos">Gastos:</label>
                        <input type="number" class="form-control" id="gastos" name="gastos">
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

<!DOCTYPE html>
<html>
<head>
    <title>Generar Reporte Financiero</title>
    <script>
        function updateAction() {
            const tipoReporte = document.getElementById('tipo_reporte').value;
            let actionUrl = '';

            switch (tipoReporte) {
                case 'estado_resultados':
                    actionUrl = '{{ route("reportes.estado_resultados") }}';
                    break;
                case 'balance_general':
                    actionUrl = '{{ route("reportes.balance_general") }}';
                    break;
                case 'flujo_caja':
                    actionUrl = '{{ route("reportes.flujo_caja") }}';
                    break;
            }

            document.getElementById('reporteForm').action = actionUrl;
        }
    </script>
</head>
<body>
    <h1>Generar Reporte Financiero</h1>

    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form id="reporteForm" method="POST" onsubmit="updateAction()">
        @csrf
        <label for="tipo_reporte">Tipo de Reporte:</label>
        <select id="tipo_reporte" name="tipo_reporte" onchange="updateAction()">
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

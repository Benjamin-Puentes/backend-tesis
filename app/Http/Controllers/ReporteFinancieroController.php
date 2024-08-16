<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documentos;

class ReporteFinancieroController extends Controller
{
    public function index()
    {
        return view('reportes.index');
    }

    public function generar(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_reporte' => 'required|string|in:estado_resultados,balance_general,flujo_caja',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        $tipoReporte = $validatedData['tipo_reporte'];
        $fechaInicio = $validatedData['fecha_inicio'];
        $fechaFin = $validatedData['fecha_fin'];

        $reporte = null;

        switch ($tipoReporte) {
            case 'estado_resultados':
                $reporte = $this->generarEstadoResultados($fechaInicio, $fechaFin);
                return view('reportes.estado_resultados', compact('reporte'));
            case 'balance_general':
                $reporte = $this->generarBalanceGeneral($fechaInicio, $fechaFin);
                return view('reportes.balance_general', compact('reporte'));
            case 'flujo_caja':
                $tipoFlujoCaja = $request->input('tipo_flujo_caja', 'mensual');
                $reporte = $this->generarFlujoCaja($fechaInicio, $fechaFin, $tipoFlujoCaja);
                return view('reportes.flujo_caja', compact('reporte'));
        }

        // Si no hay suficientes datos para generar el reporte, mostrar un mensaje de error
        return redirect()->route('reportes.index')->with('error', 'No hay suficientes datos para generar el reporte.');
    }

    private function generarEstadoResultados($fechaInicio, $fechaFin)
    {
        $ingresos = ['boleta venta', 'recepcion', 'factura venta'];
        $gastos = ['factura compra'];
        // Obtener los ingresos en el período especificado
        $ingresos_calc = Documentos::wherein('doc_tipo', $ingresos)
                    ->whereBetween('doc_fecha', [$fechaInicio, $fechaFin])
                    ->sum('doc_monto');

        // Obtener los gastos en el período especificado
        $gastos_calc = Documentos::wherein('doc_tipo', $gastos)
                    ->whereBetween('doc_fecha', [$fechaInicio, $fechaFin])
                    ->sum('doc_monto');

        // Calcular la utilidad neta
        $utilidadNeta = $ingresos_calc - $gastos_calc;

        // Devolver el estado de resultados
        return [
            'titulo' => 'Estado de Resultados',
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $fechaFin,
            'ingresos' => $ingresos_calc,
            'gastos' => $gastos_calc,
            'utilidad_neta' => $utilidadNeta,
        ];
    }

    private function generarBalanceGeneral($fechaInicio, $fechaFin)
    {
        //placeholder
        //{
        return [
            'titulo' => 'Balance General',
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $fechaFin,
            'activos' => 10000, 
            'pasivos' => 5000,  
            'patrimonio' => 5000, 
        ];
        //}
    }

    private function generarFlujoCaja($fechaInicio, $fechaFin, $tipo = 'mensual')
    {
        $tiposFlujoEntrada = ['ingreso', 'venta'];
        $tiposFlujoSalida = ['gasto', 'compra'];

        $tablaFlujoCaja = [];
        $flujoEntradaTotal = 0;
        $flujoSalidaTotal = 0;

        $periodo = ($tipo === 'anual') ? 'year' : 'month';
        $fechaActual = \Carbon\Carbon::parse($fechaInicio)->startOf($periodo);
        $fechaFinCarbon = \Carbon\Carbon::parse($fechaFin)->endOf($periodo);

        while ($fechaActual->lessThanOrEqualTo($fechaFinCarbon)) {
            $inicioPeriodo = $fechaActual->copy()->startOf($periodo);
            $finPeriodo = $fechaActual->copy()->endOf($periodo);

            $flujoEntrada = Documentos::whereIn('doc_tipo', $tiposFlujoEntrada)
                        ->whereBetween('doc_fecha', [$inicioPeriodo, $finPeriodo])
                        ->sum('doc_monto');

            $flujoSalida = Documentos::whereIn('doc_tipo', $tiposFlujoSalida)
                        ->whereBetween('doc_fecha', [$inicioPeriodo, $finPeriodo])
                        ->sum('doc_monto');

            $flujoNeto = $flujoEntrada - $flujoSalida;

            $tablaFlujoCaja[] = [
                'periodo' => $inicioPeriodo->format($tipo === 'anual' ? 'Y' : 'Y-m'),
                'flujo_entrada' => $flujoEntrada,
                'flujo_salida' => $flujoSalida,
                'flujo_neto' => $flujoNeto,
            ];

            $flujoEntradaTotal += $flujoEntrada;
            $flujoSalidaTotal += $flujoSalida;

            if ($tipo === 'anual') {
                $fechaActual->addYear();
            } else {
                $fechaActual->addMonth();
            }
        }

        $flujoNetoTotal = $flujoEntradaTotal - $flujoSalidaTotal;

        return [
            'titulo' => 'Flujo de Caja',
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $fechaFin,
            'tipo' => $tipo,
            'tabla' => $tablaFlujoCaja,
            'flujo_entrada_total' => $flujoEntradaTotal,
            'flujo_salida_total' => $flujoSalidaTotal,
            'flujo_neto_total' => $flujoNetoTotal,
        ];
    }
}

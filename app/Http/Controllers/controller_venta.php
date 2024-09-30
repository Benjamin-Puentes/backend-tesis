<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use App\Models\venta_cable;
use App\Models\disco_duro_venta;
use App\Models\periferico_venta;
use App\Models\ram_venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controller_venta extends Controller
{
    public function ventas(Request $request)
    {
        return DB::table('ventas')
            ->where('venta_codigo','=',$request->codigo)
            ->join('disco_duro','disco_duro.venta_id','=','venta.id')
            ->get();
    }

    public function vender(Request $request)
    {
        $disponibilidad = DB::table('disponibilidad')
            ->where('disponibilidad_nombre','=','Vendido')
            ->first();

        if($request->discos != []){
            $discos = DB::table('disco_duro')
                ->where('disponibilidad_id', '!=', $disponibilidad->id)
                ->whereIn('id',$request->discos);

            if($discos->count() != count($request->discos))
                return response()->json("Discos duro/s no disponibles", 500);
        }

        if($request->perifericos != []){
            $perifericos = DB::table('periferico')
                ->where('disponibilidad_id', '!=', $disponibilidad->id)
                ->whereIn('id',$request->perifericos);

            if($perifericos->count() != count($request->perifericos))
                return response()->json("Periferico no disponible", 500);
        }

        if($request->rams != []){
            $rams = DB::table('ram')
                ->where('disponibilidad_id', '!=', $disponibilidad->id)
                ->whereIn('id',$request->rams);

            if($rams->count() != count($request->rams))
                return response()->json("Ram/s no disponibles", 500);
        }

        if($request->cablesId != []){
            $cables = DB::table('cable')
                ->where('disponibilidad_id', '!=', $disponibilidad->id)
                ->whereIn('id',$request->cablesId);

            if($cables->count() != count($request->cablesId))
                return response()->json("Cables no disponibles", 500);
        }

        $despacho = DB::table('metodo_despacho')
            ->where('metodo_despacho_slug','=',$request->metodoDespacho)
            ->first();

        $pago = DB::table('metodo_pago')
            ->where('metodo_pago_slug','=',$request->metodoPago)
            ->first();

        $venta = new ventas();

        $randomCode = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
        $venta->venta_codigo = $randomCode;
        $venta->venta_email = $request->user()->email;
        $venta->estado_venta_id = 1;
        $venta->direccion_id = $request->direccionId;
        $venta->metodo_despacho_id = $despacho->id;
        $venta->metodo_pago_id = $pago->id;
        $venta->users_id = $request->user()->id;

        $venta->save();

        if($request->discos != []){
            foreach($discos->get() as $disco){
                disco_duro_venta::create([
                    'disco_duro_id' => $disco->id,
                    'venta_id' => $venta->id
                ]);
            }
            $discos->update(['disponibilidad_id' => $disponibilidad->id]);
        }

        if($request->perifericos != []){
            foreach($perifericos->get() as $periferico){
                periferico_venta::create([
                    'periferico_id' => $periferico->id,
                    'venta_id' => $venta->id
                ]);
            }
            $perifericos->update(['disponibilidad_id' => $disponibilidad->id]);
        }

        if($request->rams != []){
            foreach($rams->get() as $ram){
                ram_venta::create([
                    'ram_id' => $ram->id,
                    'venta_id' => $venta->id
                ]);
            }
            $rams->update(['disponibilidad_id' => $disponibilidad->id]);
        }

        if($request->cablesId != []){
            $index = 0;
            foreach($cables->get() as $cable){
                venta_cable::create([
                    'venta_cable_cantidad' => $request->cablesCantidad[$index],
                    'cable_id' => $cable->id,
                    'venta_id' => $venta->id
                ]);
                $index++;
            }
        }

        return response()->json($venta, 200);
    }

    public function get_all_ventas(Request $request){
        $ventas = ventas::with('discos')
            ->with('perifericos')
            ->with('estado_venta')
            ->with('metodo_despacho')
            ->with('metodo_pago')
            ->latest()
            ->paginate(12);

        return $ventas;
    }

    public function get_ventas_by_user_id(Request $request){
        $ventas = ventas::where('users_id', $request->user()->id)
            ->with('discos')
            ->with('perifericos')
            ->with('rams')
            ->with('cables')
            ->with('estado_venta')
            ->with('metodo_despacho')
            ->with('metodo_pago')
            ->latest()
            ->paginate(12);

        return $ventas;
    }

    public function get_ventas_para_estadisticas(Request $request){
        $ventas = ventas::
            with('discos')
            ->with('perifericos')
            ->with('rams')
            ->with('usuario')
            ->with('estado_venta')
            ->with('metodo_despacho')
            ->with('metodo_pago')
            ->get();

        return response()->json($ventas, 200);
    }

}

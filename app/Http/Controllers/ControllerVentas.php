<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class ControllerVentas extends Controller
{
    public function list(){
        $ventas = Ventas::all();
        return $ventas;
    }

    public function save(Request $req){
        if ($req->id == 0) {
            $venta = new Ventas();
        }else {
            $venta = Ventas::find($req->id);
        }

        $venta->num_ventas = $req->num_ventas;
        $venta->fecha = $req->fecha;
        $venta->save();

        return "OK";
    }

    public function delete(Request $req){
        $venta = Ventas::find($req->id);
        $venta->delete();

        return "OK";
    }

    public function get(Request $req){
        $venta = Ventas::find($req->id);
        return $venta;
    }
}

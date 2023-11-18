<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;

class ControllerDetalle extends Controller
{
    public function list(){
        $detalles = Detalle::all();
        return $detalles;
    }

    public function save(Request $req){
        if ($req->id == 0) {
            $detalle = new Detalle();
        }else {
            $detalle = Detalle::find($req->id);
        }

        $detalle->idClien = $req->idClien;
        $detalle->idProd = $req->idProd;
        $detalle->nombre = $req->nombre;
        $detalle->descripcion = $req->descripcion;
        $detalle->cantidad = $req->cantidad;
        $detalle->precio = $req->precio;
        $detalle->save();

        return "OK";
    }

    public function delete(Request $req){
        $detalle = Detalle::find($req->id);
        $detalle->delete();

        return "OK";
    }

    public function get(Request $req){
        $detalle = Detalle::find($req->id);
        return $detalle;
    }
}

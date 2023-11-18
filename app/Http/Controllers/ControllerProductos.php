<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ControllerProductos extends Controller
{
    public function list(){
        $productos = Productos::all();
        return $productos;
    }

    public function save(Request $req){
        if ($req->id == 0) {
            $producto = new Productos();
        }else {
            $producto = Productos::find($req->id);
        }

        $producto->codigo = $req->codigo;
        $producto->descripcion = $req->descripcion;
        $producto->precio = $req->precio;
        $producto->save();

        return "OK";
    }

    public function delete(Request $req){
        $producto = Productos::find($req->id);
        $producto->delete();

        return "OK";
    }

    public function get(Request $req){
        $producto = Productos::find($req->id);
        return $producto;
    }
}

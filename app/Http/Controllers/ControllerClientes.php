<?php

namespace App\Http\Controllers;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ControllerClientes extends Controller
{
    public function list(){
        $clientes = Clientes::all();
        return $clientes;
    }

    public function save(Request $req){
        if ($req->id == 0) {
            $cliente = new Clientes();
        }else {
            $cliente = Clientes::find($req->id);
        }

        $cliente->codigo = $req->codigo;
        $cliente->nombre = $req->nombre;
        $cliente->telefono = $req->telefono;
        $cliente->direccion = $req->direccion;
        $cliente->latitud = $req->latitud;
        $cliente->longitud = $req->longitud;
        $cliente->save();

        return "OK";
    }

    public function delete(Request $req){
        $cliente = Clientes::find($req->id);
        $cliente->delete();

        return "OK";
    }

    public function get(Request $req){
        $cliente = clientes::find($req->id);
        return $cliente;
    }
}

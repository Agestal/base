<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Clientes;

class ClientesController extends Controller
{
    public $path = "clientes";
    public function index()
    {
        $datos = DB::table('clientes')->get();
        return view($this->path.'.index',compact('datos'));
    }
    public function create()
    {
        return view($this->path.'.create');
    }
    public function store(Request $request)
    {
        $c = new Clientes();
        $c->nombre = $request->nombre;
        $c->email = $request->email;
        $c->apellidos = $request->apellidos;
        $c->nif = $request->nif;
        $c->telefono = $request->telefono;
        $c->poblacion = $request->poblacion;
        $c->direccion = $request->direccion;
        $c->codigo_postal = $request->codigo_postal;
        $c->poliza = $request->poliza;
        $c->save();
        return redirect()->to($this->path);
    }
    public function eliminar(Request $request)
    {
        $c = Clientes::findOrFail($request->id);
        $c->delete();
        return 1;
    }
    public function show($id)
    {
        $c = Clientes::findOrFail($id);
        return view($this->path.'.show',compact('c'));
    }
    public function update(Request $request)
    {
        $c = Clientes::findOrFail($request->id);
        $c->nombre = $request->nombre;
        $c->apellidos = $request->apellidos;
        $c->email = $request->email;
        $c->nif = $request->nif;
        $c->telefono = $request->telefono;
        $c->poblacion = $request->poblacion;
        $c->direccion = $request->direccion;
        $c->codigo_postal = $request->codigo_postal;
        $c->poliza = $request->poliza;
        $c->save();
        return redirect()->to($this->path);
    }
}

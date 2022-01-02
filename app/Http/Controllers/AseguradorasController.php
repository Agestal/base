<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Aseguradoras;
use Illuminate\Http\Request;

class AseguradorasController extends Controller
{
    public $path = "aseguradoras";
    public function index()
    {
        $datos = DB::table('aseguradoras')->get();
        return view($this->path.'.index',compact('datos'));
    }
    public function create()
    {
        return view($this->path.'.create');
    }
    public function store(Request $request)
    {
        $c = new Aseguradoras();
        $c->nombre = $request->nombre;
        $c->email = $request->email;
        $c->telefono = $request->telefono;
        $c->codigo = $request->codigo;
        $c->save();
        return redirect()->to($this->path);
    }
    public function eliminar(Request $request)
    {
        $c = Aseguradoras::findOrFail($request->id);
        $c->delete();
        return 1;
    }
    public function show($id)
    {
        $c = Aseguradoras::findOrFail($id);
        return view($this->path.'.show',compact('c'));
    }
    public function update(Request $request)
    {
        $c = Aseguradoras::findOrFail($request->id);
        $c->nombre = $request->nombre;
        $c->email = $request->email;
        $c->telefono = $request->telefono;
        $c->codigo = $request->codigo;
        $c->save();
        return redirect()->to($this->path);
    }
}

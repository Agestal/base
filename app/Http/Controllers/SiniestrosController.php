<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Siniestros;
use Illuminate\Http\Request;

class SiniestrosController extends Controller
{
    public $path = "siniestros";
    public function index()
    {
        $datos = DB::table('siniestros AS s')
                ->join('clientes AS c','s.id_cliente','c.id')
                ->join('aseguradoras AS a','s.id_aseguradora','a.id')
                ->select('s.*','c.nombre AS cliente','a.nombre AS aseguradora')
                ->get();
        return view($this->path.'.index',compact('datos'));
    }
    public function create()
    {
        $clientes = DB::table('clientes')->orderBy('nombre')->get();
        $aseguradoras = DB::table('aseguradoras')->orderBy('nombre')->get();
        $contador = DB::table('siniestros')->orderBy('id','DESC')->first();
        isset($contador->id) ? $contador = $contador->id : $contador = 0;

        return view($this->path.'.create',compact('clientes','aseguradoras','contador'));
    }
    public function store(Request $request)
    {
        $c = new Siniestros();
        $c->id_cliente = $request->cliente;
        $c->id_aseguradora = $request->aseguradora;
        $c->codigo = $request->codigo;
        $c->poliza = $request->poliza;
        $c->fecha_parte = date("Y-m-d");
        $c->fecha_siniestro = $request->fecha;
        $c->direccion = $request->direccion;
        $c->poblacion = $request->poblacion;
        $c->comentario = $request->comentario;
        $c->save();
        return redirect()->to($this->path);
    }
    public function eliminar(Request $request)
    {
        $c = Siniestros::findOrFail($request->id);
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
        $c = Siniestros::findOrFail($request->id);
        $c->id_cliente = $request->id_cliente;
        $c->id_aseguradora = $request->id_aseguradora;
        $c->codigo = $request->codigo;
        $c->save();
        return redirect()->to($this->path);
    }
}

<?php

namespace App\Http\Controllers;

use App\Prioridad;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\savePrioridadRequest;
use Illuminate\Support\Facades\DB;

class PrioridadController extends Controller
{
          /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $Prioridad = Prioridad::latest()->paginate(10);
            return view('Prioridad.index', compact('Prioridad'));
        }
    public function show(Prioridad $Prioridad)
        {
            
            return view('Prioridad.show', [
                'Prioridad' => $Prioridad
            
            ]);
            
            $Prioridad = Prioridad::find($Prioridad);

        return view('Prioridad.show', compact('Prioridad'));
        }
    public function view($id)
        {
            return view('Prioridad.view', [
                'Prioridad' => Prioridad::find($id)
            
            ]);

            return view('Prioridad.view', compact('Prioridad'));
        }
    public function create()
        {
            return view('Prioridad.create',[
                'Prioridad'=> new Prioridad

            ]);
        }
    public function store(savePrioridadRequest $request)
        {
            Prioridad::create($request->validated());
        
        
            return redirect()->route('Prioridad.index')->with('status','El departamento fue registrada con exito');
        }
    public function edit(Prioridad $Prioridad)
        {
            return view('Prioridad.edit', [
                'Prioridad'=> $Prioridad
            ]);
        }
    public function update(Prioridad $Prioridad, savePrioridadRequest $request)
        {
            $Prioridad->update( $request->validated());
            return redirect()->route('Prioridad.show',$Prioridad)->with('status','El depatamento fue actualizado con éxito');
        }
    public function destroy(Prioridad $Prioridad)
        {
            $Prioridad->delete();

            return redirect()->route('Prioridad.index')->with('status','El departamento fue eliminado con exito.');
        }        
    public function __construct()
        {
        $this->middleware('auth')->except('index','show');
        }
}

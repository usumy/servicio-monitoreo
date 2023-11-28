<?php

namespace App\Http\Controllers;

use App\Depto;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\saveDeptoRequest;
use Illuminate\Support\Facades\DB;

class DeptoController extends Controller
{
          /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $Depto = Depto::latest()->paginate(10);
            return view('Depto.index', compact('Depto'));
        }
    public function show(Depto $Depto)
        {
            
            return view('Depto.show', [
                'Depto' => $Depto
            
            ]);
            
            $Depto = Depto::find($Depto);

        return view('Depto.show', compact('Depto'));
        }
    public function view($id)
        {
            return view('Depto.view', [
                'Depto' => Depto::find($id)
            
            ]);

            return view('Depto.view', compact('Depto'));
        }
    public function create()
        {
            return view('Depto.create',[
                'Depto'=> new Depto

            ]);
        }
    public function store(saveDeptoRequest $request)
        {
            Depto::create($request->validated());
        
        
            return redirect()->route('Depto.index')->with('status','El departamento fue registrada con exito');
        }
    public function edit(Depto $Depto)
        {
            return view('Depto.edit', [
                'Depto'=> $Depto
            ]);
        }
    public function update(Depto $Depto, saveDeptoRequest $request)
        {
            $Depto->update( $request->validated());
            return redirect()->route('Depto.show',$Depto)->with('status','El depatamento fue actualizado con éxito');
        }
    public function destroy(Depto $Depto)
        {
            $Depto->delete();

            return redirect()->route('Depto.index')->with('status','El departamento fue eliminado con exito.');
        }        
    public function __construct()
        {
        $this->middleware('auth')->except('index','show');
        }
}

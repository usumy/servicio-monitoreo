<?php

namespace App\Http\Controllers;

use App\Falla;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\saveFallaRequest;
use Illuminate\Support\Facades\DB;

class FallaController extends Controller
{
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $falla = Falla::with('usuario')->paginate(10);

        return view('falla.index', compact('falla'));
    }
    public function show(falla $falla)
        {
            
            return view('falla.show', [
                'falla' => $falla
            
            ]);
            
            $falla = falla::find($falla);
            $userName = $falla->user->name;

        return view('falla.show', compact('falla','userName'));
        }
    public function view($id)
        {
            return view('falla.view', [
                'falla' => falla::find($id)
            
            ]);

            return view('falla.view', compact('falla'));
        }
    public function create()
        {
            return view('falla.create',[
                'falla'=> new falla

            ]);
        }
    public function store(saveFallaRequest $request)
        {
            falla::create($request->validated());
        
        
            return redirect()->route('falla.index')->with('status','La falla fue registrada con exito');
        }
    public function edit(falla $falla)
        {
            return view('falla.edit', [
                'falla'=> $falla
            ]);
        }
    public function update(falla $falla, saveFallaRequest $request)
        {
            $falla->update( $request->validated());
            return redirect()->route('falla.show',$falla)->with('status','La falla fue actualizado con éxito');
        }
    public function destroy(falla $falla)
        {
            $falla->delete();

            return redirect()->route('falla.index')->with('status','La falla fue eliminado con exito.');
        }        
    public function __construct()
        {
        $this->middleware('auth')->except('index','show');
        }
   
}

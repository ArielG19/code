<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use Image;
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('servicio.index');
    }

    public function listarServicios()
    {
        $servicios = Servicio::Orderby('titulo','desc')->paginate(8);
        return view('servicio.listar')->with('servicios',$servicios);
    }

    public function VerServicios()
    {
        $servicios = Servicio::Orderby('created_at','desc')->paginate(9);
        return view('servicio.ver')->with('servicios',$servicios);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $servicio = new Servicio;
        $servicio->titulo = $request->titulo;
        $servicio->descripcion = $request->descripcion;
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $file1 = time().".".$file->getClientOriginalExtension();
            $file->move("images/", "{$file1}");
            $servicio->imagen = $file1;
            //dd($servicio->imagen);  
        }        
        $servicio->save();

        return redirect('/servicios');
        //->with('message' , 'Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$servicios = Servicio::find($id);
        //return view('servicio.edit')->with('servicios',$servicios);
        //dd($servicios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $servicio = Servicio::findOrFail($id);
        $servicio->titulo = $request->titulo;
        $servicio->descripcion = $request->descripcion;
        
        if($request->hasFile('imagen')){
           $file = $request->file('imagen');
            $file1 = time().".".$file->getClientOriginalExtension();
            $file->move("images/", "{$file1}");
            $servicio->imagen = $file1;  
        }        
        $servicio->save();
        return redirect('/servicios');
        //dd($servicio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $servicio = Servicio::FindOrFail($id);        
        $resultado = $servicio->delete();

        if($resultado)
        {
            return response()->json(['success'=>'true']);
        }else
        {
            return response()->json(['success'=>'false']);
        }
    }
}

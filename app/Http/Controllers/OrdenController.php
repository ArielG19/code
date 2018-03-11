<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servicio;
use App\orden;
use Auth;
use DB;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$orden = Orden::Orderby('id','desc')->paginate(8);
        $orden = DB::table('ordens')
        ->join('users', 'users.id','ordens.id_usuario')
        ->join('servicios', 'servicios.id','ordens.id_servicio')
        ->select('ordens.id','ordens.estado','users.name','servicios.titulo')
        ->Orderby('servicios.id','desc')->paginate(7);
        //dd($orden);
        return view('orden.listar')->with('orden',$orden);
    }

    //cargar ordenes realizadas
    public function realizados()
    {
        //
        //$orden = Orden::Orderby('id','desc')->paginate(8);
        $orden = DB::table('ordens')
        ->join('users', 'users.id','ordens.id_usuario')
        ->join('servicios', 'servicios.id','ordens.id_servicio')
        ->select('ordens.id','ordens.estado','users.name','servicios.titulo')
        ->Where('ordens.estado','realizado')
        ->Orderby('servicios.id','desc')->paginate(10);
        //dd($orden);
        return view('orden.realizados')->with('orden',$orden);
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

    //guardamos servicio solicitado
    public function store(Request $request)
    {
        //
        if($request->ajax())
        {
                        //dd($request->type);
                        $orden = new orden();
                        $orden->id_usuario = \Auth::user()->id;
                        $orden->id_servicio = $request->id_servicio;
                        $orden->save();
                    
                    //si no hay error entonces
                    if($orden){
                        //Session::flash('save','Se ha creado correctamente');
                        return response()->json(['success'=>'true']);
                    }else{
                        return response()->json(['success'=>'false']);
                    }

        }

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
        $servicios = servicio::FindOrFail($id);
        return response()->json($servicios);

        //return view('servicio.edit')->with('servicios',$servicios);
    }

    //cargamos las ordenes por id de usuario
    public function mi_orden()
    {
        //
        $id_user = \Auth::user()->id;
        $orden = DB::table('ordens')
        ->join('users', 'users.id','ordens.id_usuario')
        ->join('servicios', 'servicios.id','ordens.id_servicio')
        ->select('ordens.id','ordens.estado','users.name','servicios.titulo')
        ->Where('users.id',$id_user)
        ->Orderby('servicios.id','desc')->paginate(2);
        //dd($orden);
        return view('orden.mi_orden')->with('orden',$orden);

        //return response()->json($servicios);

        //return view('servicio.edit')->with('servicios',$servicios);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //cargamos el estado de ordenes
    public function edit($id)
    {
        //
         //$orden = Orden::FindOrFail($id);
        $orden = DB::table('ordens')
        ->join('users', 'users.id','ordens.id_usuario')
        ->join('servicios', 'servicios.id','ordens.id_servicio')
        ->select('ordens.id','ordens.estado','users.name','servicios.titulo')
        //->Orderby('servicios.created_at','desc')
        ->Where('ordens.id',$id)
        ->get();
        //return $orden;
         return response()->json($orden);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //actualizamos el estado de las ordenes
    public function update(Request $request, $id)
    {
        //
        if($request->ajax()){

                $orden = orden::FindOrFail($id);
                //en input amacenamos toda la info del request
                $input = $request->all();
                $resultado = $orden->fill($input)->save();

                if($resultado){
                    return response()->json(['success'=>'true']);
                }else{
                    return response()->json(['success'=>'false']);
                }
        }
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
    }
}

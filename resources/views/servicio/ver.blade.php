@extends('layouts.app')
@section('title','Servicios')
@section('content')
    
<div class="container" style="padding-top: 130px;padding-bottom: 40px;">
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">
                  <h3>Nuestros Servicios</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                   <div id="message-save" class="alert alert-success alert-dismissible" role="alert"
                     style="display:none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong> Se hizo correctamente su solicitud...</strong>
                </div>
            </div>
            <div class="row">
                @foreach($servicios as $s)
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="/images/{{$s->imagen}}"  style="display:block;width: 100%;height:300px;background-position: center;background-repeat: non-repeat;background-size: cover;">
                            <div class="caption">
                              <h3>{{$s->titulo}}</h3>
                              <p>{{$s->descripcion}}</p>
                                @if (Auth::user())
                                    <a class="btn btn-info btn-sm pull-right" href="#" Onclick='Ordenar({{$s->id}});' data-toggle='modal' data-target='#myModalSolicitar' style="margin-top: -30px;">Solicitar</a>
                                @else
                                   <a class="btn btn-info btn-sm pull-right" href="#" style="margin-top: -30px;" data-toggle='modal' data-target='#myModalSolicitar2'>Solicitar</a>
                                   @include('orden.info')
                                @endif
                                


                            </div>
                          </div>
                        </div>  
                @endforeach
            </div>
        </div>
    </section>
    @include('orden.create')
</div>
            @section('script')
                <script type="text/javascript" src="{{asset('/js/orden.js')}}"></script>
            @endsection
            @include('includes.mapa')
@endsection
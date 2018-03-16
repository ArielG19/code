@extends('layouts.app')
@section('title','Servicios')
@section('content')
    
<div class="container" style="padding-top: 130px;padding-bottom: 40px;">
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <h3>Nuestros Servicios</h3>
                  <p>Servicios de transporte de carga terrestre y mudanzas con una cobertura total del territorio nacional. Contamos con capacidades de transporte desde 2 hasta 8 toneladas y rastras de 37, 40, 45 y 48 pies.</p>

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
                        <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                          <div class="thumbnail">
                            <img src="/images/{{$s->imagen}}"  style="display:block;width: 100%;height:300px;background-position: center;background-repeat: non-repeat;background-size: cover;">
                            <div class="caption">
                              <h3>{{$s->titulo}}</h3>
                              <p>{{$s->descripcion}}</p>
                                @if (Auth::user())
                                    <a class="btn btn-info btn-sm pull-right" href="#" Onclick='Ordenar({{$s->id}});' data-toggle='modal' data-target='#myModalSolicitar' style="margin-top: -10px;">Solicitar</a>

                                     <div  class="fb-share-button"  data-layout="button" data-size="small" data-mobile-iframe="true">
                                        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                                          Compartir
                                        </a>
                                      </div>

                                @else
                                   <a class="btn btn-info btn-sm pull-right" href="#" style="margin-top: -10px;" data-toggle='modal' data-target='#myModalSolicitar2'>Solicitar</a>
                                    
                                    <div  class="fb-share-button"  data-layout="button" data-size="small" data-mobile-iframe="true">
                                        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                                          Compartir
                                        </a>
                                    </div>

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
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            @endsection
            @include('includes.mapa')
@endsection
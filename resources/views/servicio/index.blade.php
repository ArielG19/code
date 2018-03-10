@extends('panel.interno')
@section('title','Agregar servicios')
       
@section('content')
  <div class="col-xs-12">

        <div class="col-xs-12">
            <div id="message-delete" class="alert alert-danger alert-dismissible" role="alert"
                 style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong> Se elimino correctamente</strong>
            </div>

          

        

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h5 class="panel-title">Lista de Usuarios</h5>
                </div>
                <div class="panel-body">

                    <hr>
                    <p class="navbar-text navbar-right" style="margin-right:15px; margin-top:-53px;">
                        <a class="btn btn-info btn-sm" href="#" data-toggle='modal'
                           data-target='#myModalcreatePromo'>
                            <span> Agregar <i class="fas fa-plus-circle"></i></span>
                        </a>
                    </p>
                    @include('servicio.create')
                    <div id="listar-servicios"></div>
                    
                
                </div>


            </div>
        </div>
        @section('script')
                <script type="text/javascript" src="{{asset('/js/servicio.js')}}"></script>
        @endsection

@endsection
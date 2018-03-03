@extends('panel.interno')
@section('title','Panel de administracion')
       
@section('content')
  <div class="col-xs-12">
        <div id="message-save" class="alert alert-success alert-dismissible" role="alert"
             style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> Se agrego correctamente</strong>
        </div>

        <div class="col-xs-12">
            <div id="message-delete" class="alert alert-danger alert-dismissible" role="alert"
                 style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong> Se elimino correctamente</strong>
            </div>

            <div id="message-update" class="alert alert-info alert-dismissible" role="alert" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong> Se actualizo correctamente</strong>
            </div>

             <div id="message-enviado" class="alert alert-secondary alert-dismissible" role="alert" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong> Se envio su mensaje...</strong>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h5 class="panel-title">Lista de Usuarios</h5>
                </div>
                <div class="panel-body">

                    <hr>
                    <p class="navbar-text navbar-right" style="margin-right:15px; margin-top:-53px;">
                        <a class="btn btn-info btn-sm" href="#myModalcreateUser" data-toggle='modal'
                           data-target='#myModalcreateUser'>
                            <span> Agregar <i class="fas fa-plus-circle"></i></span>
                        </a>
                    </p>
                    @include('usuario.create')
                    <div id="listar-usuarios"></div>
                    @include('usuario.mensaje')
                    @include('usuario.edit')
                </div>


            </div>
        </div>
            @section('script')
            	<script type="text/javascript" src="{{asset('/js/user.js')}}"></script>
			@endsection

@endsection

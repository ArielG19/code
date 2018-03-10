@extends('panel.interno')
@section('title','Panel de administracion')
       
@section('content')
 <!-- Breadcrumbs-->
 		@if(Auth::user()->type == "admin")
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              Dashboard
            </li>
            <li class="breadcrumb-item active">Servicios ordenados</li>
        </ol>
		<a class="btn btn-success btn-sm" style="margin-bottom: 20px;" href="{{url('servicios-realizados')}}">
			Ver Completados
			<i class="fas fa-check-square"></i>
		</a>				              		
		<div id="message-update" class="alert alert-info alert-dismissible" role="alert" style="display:none">
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		                <strong> Se actualizo correctamente</strong>
		</div>

		<div id="listar"></div>
		@include('orden.estado')
 		

        @elseif(Auth::user()->type == "usuario")
        	<ol class="breadcrumb">
	            <li class="breadcrumb-item">
	              Dashboard
	            </li>
	            <li class="breadcrumb-item active">
	            	Mis solicitudes
	            </li>
        	</ol>

			<div id="mis-servicios"></div>
        @endif
        @section('script')
                <script type="text/javascript" src="{{asset('/js/orden.js')}}"></script>
        @endsection

@endsection

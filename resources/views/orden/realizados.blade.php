@extends('panel.interno')
@section('title','Servicios realizados')
       
@section('content')
 <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              Dashboard
            </li>
            <li class="breadcrumb-item active">Servicios realizados</li>
        </ol>
		<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Solicitante</th>
				<th>Servicio</th>
				<th>Estado de solicitud</th>
			</thead>
			<tbody>
						@foreach($orden as $o)
							<tr>
								<td>
									{{$o->name}}
								</td>
								<td>
									{{$o->titulo}}
								</td>

								<td>
									{{$o->estado}}</span>
								</td>
							</tr>
						@endforeach
			</tbody>
		</table>
</div>
<center style="padding-left: 500px; ">
	<h1>{{$orden->links()}}</h1>
</center>
 

@endsection
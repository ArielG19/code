<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Solicitante</th>
				<th>Servicio</th>
				<th>Estado de solicitud</th>
				<th>Opciones</th>
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
								<td>
				             		<a class="btn btn-info btn-sm" href="#" Onclick='MostrarOrden({{$o->id}});' data-toggle='modal' data-target='#myModalEstado' style ="margin-right: 8px;">
				              			<i class="far fa-edit"></i>
				              		</a>				              		
				           		</td>
							</tr>
						@endforeach
			</tbody>
		</table>
</div>
<center style="padding-left: 500px; ">
	<h1>{{$orden->links()}}</h1>
</center>
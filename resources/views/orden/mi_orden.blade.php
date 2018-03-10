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
								@if($o->estado == 'realizado')
								<td>
									<span class="badge badge-success">{{$o->estado}}</span>
								</td>
								@else
								<td>
									{{$o->estado}}
								</td>
								@endif

							</tr>
						@endforeach
			</tbody>
		</table>
</div>
<center style="padding-left: 500px; ">
	<h1>{{$orden->links()}}</h1>
</center>
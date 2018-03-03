<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Nombre</th>
				<th>Email</th>
				<th>Tipo</th>
				<th>Opciones</th>
			</thead>
			<tbody>
						@foreach($users as $user)
							<tr>
								<td>
									{{$user->name}}
								</td>
								<td>
									{{$user->email}}
								</td>

								<td>
									{{$user->type}}</span>
								</td>
								<td>
									<a href="#" Onclick='Enviar({{$user->id}});' class="btn btn-secondary btn-sm" data-toggle='modal' data-target='#MiEmail'>
				              			<i class="far fa-envelope"></i>
				              		</a>

				             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
				             		<a class="btn btn-info btn-sm" href="#" Onclick='MostrarUsuario({{$user->id}});' data-toggle='modal' data-target='#myModal' style ="margin-right: 8px;">
				              			<i class="far fa-edit"></i>
				              		</a>


				              		<a id="elim" class="btn btn-danger btn-sm" href="#" onclick="Eliminar('{{$user->id}}','{{$user->name}}')">
				                		<i class="fa fa-trash" aria-hidden="true"></i>
				              		</a>
				              		
				           		</td>
							</tr>
						@endforeach
			</tbody>
		</table>
</div>
<center style="padding-left: 500px; ">
	<h1>{{$users->links()}}</h1>
</center>

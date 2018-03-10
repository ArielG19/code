<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>Nombre servicio</th>
				<th>Descripcion</th>
				<th>IMG</th>
				<th>Opciones</th>
			</thead>
			<tbody>
						@foreach($servicios as $s)
							<tr>
								<td>
									{{$s->titulo}}
								</td>
								<td>
									{{$s->descripcion}}
								</td>

								<td>
									 <img src="/images/{{$s->imagen}}" width="50px;" height="50px;">
								</td>
								<td>
								
				             		<!--en la ruta pasamos el parametro para mostrar el id y poder editar o eliminar luego-->
				             		<a class="btn btn-info btn-sm" href="{{route('servicios.edit',$s->id)}}" data-toggle='modal' data-target='#myModalEdit{{$s->id}}' style ="margin-right: 8px;">
				              			<i class="far fa-edit"></i>
				              		</a>
	<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalEdit{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Editar servicio</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
							</div>

							<div class="modal-body">								
							{!! Form::open(array('action'=>array('ServicioController@update',$s->id),'method'=>'PUT','files'=>'true')) !!}
								
								<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
									<div class="form-group">
		                        		{!!form::label('Titulo:')!!}
		                            	{!!form::text('titulo',$s->titulo,['id'=>'titulo','class'=>'form-control','placeholder'=>'Escriba un titulo a la promocion'])!!}
		          					</div>
		          					<div class="form-group">
		                        		{!!form::label('descripcion:')!!}
		                            	{!!form::textarea('descripcion',$s->descripcion,['id'=>'descripcion','rows'=>'3','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
		          					</div>
		          					<div class="form-group">
                                       
                                       {!!form::file('imagen',['class' =>'form-control'])!!}
                    				</div>
                    				{!!form::submit('Guardar',['name'=>'guardar','id'=>'guardar','class'=>'btn btn-primary btn-sm-mt-10'])!!}
								{!!Form::close()!!}

		                		
							</div>

							<div class="modal-footer">
															</div>
					</div>
				</div>
		</div>
</div>

				              		<a id="elim" class="btn btn-danger btn-sm" href="#" onclick="Eliminar('{{$s->id}}','{{$s->titulo}}')">
				                		<i class="fa fa-trash" aria-hidden="true"></i>
				              		</a>

				              		
				           		</td>
							</tr>
						@endforeach
			</tbody>
		</table>

</div>
<center style="padding-left: 500px; ">
	<h1>{{$servicios->links()}}</h1>
</center>
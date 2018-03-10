<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalcreatePromo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Crear promocion nueva</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
							</div>

							<div class="modal-body">								
								{!! Form::open(['route' =>'servicios.store','method'=>'POST','files'=>true]) !!}
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
		                        		{!!form::label('Titulo:')!!}
		                            	{!!form::text('titulo',null,['id'=>'titulo','class'=>'form-control','placeholder'=>'Escriba un titulo a la promocion'])!!}
		          					</div>
		          					<div class="form-group">
		                        		{!!form::label('descripcion:')!!}
		                            	{!!form::textarea('descripcion',null,['id'=>'descripcion','rows'=>'3','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
		          					</div>
		          					<div class="form-group">
                                       
                                       {!!form::file('imagen',['class' =>'form-control'])!!}
                    				</div>

		                		
							</div>

							<div class="modal-footer">
								{!!form::submit('Guardar',['name'=>'guardar','id'=>'guardar','class'=>'btn btn-primary btn-sm-mt-10'])!!}
								{!!Form::close()!!}
							</div>
					</div>
				</div>
		</div>
</div>

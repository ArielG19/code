<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalcreateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Crear usuario</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
							</div>

							<div class="modal-body">
								{{--creamos un alert--}}
								<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
										<strong id="error"></strong>
								</div>
								{{--cremos el formulario con un id para usar ajax--}}
								{!!Form::open(['id'=>'form'])!!}
									<input type="hidden" name="_token" value="{{ csrf_token()}}">
									

									<div class="form-group">
		                        		{!!form::label('Nombre:')!!}
		                            	{!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
		          					</div>

		                    		<div class="form-group">
		              					<!--Nombramos las cajas de texto igual que los campos de la bd-->
		              					{!!form::label('Email:')!!}
		              					{!!form::email('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Escriba un correo example@gmil.com'])!!}
		            				</div>
		            				<div class="form-group">
		              				{!!Form::label('Contraseña:')!!}
		              				{!!Form::password('password',['id'=>'password','class' => 'form-control','placeholder'=> '*******','required'])!!}
		            				</div>

		                    		<div class="form-group">
		                        		{!!Form::label('Tipo')!!}
		                        		{!!Form::select('type',['admin'=>'administrador','usuario'=>'usuario'],null,['id'=>'type','class'=>'form-control'])!!}
		                    		</div>
		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'guardar','class'=>'btn btn-info'],$secure = null)!!}
							</div>
					</div>
				</div>
		</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span> 
						</button>

					</div>

					<div class="modal-body">
						{{--creamos un alert--}}
						<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
								<strong id="error"></strong>
						</div>
							{{--cambiamos el nombre del id del form por q estaba marcando error--}}
							{!!Form::open(['id'=>'formE'])!!}
							<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">

							{{--Este id nos sirve para actualizar por el id y mandarlo a la ruta--}}
							<input type="hidden" id="id">

							<div class="form-group">
                        		{!!form::label('Nombre:')!!}
                            	{!!form::text('name',null,['id'=>'Name','class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
          					</div>

          					<div class="form-group">
                        		{!!form::label('Email:')!!}
                            	{!!form::text('email',null,['id'=>'Email','class'=>'form-control'])!!}
          					</div>							
                		{!!Form::close()!!}
					</div>

					<div class="modal-footer">
						{!!link_to('#',$title ='Actualizar',$attributes= ['id'=>'actualizar','class'=>'btn btn-info'],$secure = null)!!}
					</div>		
		</div>
	</div>
</div>
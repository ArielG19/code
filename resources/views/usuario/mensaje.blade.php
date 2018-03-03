<div class="modal fade" id="MiEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Enviar email a:</h4>
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
							{!!Form::open(['id'=>'formEmail'])!!}
							<input type="hidden" name="_token" value="{{ csrf_token()}}" id="Etoken">

							{{--Este id nos sirve para actualizar por el id y mandarlo a la ruta--}}
							<input type="hidden" id="Eid">

							<div class="form-group">
                        		{!!form::label('Nombre:')!!}
                            	{!!form::text('name',null,['id'=>'Ename','class'=>'form-control','placeholder'=>'Escriba un nombre'])!!}
          					</div>

          					<div class="form-group">
                        		{!!form::label('Email:')!!}
                            	{!!form::text('email',null,['id'=>'Eemail','class'=>'form-control'])!!}
          					</div>
          					<div class="form-group">
                        		{!!form::label('Mensaje:')!!}
                            	{!!form::textarea('mensaje',null,['id'=>'mensaje','class'=>'form-control','rows' =>'3'])!!}
          					</div>	

                		{!!Form::close()!!}
					</div>

					<div class="modal-footer">
						{!!link_to('#',$title ='Enviar email',$attributes= ['id'=>'Enviar','class'=>'btn btn-info'],$secure = null)!!}
					</div>		
		</div>
	</div>
</div>
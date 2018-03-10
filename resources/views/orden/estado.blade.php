<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalEstado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Cambiar estado de solicitud</h4>
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
									<input type="hidden" id="token" value="{{ csrf_token()}}">
									
									<input type="hidden" id="id">
									<div class="form-group">
		                        		{!!form::label('Solicitante:')!!}
		                            	{!!form::text('solicitante',null,['id'=>'solicitante','class'=>'form-control','disabled'])!!}
		          					</div>

		                    		<div class="form-group">
		              					{!!form::label('Servicio:')!!}
		              					{!!form::text('servicio',null,['id'=>'servicio','class'=>'form-control','disabled'])!!}
		            				</div>
		            				
		                    		<div class="form-group">
		                        		{!!Form::label('Estado de solicitud')!!}
		                        		{!!Form::select('estado',['procesándose'=>'Procesándose','realizado'=>'Realizado'],null,['id'=>'estado','class'=>'form-control'])!!}
		                    		</div>
		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Actualizar estado',$attributes= ['id'=>'actualizar','class'=>'btn btn-info'],$secure = null)!!}
							</div>
					</div>
				</div>
		</div>
</div>

<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModalSolicitar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Solicitar este servicio</h5>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					                    <span aria-hidden="true"> X </span>
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

									<input type="hidden" id="id" value="">								

									<div class="form-group">
		                        		{!!form::label('Nombre del servicio:')!!}
		                            	{!!form::text('titulo',null,['id'=>'titulo','class'=>'form-control'])!!}
		          					</div>

		          					<div class="form-group">
		                        		{!!form::label('Descripcion del servicio:')!!}
		                            	{!!form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control'])!!}
		          					</div>

		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								<a class="btn btn-warning btn-sm" class="close" data-dismiss="modal" aria-label="Close">Cancelar</a>
								{!!link_to('#',$title ='Aceptar',$attributes= ['id'=>'solicitar','class'=>'btn btn-primary'],$secure = null)!!}
							</div>
					</div>
				</div>
		</div>
</div>

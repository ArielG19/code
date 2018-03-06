@extends('layouts.app')
@section('title','Contactanos')
@section('content')
    
<div class="container" style="padding-top: 130px;padding-bottom: 40px;">
    <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="well"> 
                            <div class="alert" role="alert">
                                <h4> <b>Envianos tu consulta... </b></h4><hr style="border: 1px solid #67687A;">
                            </div>
                            <form class="form" action="/enviar" method="POST">
                                    {!!csrf_field()!!}
                                <div class="form-group">
                                     <label for="nombre1">Nombre: </label>
                                     <input type="text" name="nombre" class="form-control" rows="3" id="nombre1" placeholder="Escriba su nombre">
                                </div>
                                <div class="form-group">
                                     <label for="apellido1">Apellido: </label>
                                     <input type="text" name="apellido" class="form-control" rows="3" id="apellido1" placeholder="Escriba su apellido">
                                </div>
                                <div class="form-group">
                                     <label for="Email1">Email: </label>
                                     <input type="email" name="email" class="form-control" id="Email1" placeholder="Escriba su email">
                                </div>
                                     <br>
                                <div class="form-group">
                                     <label for="mensaje1">Mensaje: </label><br>
                                     <textarea  name="mensaje" class="form-control" rows="5" id="mensaje1"></textarea>

                                </div>
                                     <button type="submit" name="enviar" class="btn btn-primary pull-right">Enviar consulta</button>
                                     <br><br>
                          </form>
                </div>
        </div>
    </div>
</div>
@endsection
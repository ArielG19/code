$(document).ready(function(){
		Orden();
		MiOrden();
});

//cargamos las ordenes para q las vea el admin
var Orden = function(){
	$.ajax({
		type:'get',
		url:'ordenes',
		success:function(data){
			$('#listar').empty().html(data);
		}
	});
}

//paginacion ordenes admin 
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar").empty().html(data);
		}
	});
});
//---------------------------------------------------------------------------------------------------------------
//cargamos las solicitudes del usuarios
var MiOrden = function(){
	$.ajax({
		type:'get',
		url:'servicios-solicitados',
		success:function(data){
			$('#mis-servicios').empty().html(data);
		}
	});
}

//paginacion ordenes de usuario
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#mis-servicios").empty().html(data);
		}
	});
});




//caragar orden en el home admin para cambiar estado
function MostrarOrden(id){
	var route = "ordenes/"+id+"/edit";
	$.get(route, function(data){
		console.log(data);
		$("#id").val(data[0].id);
		$("#solicitante").val(data[0].name);
		$("#servicio").val(data[0].titulo);
		$("#estado").val(data[0].estado);		
	});
}

//actualizar estado de solicitud en el admin home
$("#actualizar").click(function(event){
			var id = $("#id").val();
			var estado = $("#estado").val();

			var route = "ordenes/"+id+"";
			console.log(id);
			var token = $("#token").val();
  		
    $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'PUT',
				dataType:'json',
				data:{estado:estado},


      			success:function(data){
			          	if(data.success=='true'){
			          		Orden();
							$("#myModalEstado").modal('toggle');
							//pintamos un mensaje
							$("#message-update").fadeIn();
							$("#message-update").show().delay(3000).fadeOut(3);   
			            }
        		}
    });
});


//caragar orden en el inicio
function Ordenar(id){
	var route = "ordenes/"+id+"";
	$.get(route, function(data){
		//console.log(data);
		$("#id").val(data.id);
		$("#titulo").val(data.titulo);
		$("#descripcion").val(data.descripcion);
		//$("#Eemail").val(data.email);
		
	});
}

//guardar orden solicitada del servicio en inicio -------------------------------------------
$("#solicitar").click(function(event){
		var id_servicio = $("#id").val();
  		var token = $("input[name=_token]").val();
  		var route = "ordenes";
  		
     $.ajax({
      		url:route,
      		headers:{'X-CSRF-TOKEN':token},
      		type:'post',
      		datatype:'json',
      		data:{id_servicio:id_servicio},

      			success:function(data){
			          	if(data.success=='true'){
							$("#myModalSolicitar").modal('toggle');
							//pintamos un mensaje
							$("#message-save").fadeIn();
							$("#message-save").show().delay(4000).fadeOut(4);
							

			                
			            }
        		}
     });
});


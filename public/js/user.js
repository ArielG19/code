$(document).ready(function(){
		listarUsuario();
});

//listar----------------------------------------------
var listarUsuario = function(){
	$.ajax({
		type:'get',
		url:'listar-usuarios',
		success:function(data){
			$('#listar-usuarios').empty().html(data);
		}
	});
}
//paginacion------------------------------------------
$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-usuarios").empty().html(data);
		}
	});
});

//guardar -------------------------------------------
$("#guardar").click(function(event){
		var name = $("#name").val();
	    var email = $("#email").val();
	    var password = $("#password").val();
	    var type = $("#type").val();

  		var token = $("input[name=_token]").val();
  		//la ruta donde se envia la informacion del formulario
  		var route = "usuarios";
  		
     $.ajax({
      		url:route,
      		headers:{'X-CSRF-TOKEN':token},
      		type:'post',
      		datatype:'json',
      		data:{name:name,email:email,password:password,type:type},

      			success:function(data){
			          	if(data.success=='true'){
			          		listarUsuario();
							$("#myModalcreateUser").modal('toggle');
							//pintamos un mensaje
							$("#message-save").fadeIn();
							$("#message-save").show().delay(3000).fadeOut(3);
							

			                
			            }
        		}
     });
});

//mostrar los datos a editar
function MostrarUsuario(id){
	var route = "usuarios/"+id+"/edit";
	$.get(route, function(data){
		//console.log(id);
		$("#id").val(data.id);
		$("#Name").val(data.name);
		$("#Email").val(data.email);

	});
}
//actualizar
$("#actualizar").click(function(event){
			var id = $("#id").val();
			var name = $("#Name").val();
			var email = $("#Email").val();

			var route = "usuarios/"+id+"";
			console.log(id);
			var token = $("#token").val();
  		
    $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'PUT',
				dataType:'json',
				data:{name:name,email:email},


      			success:function(data){
			          	if(data.success=='true'){
			          		listarUsuario();
							$("#myModal").modal('toggle');
							//pintamos un mensaje
							$("#message-update").fadeIn();
							$("#message-update").show().delay(3000).fadeOut(3);   
			            }
        		}
    });
});

//eliminar
var Eliminar = function(id,name){
	$.alertable.confirm("<span>Estas seguro de eliminar al usuario? </span>"+
		"<strong><span><br>" +name+"</span></strong>",{
		html:true
	}).then(function(){
		var route = "usuarios/"+id+"";
		var token = $("#token").val();

		 $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'Delete',
				dataType:'json',
      			success:function(data){
			          	if(data.success=='true')
			          	{
			          		listarUsuario();
							$("#message-delete").fadeIn();
							$("#message-delete").show().delay(3000).fadeOut(3);   
			            }
        		}
    	});
		

	});
}

//mostrar datos para enviar email ------------------------------------
function Enviar(id){
	var route = "usuarios/"+id+"";
	$.get(route, function(data){
		//console.log(data);
		$("#id").val(data.id);
		$("#Ename").val(data.name);
		$("#Eemail").val(data.email);
		
	});
}

//actualizar
$("#Enviar").click(function(event){
			var id = $("#id").val();
			var name = $("#Ename").val();
			var email = $("#Eemail").val();
			var mensaje = $("#mensaje").val();
			console.log(id,name,email,mensaje);

			var route = "/enviar-email";
			//console.log(id);
			var token = $("#Etoken").val();
  		
    $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'post',
				dataType:'json',
				data:{name:name,email:email,mensaje:mensaje},


      			success:function(data){
			          	if(data.success=='true'){
			          		listarUsuario();
							$("#MiEmail").modal('toggle');
							//pintamos un mensaje
							$("#message-enviado").fadeIn();
							$("#message-enviado").show().delay(3000).fadeOut(3);   
			            }
        		}
    });
});

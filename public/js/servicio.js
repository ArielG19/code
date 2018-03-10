$(document).ready(function(){
		servicios();
});

//listar----------------------------------------------
var servicios = function(){
	$.ajax({
		type:'get',
		url:'listar-servicios',
		success:function(data){
			$('#listar-servicios').empty().html(data);
		}
	});
}

var Eliminar = function(id,titulo){
	$.alertable.confirm("<span>Estas seguro de eliminar este servicio? </span>"+
		"<strong><span><br>" +titulo+"</span></strong>",{
		html:true
	}).then(function(){
		var route = "servicios/"+id+"";
		var token = $("#token").val();

		 $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'Delete',
				dataType:'json',
      			success:function(data){
			          	if(data.success=='true')
			          	{
			          		servicios();
							$("#message-delete").fadeIn();
							$("#message-delete").show().delay(3000).fadeOut(3);   
			            }
        		}
    	});
		

	});
}
	


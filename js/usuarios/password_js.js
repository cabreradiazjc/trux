

$(function() {

	
	$('#btn_changepassword').on('click', function(){
		var clave1 = $('#param_clave1').val();
		var clave2 = $('#param_clave2').val();



		if (clave1 != clave2 || clave1.length == '') {        
            $("#mensaje").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>¡Verifique los campos!</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_changepassword').serialize()+'&param_opcion=changepassword',
		        url: '../controller/usuarios/usuarios_controller.php',
		        success: function(data){
		             $("#mensaje").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_clave1').val('');
					$("#param_clave2").val('');



					setTimeout("location.href='../index.php'",1000) ;       

					       

		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});


	


});






window.onload = function(){
	mostrarDatos();	
}

function mostrarDatos(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_usuarios'},
		url: '../../controller/usuarios/usuarios_controller.php',
		success: function(respuesta){
			$('#table_usuarios').DataTable().destroy();
			$('#body_usuarios').html(respuesta);
			$('#table_usuarios').DataTable({

		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      //'aaSorting' 	: [[0,'desc'] ],
		      'info'        : true,
		      'autoWidth'   : false

				});
			$('#modal-nuevo-usuario').modal('hide');  
			$('#modal-editar-usuarios').modal('hide');  
		},
		error: function(respuesta){
			$('#body_usuarios').html(respuesta);
		}
	});	
}

function eliminar(id){	

	if(confirm("¿Está seguro?"))
	{
		var param_opcion = 'eliminar-usuario';
	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/usuarios/usuarios_controller.php',
		success: function(data){
			setTimeout(mostrarDatos(),3000);
		},
		error: function(data){
			
		}
	});
	}
	

	
}

function editar(id){	
	var param_opcion = 'editar-usuario';
	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/usuarios/usuarios_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('editar-usuario');	
		  	$('#modal-editar-usuarios').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_usuario_edit').val(objeto[7]);
			$("#param_nombres_edit").val(objeto[1]);
			$("#param_appaterno_edit").val(objeto[2]);
			$("#param_apmaterno_edit").val(objeto[3]);
			$("#param_email_edit").val(objeto[4]);
			$("#param_celular_edit").val(objeto[5]);
			$("#param_dni_edit").val(objeto[6]);
			$("#param_idtipo_edit").val(objeto[8]);
			$("#param_id_edit").val(objeto[0]);
		},
		error: function(data){
			
		}
	});
}


function reset(id){	

	if(confirm("¿Está seguro?"))
	{
		var param_opcion = 'reset';
		//idecito = id;
		//var id = $("#param_id").val(objeto[0]);
		$.ajax({
			type: 'POST',
			data:'param_opcion='+param_opcion+'&param_id='+id,
			url: '../../controller/usuarios/usuarios_controller.php',
			success: function(data){
				//console.log(data);
				$('#param_opcion').val('reset');	
			  	alert("¡Contraseña reseteada satisfactoriamente!")

			
			},
			error: function(data){
				
			}
		});
	}
}

$(function() {

	

	$('#nuevo_usuarios').on('click', function(){
		var usuario = $('#param_usuario').val();
		//var clave = $('#param_clave').val();
		var nombres = $('#param_nombres').val();
		var appaterno = $('#param_appaterno').val();
		var apmaterno = $('#param_apmaterno').val();
		var email = $('#param_email').val();
		var celular = $('#param_celular').val();
		var dni = $('#param_dni').val();
		var idtipo = $('#param_idtipo').val();


		if (usuario.length == '' || nombres.length == '' ) {            
            $("#mensaje").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_nuevo_usuarios').serialize()+'&param_opcion=nuevo_usuarios',
		        url: '../../controller/usuarios/usuarios_controller.php',
		        success: function(data){
		            $("#mensaje").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Registro exitoso.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_usuario').val();
		            //$('#param_clave').val('');
					$("#param_nombres").val('');
					$("#param_appaterno").val('');
					$("#param_apmaterno").val('');
					$("#param_email").val('');
					$("#param_celular").val('');
					$("#param_dni").val('');
					$("#param_idtipo").val('ADMINISTRADOR');

					setTimeout(mostrarDatos(),1000) ;
					//setTimeout("location.href='../../view/usuarios/usuarios.php'",1000)    ;    

		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});




		$('#update-usuarios').on('click', function(){
		var usuario = $('#param_usuario_edit').val();
		//var clave = $('#param_clave_edit').val();
		var nombres = $('#param_nombres_edit').val();
		var appaterno = $('#param_appaterno_edit').val();
		var apmaterno = $('#param_apmaterno_edit').val();
		var email = $('#param_email_edit').val();
		var celular = $('#param_celular_edit').val();
		var dni = $('#param_dni_edit').val();
		var idtipo = $('#param_idtipo_edit').val();
		

		if (usuario.length == '' || nombres.length == '' ) {        
            $("#mensaje_edit").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_editar_usuarios').serialize()+'&param_opcion=update-usuarios',
		        url: '../../controller/usuarios/usuarios_controller.php',
		        success: function(data){
		             $("#mensaje_edit").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_usuario_edit').val();
					$("#param_nombres_edit").val('');
					$("#param_appaterno_edit").val('');
					$("#param_apmaterno_edit").val('');
					$("#param_email_edit").val('');
					$("#param_celular_edit").val('');
					$("#param_dni_edit").val('');
					$("#param_idtipo_edit").val('ADMINISTRADOR');


					setTimeout(mostrarDatos(),1000) ;
					       

		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});



	


});





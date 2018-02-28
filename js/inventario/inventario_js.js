
window.onload = function(){
	mostrarDatos();	
}

function mostrarDatos(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_inventario_admin'},
		url: '../../controller/inventario/inventario_controller.php',
		success: function(respuesta){
			$('#table_inventario_admin').DataTable().destroy();
			$('#body_inventario_admin').html(respuesta);
			$('#table_inventario_admin').DataTable({
			   dom: 'Bfrtip',
	           buttons: ['copy', 'csv', 'excel', 'pdf', 'print' ],
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      //'aaSorting' 	: [[0,'desc'] ],
		      'info'        : true,
		      'autoWidth'   : false

				});
			$('#modal-nuevo-item').modal('hide');  
			$('#modal-editar-item').modal('hide'); 
			$('#modal-salida_item').modal('hide');
		},
		error: function(respuesta){
			$('#body_item').html(respuesta);
		}
	});	
}

function eliminar(id){	

	
	var param_opcion = 'eliminaritem';
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

function editar(id){	
	var param_opcion = 'editar-item';
	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/usuarios/usuarios_controller.php',
		success: function(data){
			console.log(data);
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


function salida(id){	
	var param_opcion = 'salida-item';
	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/inventario/inventario_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('salida-item');	
		  	$('#modal-salida_item').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_id_item').val(objeto[0]);
			$('#param_descripcion_salida').val(objeto[1]);

		},
		error: function(data){
			
		}
	});
}




$(function() {

	var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();

		if(dd<10) {
		    dd = '0'+dd
		} 

		if(mm<10) {
		    mm = '0'+mm
		} 

		today = yyyy + '-' + mm + '-' + dd;
		//document.write(today);

	$('#nuevo_usuarios').on('click', function(){
		var usuario = $('#param_usuario').val();
		var clave = $('#param_clave').val();
		var nombres = $('#param_nombres').val();
		var appaterno = $('#param_appaterno').val();
		var apmaterno = $('#param_apmaterno').val();
		var email = $('#param_email').val();
		var celular = $('#param_celular').val();
		var dni = $('#param_dni').val();
		var idtipo = $('#param_idtipo').val();


		if (usuario.length == '' || clave.length == '' || nombres.length == '' ) {            
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
		            $('#param_clave').val('');
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


	$('#salida-item').on('click', function(){
		var salida_id = $('#param_id_item').val();
		var fecha = $('#param_fecha_salida').val();
		var cantidad = $('#param_cantidad_salida').val();
		var precioventa = $('#param_precioventa_salida').val();
		var tienda = $('#param_tienda').val();
		var placa = $('#param_placa').val();
		

		if (salida_id.length == '' || fecha.length == '' || cantidad.length == '' || tienda.length == '') {        
            $("#mensaje_salida").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_salida_item').serialize()+'&param_opcion=registrar-salida-item',
		        url: '../../controller/inventario/inventario_controller.php',
		        success: function(data){

		        	
		        	console.log(data.status);

		        	if(data.status == 'success'){
				       $("#mensaje_salida").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
			                        //window.location = "../index.php";
			            $('#param_id_item').val();
						$("#param_fecha_salida").val(today);
						$("#param_cantidad_salida").val('');
						$("#param_precioventa_salida").val('');
						$("#param_tienda").val('');
						$("#param_placa").val('');

						setTimeout(mostrarDatos(),10000) ;

				    }else{
				        $("#mensaje_salida").html(
            				'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>'+data.status+'</div>').show(200).delay(3500).hide(200);
  
					}
					       

		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});


});





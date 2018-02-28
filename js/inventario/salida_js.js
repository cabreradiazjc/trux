
window.onload = function(){
	listar_salidat1();	
	listar_salidat2();
}

function listar_salidat1(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_salidat1'},
		url: '../../controller/inventario/salida_controller.php',
		success: function(respuesta){
			$('#table_salidat1').DataTable().destroy();
			$('#body_salidat1').html(respuesta);
			$('#table_salidat1').DataTable({
		       dom: 'Bfrtip',
	           buttons: ['copy', 'csv', 'excel', 'pdf', 'print' ],
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'aaSorting' 	: [[0,'desc'] ],
		      'info'        : true,
		      'autoWidth'   : false

				});
			$('#modal-salidat1').modal('hide');  
			//$('#modal-salidat1').modal('hide');  
		},
		error: function(respuesta){
			//$('#body_item').html(respuesta);
		}
	});	
}

function listar_salidat2(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_salidat2'},
		url: '../../controller/inventario/salida_controller.php',
		success: function(respuesta){
			$('#table_salidat2').DataTable().destroy();
			$('#body_salidat2').html(respuesta);
			$('#table_salidat2').DataTable({
			   dom: 'Bfrtip',
	           buttons: ['copy', 'csv', 'excel', 'pdf', 'print' ],
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'aaSorting' 	: [[0,'desc'] ],
		      'info'        : true,
		      'autoWidth'   : false

				});
			$('#modal-salidat2').modal('hide');  
			//$('#modal-salidat2').modal('hide');  
		},
		error: function(respuesta){
			//$('#body_item').html(respuesta);
		}
	});	
}


function salidat1(id){	
	var param_opcion = 'salidat1';
	
	
	

	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/inventario/salida_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('salidat1');	
		  	$('#modal-salidat1').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_id').val(objeto[0]);
			$('#param_fecha_salidat1').val(objeto[1]);
			$("#param_item_salidat1").val(objeto[2]);
			$("#param_cantidad_salidat1").val(objeto[3]);
			$("#param_precio_salidat1").val(objeto[4]);
			$("#param_iditem").val(objeto[5]);
			var cantidad = $('#param_cantidad_salidat1').val();
			$('#param_cantidad_salidat1_bk').val(cantidad);
		},
		error: function(data){
			
		}
	});
}

function salidat2(id){	
	var param_opcion = 'salidat2';
	
	
	

	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id2='+id,
		url: '../../controller/inventario/salida_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('salidat2');	
		  	$('#modal-salidat2').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_id2').val(objeto[0]);
			$('#param_fecha_salidat2').val(objeto[1]);
			$("#param_item_salidat2").val(objeto[2]);
			$("#param_cantidad_salidat2").val(objeto[3]);
			$("#param_precio_salidat2").val(objeto[4]);
			$("#param_iditem2").val(objeto[5]);
			var cantidad = $('#param_cantidad_salidat2').val();
			$('#param_cantidad_salidat2_bk').val(cantidad);
		},
		error: function(data){
			
		}
	});
}



$(function() {


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


	$('#btn_salidat1').on('click', function(){
		var fecha = $('#param_fecha_salidat1').val();
		var item = $('#param_item_salidat1').val();
		var cantidad = $('#param_cantidad_salidat1').val();
		var precio = $('#param_precio_salidat1').val();

		

		if (fecha.length == '' || item.length == ''  || cantidad.length == '') {        
            $("#mensaje_salidat1").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_salidat1').serialize()+'&param_opcion=update-salidat1',
		        url: '../../controller/inventario/salida_controller.php',
		        success: function(data){
		            $("#mensaje_salidat1").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_fecha_salidat1').val();
					$("#param_item_salidat1").val('');
					$("#param_precio_salidat1").val('');
					$("#param_cantidad_salidat1").val('');
					$("#param_cantidad_salidat1_bk").val('');
					setTimeout(listar_salidat1(),1000) ;
					       
		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});


	$('#btn_salidat2').on('click', function(){
		var fecha = $('#param_fecha_salidat2').val();
		var item = $('#param_item_salidat2').val();
		var cantidad = $('#param_cantidad_salidat2').val();
		var precio = $('#param_precio_salidat2').val();

		

		if (fecha.length == '' || item.length == ''  || cantidad.length == '') {        
            $("#mensaje_salidat2").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_salidat2').serialize()+'&param_opcion=update-salidat2',
		        url: '../../controller/inventario/salida_controller.php',
		        success: function(data){
		            $("#mensaje_salidat2").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_fecha_salidat2').val();
					$("#param_item_salidat2").val('');
					$("#param_precio_salidat2").val('');
					$("#param_cantidad_salidat2").val('');
					$("#param_cantidad_salidat2_bk").val('');
					setTimeout(listar_salidat2(),1000) ;
					       
		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});


});





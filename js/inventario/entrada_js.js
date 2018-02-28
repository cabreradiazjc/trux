
window.onload = function(){
	listar_entradat1();	
	listar_entradat2();
}

function listar_entradat1(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_entradat1'},
		url: '../../controller/inventario/entrada_controller.php',
		success: function(respuesta){
			$('#table_entradat1').DataTable().destroy();
			$('#body_entradat1').html(respuesta);
			$('#table_entradat1').DataTable({
			   dom: 'Bfrtip',
	           buttons: ['copy', 'csv', 'excel', 'pdf', 'print' ],
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'aaSorting' 	: [[0,'desc'] ],
		      'info'        : true,
		      'autoWidth'   : false

				});
			$('#modal-entradat1').modal('hide');  
			//$('#modal-entradat1').modal('hide');  
		},
		error: function(respuesta){
			//$('#body_item').html(respuesta);
		}
	});	
}

function listar_entradat2(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_entradat2'},
		url: '../../controller/inventario/entrada_controller.php',
		success: function(respuesta){
			$('#table_entradat2').DataTable().destroy();
			$('#body_entradat2').html(respuesta);
			$('#table_entradat2').DataTable({
			   dom: 'Bfrtip',
	           buttons: ['copy', 'csv', 'excel', 'pdf', 'print' ],
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'aaSorting' 	: [[0,'desc'] ],
		      'info'        : true,
		      'autoWidth'   : false

				});
			$('#modal-entradat2').modal('hide');  
			//$('#modal-entradat2').modal('hide');  
		},
		error: function(respuesta){
			//$('#body_item').html(respuesta);
		}
	});	
}


function entradat1(id){	
	var param_opcion = 'entradat1';
	
	
	

	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/inventario/entrada_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('entradat1');	
		  	$('#modal-entradat1').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_id').val(objeto[0]);
			$('#param_fecha_entradat1').val(objeto[1]);
			$("#param_item_entradat1").val(objeto[2]);
			$("#param_cantidad_entradat1").val(objeto[3]);
			$("#param_costo_entradat1").val(objeto[4]);
			$("#param_iditem").val(objeto[5]);
			var cantidad = $('#param_cantidad_entradat1').val();
			$('#param_cantidad_entradat1_bk').val(cantidad);
		},
		error: function(data){
			
		}
	});
}

function entradat2(id){	
	var param_opcion = 'entradat2';
	
	
	

	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id2='+id,
		url: '../../controller/inventario/entrada_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('entradat2');	
		  	$('#modal-entradat2').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_id2').val(objeto[0]);
			$('#param_fecha_entradat2').val(objeto[1]);
			$("#param_item_entradat2").val(objeto[2]);
			$("#param_cantidad_entradat2").val(objeto[3]);
			$("#param_costo_entradat2").val(objeto[4]);
			$("#param_iditem2").val(objeto[5]);
			var cantidad = $('#param_cantidad_entradat2').val();
			$('#param_cantidad_entradat2_bk').val(cantidad);
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




	$('#btn_entradat1').on('click', function(){
		var fecha = $('#param_fecha_entradat1').val();
		var item = $('#param_item_entradat1').val();
		var cantidad = $('#param_cantidad_entradat1').val();
		var costo = $('#param_costo_entradat1').val();

		

		if (fecha.length == '' || item.length == ''  || cantidad.length == '') {        
            $("#mensaje_entradat1").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_entradat1').serialize()+'&param_opcion=update-entradat1',
		        url: '../../controller/inventario/entrada_controller.php',
		        success: function(data){
		            $("#mensaje_entradat1").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_fecha_entradat1').val();
					$("#param_item_entradat1").val('');
					$("#param_costo_entradat1").val('');
					$("#param_cantidad_entradat1").val('');
					$("#param_cantidad_entradat1_bk").val('');
					setTimeout(listar_entradat1(),1000) ;
					       
		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});

	$('#btn_entradat2').on('click', function(){
		var fecha = $('#param_fecha_entradat2').val();
		var item = $('#param_item_entradat2').val();
		var cantidad = $('#param_cantidad_entradat2').val();
		var costo = $('#param_costo_entradat2').val();

		

		if (fecha.length == '' || item.length == ''  || cantidad.length == '') {        
            $("#mensaje_entradat2").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_entradat2').serialize()+'&param_opcion=update-entradat2',
		        url: '../../controller/inventario/entrada_controller.php',
		        success: function(data){
		            $("#mensaje_entradat2").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_fecha_entradat2').val();
					$("#param_item_entradat2").val('');
					$("#param_costo_entradat2").val('');
					$("#param_cantidad_entradat2").val('');
					$("#param_cantidad_entradat2_bk").val('');
					setTimeout(listar_entradat2(),1000) ;
					       
		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});


});





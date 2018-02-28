
window.onload = function(){
	mostrarDatos();	
}

function mostrarDatos(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_inventario_admin'},
		url: '../../controller/inventario/inventario_admin_controller.php',
		success: function(respuesta){
			$('#table_inventario_admin').DataTable().destroy();
			$('#body_inventario_admin').html(respuesta);
			$('#table_inventario_admin').DataTable({
			   dom: 'Bfrtip',
	           buttons: ['copy', 'csv', 'excel', 'pdf', 'print' ],
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'aaSorting' 	: [[0,'desc'] ],
		      'info'        : true,
		      'autoWidth'   : false

				});
			$('#modal-nuevo-item').modal('hide');  
			$('#modal-editar_item').modal('hide'); 
			$('#modal-entrada_item').modal('hide');
		},
		error: function(respuesta){
			$('#body_item').html(respuesta);
		}
	});	
}

function eliminar(id){	

	if(confirm("¿Está seguro?"))
	{
		var param_opcion = 'eliminar-item';
		//idecito = id;
		//var id = $("#param_id").val(objeto[0]);
		$.ajax({
			type: 'POST',
			data:'param_opcion='+param_opcion+'&param_id='+id,
			url: '../../controller/inventario/inventario_admin_controller.php',
			success: function(data){
				setTimeout(mostrarDatos(),3000);
			},
			error: function(data){
				
			}
		});
	}
}

function editar(id){	
	var param_opcion = 'editar-item';
	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/inventario/inventario_admin_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('editar-item');	
		  	$('#modal-editar_item').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_id_edit').val(objeto[0]);
			$('#param_descripcion_edit').val(objeto[1]);
			$("#param_unidad_edit").val(objeto[2]);
			$("#param_costounitario_edit").val(objeto[3]);
			$("#param_precioventa_edit").val(objeto[4]);
			$("#param_stockminimo_edit").val(objeto[5]);

		},
		error: function(data){
			
		}
	});
}


function entrada(id){	
	var param_opcion = 'entrada-item';
	//idecito = id;
	//var id = $("#param_id").val(objeto[0]);
	$.ajax({
		type: 'POST',
		data:'param_opcion='+param_opcion+'&param_id='+id,
		url: '../../controller/inventario/inventario_admin_controller.php',
		success: function(data){
			//console.log(data);
			$('#param_opcion').val('entrada-item');	
		  	$('#modal-entrada_item').modal({
		  		show:true,
		  		backdrop:'static',
		  	});

			objeto=JSON.parse(data);
			$('#param_id_item').val(objeto[0]);
			$('#param_descripcion_entrada').val(objeto[1]);

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

	$('#nuevo_item').on('click', function(){
		var descripcion = $('#param_descripcion').val();
		var unidad = $('#param_unidad').val();
		var costounitario = $('#param_costounitario').val();
		var precioventa = $('#param_precioventa').val();
		var stockminimo = $('#param_stockminimo').val();



		if (descripcion.length == '' || unidad.length == '' ) {            
            $("#mensaje_nuevo_item").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_nuevo_item').serialize()+'&param_opcion=nuevo_item',
		        url: '../../controller/inventario/inventario_admin_controller.php',
		        success: function(data){
		            $("#mensaje_nuevo_item").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Registro exitoso.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_descripcion').val();
		            $('#param_unidad').val('UND');
					$("#param_costounitario").val('');
					$("#param_precioventa").val('');
					$("#param_stockminimo").val('');

					setTimeout(mostrarDatos(),10000) ;
					//setTimeout("location.href='../../view/usuarios/usuarios.php'",1000)    ;    

		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});




		$('#update-item').on('click', function(){
		var descripcion_edit = $('#param_descripcion_edit').val();
		var unidad_edit = $('#param_unidad_edit').val();
		var costounitario_edit = $('#param_costounitario_edit').val();
		var precioventa_edit = $('#param_precioventa_edit').val();
		var stockminimo_edit = $('#param_stockminimo_edit').val();
		

		if (descripcion_edit.length == '' || unidad_edit.length == '' ) {        
            $("#mensaje_edit").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_editar_item').serialize()+'&param_opcion=update-item',
		        url: '../../controller/inventario/inventario_admin_controller.php',
		        success: function(data){
		             $("#mensaje_edit").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_descripcion_edit').val();
					$("#param_unidad_edit").val('');
					$("#param_costounitario_edit").val('');
					$("#param_precioventa_edit").val('');
					$("#param_stockminimo_edit").val('');
					$("#param_id_edit").val('');


					setTimeout(mostrarDatos(),10000) ;
					       

		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});




	$('#entrada-item').on('click', function(){
		var entrada_id = $('#param_id_item').val();
		var fecha = $('#param_fecha_entrada').val();
		var cantidad = $('#param_cantidad_entrada').val();
		var costounitario = $('#param_costounitario_entrada').val();
		var tienda = $('#param_tienda').val();
		

		if (entrada_id.length == '' || fecha.length == '' || cantidad.length == '') {        
            $("#mensaje_entrada").html(
            	'<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4> Debe llenar los campos necesarios</div>').show(200).delay(3500).hide(200);
        } else {
        	$.ajax({
		        type: 'POST',        
		        data: $('#frm_entrada_item').serialize()+'&param_opcion=registrar-entrada-item',
		        url: '../../controller/inventario/inventario_admin_controller.php',
		        success: function(data){
		             $("#mensaje_entrada").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>Actualizado con éxito.</div>').show(200).delay(3500).hide(200);
		                        //window.location = "../index.php";
		            $('#param_id_item').val();
					$("#param_fecha_entrada").val(today);
					$("#param_cantidad_entrada").val('');
					$("#param_costounitario_entrada").val('');
					$("#param_tienda").val('1');
					
					setTimeout(mostrarDatos(),10000) ;
					       

		        },
		        error: function(data){
		                   
		        } 
			});
        }
		
	});


});





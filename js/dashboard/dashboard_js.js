
window.onload = function(){
	mostrarDatos();	
	linechart();
	chartt1();
	chartt2();
	nroSalidas();
	stockOut();

}


function mostrarDatos(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'listar_stock'},
		url: 'controller/dashboard/dashboard_controller.php',
		success: function(respuesta){

			$('#table_stock').DataTable().destroy();
			$('#body_stock').html(respuesta);
			$('#table_stock').DataTable({
			   dom: 'Bfrtip',
	           buttons: ['copy', 'csv', 'excel', 'pdf', 'print' ],
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'aaSorting' 	: [[6,'asc'] ],
		      'info'        : true,
		      'autoWidth'   : true,
		      "iDisplayLength": 25

				});
		},
		error: function(respuesta){
			$('#body_stock').html(respuesta);
		}
	});	
}

function linechart(){

	$.ajax({
	 	type: 'POST',
	 	data:{param_opcion: 'chartAperturabt'},
	    url: 'controller/dashboard/dashboard_controller.php',
	        
	    success : function(data) {

	    /*console.log(data);

			*/


	    	
	      //chartData = data;
	      //console.log(data);
	     'use strict';

		   // LINE CHART
	    var line1 = new Morris.Line({
	      element: 'line-chart',
	      resize: true,
	      data: data,
		    xkey: 'fecha',
		    ykeys: ['hora'],
		    labels: ['Total'],
		    lineColors: ['#3c8dbc'],
		    hideHover: 'auto',
		   xLabels: 'day'/*
		    yLabelFormat: function(y) {
				  return y = y ;
				},
			hoverCallback: function (index, options, content,row) {
			    var data = options.data[index];
        		return data.fecha;
        		
			  }*/
		    });


			    },
		error: function(data){
			
		}
	});
}

function chartt1(){
	$.ajax({
	 	type: 'POST',
	 	data:{param_opcion: 'chartt1'},
	    url: 'controller/dashboard/dashboard_controller.php',
	        
	    success : function(data) {

	    /*console.log(data);

			*/


	    	
	      //chartData = data;
	      //console.log(data);
	     'use strict';

		   // LINE CHART
	    var line2 = new Morris.Line({
	      element: 'chartt1',
	      resize: false,
	      data: data,
		    xkey: 'fecha',
		    ykeys: ['hora'],
		    labels: ['Total'],
		    lineColors: ['#002a85'],
		    hideHover: 'auto',
		   xLabels: 'day'/*
		    yLabelFormat: function(y) {
				  return y = y ;
				},
			hoverCallback: function (index, options, content,row) {
			    var data = options.data[index];
        		return data.fecha;
        		
			  }*/
		    });


			    },
		error: function(data){
			
		}
	});
}

function chartt2(){
	$.ajax({
	 	type: 'POST',
	 	data:{param_opcion: 'chartt2'},
	    url: 'controller/dashboard/dashboard_controller.php',
	        
	    success : function(data) {

	    /*console.log(data);

			*/


	    	
	      //chartData = data;
	      //console.log(data);
	     'use strict';

		   // LINE CHART
	    var line2 = new Morris.Line({
	      element: 'chartt2',
	      resize: false,
	      data: data,
		    xkey: 'fecha',
		    ykeys: ['hora'],
		    labels: ['Total'],
		    lineColors: ['#FF0000'],
		    hideHover: 'auto',
		   xLabels: 'day'/*
		    yLabelFormat: function(y) {
				  return y = y ;
				},
			hoverCallback: function (index, options, content,row) {
			    var data = options.data[index];
        		return data.fecha;
        		
			  }*/
		    });


			    },
		error: function(data){
			
		}
	});
}


function nroSalidas(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'nroSalidas'},
		url: 'controller/dashboard/dashboard_controller.php',
		success: function(respuesta){
			$('#nroSalidas').html(respuesta);


		},
		error: function(respuesta){
			$('#nroSalidas').html(respuesta);
		}
	});	
}

function stockOut(){
	$.ajax({
		type: 'POST',
		data:{param_opcion: 'stockOut'},
		url: 'controller/dashboard/dashboard_controller.php',
		success: function(respuesta){
			$('#stockOut').html(respuesta);


		},
		error: function(respuesta){
			$('#stockOut').html(respuesta);
		}
	});	
}
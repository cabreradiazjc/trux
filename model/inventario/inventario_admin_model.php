<?php 

include_once '../../model/conexion_model.php';

class Inventario_model{

	private $param = array();
	private $conexion = null;
	private $result = null;

	function __construct()
	{
		$this->conexion = Conexion_Model::getConexion();

	}

	function cerrarAbrir()
	{
        mysqli_close($this->conexion);
        $this->conexion = Conexion_Model::getConexion();
	}

	function gestionar($param)
	{
		$this->param = $param;		
		switch($this->param['param_opcion'])
		{
			case "listar_inventario_admin";
				echo $this->listar_inventario_admin();
				break;
			case "nuevo_item";
				echo $this->nuevo_item();
				break;
			case "editar-item";
				echo $this->editar_item();
				break;
			case "update-item";
				echo $this->update_item();
				break;
			case "eliminar-item";
				echo $this->eliminar_item();
				break;
			case "entrada-item";
				echo $this->entrada_item();
				break;
			case "registrar-entrada-item";
				echo $this->registrar_entrada_item();
				break;
			
		}
	}

	function prepararConsultaUsuario($opcion) 
	{
		$consultaSql = "call sp_control_inventario(";
		$consultaSql.="'".$opcion."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }


	function listar_inventario_admin() {
    	$this->prepararConsultaUsuario('opc_listar_inventario_admin');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<tr>					
					<td style="font-size: 12px; width: 5%;">'.$row[0].'</td>		
					<td style="font-size: 12px; width: 20%;">'.$row[1].'</td>
					<td style="font-size: 12px; width: 10%;">'.$row[2].'</td>
					<td style="font-size: 12px; width: 10%;">'.$row[3].'</td>
					<td style="font-size: 12px; width: 5%;">'.$row[4].'</td>
					<td style="font-size: 12px; width: 10%;">'.$row[5].'</td>
					<td style="font-size: 12px; width: 5%;">'.$row[6].'</td>
					<td style="font-size: 12px; width: 5%;">'.$row[7].'</td>
					<td style="font-size: 11px; height: 10px; width: 10%; text-align:center; direction:rtl;"> 
					<a data-toggle="tooltip" title="EDITAR" class="btn btn-primary btn-xs" onclick="editar('.$row[0].');"><i class="fa fa-edit"></i></a> 
					<a data-toggle="tooltip" title="ELIMINAR" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="eliminar('.$row[0].');"></i></a> 
					<a data-toggle="tooltip" title="ENTRADA" class="btn btn-success btn-xs" onclick="entrada('.$row[0].');"><i class="fa fa-arrow-down"></i></a> 
					</td>



				</tr>';
		}
	}

	function eliminar_item() {
		$opcion=$this->param['param_opcion'];
		$id=$this->param['param_id'];

    	$consultaSql = "call sp_control_item(";
		$consultaSql.="'".$opcion."',";
		$consultaSql.="'".$id."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);  
	}



	function editar_item() {

		$opcion='opc_editar_item';
		$id=$this->param['param_id'];
    	$consultaSql = "call sp_control_item(";
		$consultaSql.="'".$opcion."',";
		$consultaSql.="'".$id."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);  

    	while ($row = mysqli_fetch_row($this->result)) {
                        echo json_encode($row);
        	}
	}



	function entrada_item() {

		$opcion='opc_entrada_item';
		$id=$this->param['param_id'];
    	$consultaSql = "call sp_control_item(";
		$consultaSql.="'".$opcion."',";
		$consultaSql.="'".$id."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);  

    	while ($row = mysqli_fetch_row($this->result)) {
                        echo json_encode($row);
        	}
	}


	function update_item() 

	{	
		$idItem = $this->param['param_id_edit'];

		

    	$consultaSql = "UPDATE item set ";
    	$consultaSql.="descripcion = '".$this->param['param_descripcion_edit']."',";
		$consultaSql.="unidad = '".$this->param['param_unidad_edit']."',";
		$consultaSql.="costoUnitario = '".$this->param['param_costounitario_edit']."',";
		$consultaSql.="precioVenta = '".$this->param['param_precioventa_edit']."',";
		$consultaSql.="stockMinimo= '".$this->param['param_stockminimo_edit']."'";
		$consultaSql.="where idItem = '".$idItem."' ";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);

    }



	function registrar_entrada_item() 

	{	

		//inserta movimiento
		$consultaSql = "INSERT INTO movimientos(fecha,cantidad,costoUnitario,idTipoMovimiento,iditem,idusuario,idTienda) VALUES (";
		$consultaSql.="'".$this->param['param_fecha_entrada']."',";
		$consultaSql.="'".$this->param['param_cantidad_entrada']."',";
		$consultaSql.="'".$this->param['param_costounitario_entrada']."',";
		$consultaSql.="'1',";
		$consultaSql.="'".$this->param['param_id_item']."',";
		$consultaSql.="'".$this->param['param_id_usuario']."',";
		$consultaSql.="'".$this->param['param_tienda']."')";


		//echo $estado;
		//echo $consultaSql;	// FALTA VER AKI EL REGISTRO PREGUNTAR A MILUSKA	
		mysqli_query($this->conexion,$consultaSql);
 		
 		$this->existeStock();
        $respuesta = $this->ejecutarConsultaRespuesta();
        echo $respuesta;
        if($respuesta == '1')

		{


			//actualiza stock
			$consultaSql ="";

	    	$consultaSql = "UPDATE stock set ";
	    	$consultaSql.="stock = stock + '".$this->param['param_cantidad_entrada']."'";
			$consultaSql.="where idItem = '".$this->param['param_id_item']."' and idTienda = ".$this->param['param_tienda'];

			//echo $consultaSql;
			mysqli_query($this->conexion,$consultaSql);


		}

		else{


			//primero inserta stock
			$consultaSql ="";

			$consultaSql = "INSERT INTO stock(idTienda, idItem, stock) VALUES (";
			$consultaSql.="'".$this->param['param_tienda']."',";
			$consultaSql.="'".$this->param['param_id_item']."',";
			$consultaSql.="'0')";

			//echo $consultaSql;
			mysqli_query($this->conexion,$consultaSql);


			//despues actualiza stock
			$consultaSql ="";

	    	$consultaSql = "UPDATE stock set ";
	    	$consultaSql.="stock = stock + '".$this->param['param_cantidad_entrada']."'";
			$consultaSql.="where idItem = '".$this->param['param_id_item']."' and idTienda = ".$this->param['param_tienda'];

			//echo $consultaSql;
			mysqli_query($this->conexion,$consultaSql);


		}

    }


    function existeStock() {	

		$consultaSql ="select if ((select count(*) from stock where ";
		$consultaSql.="idItem='".$this->param['param_id_item']."' and ";
		$consultaSql.="idTienda='".$this->param['param_tienda']."') > 0,1,0) as respuesta";

		echo $consultaSql;
		$this->result = mysqli_query($this->conexion,$consultaSql);
	
	}



  	function ejecutarConsultaRespuesta() {

		$respuesta = '';
        while ($fila = mysqli_fetch_array($this->result)) {
            $respuesta = $fila['respuesta'];
        }
        return $respuesta;

	}

     function nuevo_item() 

	{	
		
		$consultaSql = "INSERT INTO item(codigo,descripcion,unidad,costoUnitario,precioVenta,stockMinimo) VALUES (";
		$consultaSql.="'".$this->param['param_codigo']."',";
		$consultaSql.="'".$this->param['param_descripcion']."',";
		$consultaSql.="'".$this->param['param_unidad']."',";
		$consultaSql.="'".$this->param['param_costounitario']."',";
		$consultaSql.="'".$this->param['param_precioventa']."',";
		$consultaSql.="'".$this->param['param_stockminimo']."')";


		//echo $estado;
		//echo $consultaSql;	// FALTA VER AKI EL REGISTRO PREGUNTAR A MILUSKA	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }

  

}

 ?>


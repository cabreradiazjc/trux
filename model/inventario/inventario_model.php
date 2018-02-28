<?php 

include_once '../../model/conexion_model.php';

class Inventario_model{

	private $param = array();
	private $conexion = null;
	private $result = null;
	private $respuesta = null;

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
			case "nuevo_usuarios";
				echo $this->nuevo_usuarios();
				break;
			case "editar-usuario";
				echo $this->editar_usuarios();
				break;
			case "update-usuarios";
				echo $this->update_usuarios();
				break;
			case "eliminar-usuario";
				echo $this->eliminar_usuarios();
				break;
			case "salida-item";
				echo $this->salida_item();
				break;
			case "registrar-salida-item";
				echo $this->registrar_salida_item();
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
					<td style="width: 10%;">'.$row[0].'</td>		
					<td style="width: 30%;">'.$row[1].'</td>
					<td style="width: 10%;">'.$row[3].'</td>
					<td style="width: 10%;">'.$row[4].'</td>
					<td style="width: 10%;">'.$row[5].'</td>
					<td style="width: 10%;">'.$row[6].'</td>
					<td style="font-size: 11px; height: 10px; width: 10%; text-align: center; direction: rtl; "> 
					<a data-toggle="tooltip" title="SALIDA" class="btn btn-danger btn-xs" onclick="salida('.$row[0].');"><i class="fa fa-arrow-up"></i></a> 
					</td>

				</tr>';
		}
	}

	function eliminar_usuarios() {
		$opcion=$this->param['param_opcion'];
		$id=$this->param['param_id'];

    	$consultaSql = "call sp_control_usuarios(";
		$consultaSql.="'".$opcion."',";
		$consultaSql.="'".$id."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);  
	}



	function editar_usuarios() {

		$opcion='opc_editar_usuarios';
		$id=$this->param['param_id'];
    	$consultaSql = "call sp_control_usuarios(";
		$consultaSql.="'".$opcion."',";
		$consultaSql.="'".$id."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);  

    	while ($row = mysqli_fetch_row($this->result)) {
                        echo json_encode($row);
        	}
	}


	function update_usuarios() 

	{	
		$idusuario = $this->param['param_id_edit'];
		//echo $clave;
		switch($this->param['param_idtipo_edit'])
		{
			case "ADMINISTRADOR";
				$idtipo = 1;
				break;
			case "VENDEDOR";
				$idtipo = 2;
				break;

		}

    	$consultaSql = "UPDATE usuario set ";
    	$consultaSql.="usuario = '".$this->param['param_usuario_edit']."',";
		$consultaSql.="nombres = '".$this->param['param_nombres_edit']."',";
		$consultaSql.="appaterno = '".$this->param['param_appaterno_edit']."',";
		$consultaSql.="apmaterno = '".$this->param['param_apmaterno_edit']."',";
		$consultaSql.="email= '".$this->param['param_email_edit']."',";
		$consultaSql.="celular= '".$this->param['param_celular_edit']."',";
		$consultaSql.="dni= '".$this->param['param_dni_edit']."',";
		$consultaSql.="idtipo= '".$idtipo."'";
		$consultaSql.="where idusuario = '".$idusuario."' ";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);

    }




     function nuevo_usuarios() 

	{	
		$clave = md5($this->param['param_clave']);
		//echo $clave;
		//echo $this->param['param_idtipo'];
		switch($this->param['param_idtipo'])
		{
			case "ADMINISTRADOR";
				$idtipo = '1';
				break;
			case "VENDEDOR";
				$idtipo = '2';
				break;

		}


		$consultaSql = "INSERT INTO usuario(usuario,clave,nombres,appaterno,apmaterno,email,celular,dni,idtipo) VALUES (";
		$consultaSql.="'".$this->param['param_usuario']."',";
		$consultaSql.="'".$clave."',";
		$consultaSql.="'".$this->param['param_nombres']."',";
		$consultaSql.="'".$this->param['param_appaterno']."',";
		$consultaSql.="'".$this->param['param_apmaterno']."',";
		$consultaSql.="'".$this->param['param_email']."',";
		$consultaSql.="'".$this->param['param_celular']."',";
		$consultaSql.="'".$this->param['param_dni']."',";
		$consultaSql.="'".$idtipo."')";

		//echo $estado;
		//echo $consultaSql;	// FALTA VER AKI EL REGISTRO PREGUNTAR A MILUSKA	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }


    function salida_item() {

		$opcion='opc_salida_item';
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

	function registrar_salida_item() 

	{	


		$this->existeStock();
        $respuesta = $this->ejecutarConsultaRespuesta();
        //echo $respuesta;
        if($respuesta == '0'){
			$response_array['status'] = 'No existe stock en la tienda'; 
		}else{
			//$respuesta = '';
			$this->mayorquestock();
	        $respuesta = $this->ejecutarConsultaRespuesta();
	        //echo $respuesta;
			if($respuesta == '0'){
				$response_array['status'] = 'Cantidad es mayor que stock existente'; 
			}else{
				//inserta movimiento
				$consultaSql = "INSERT INTO movimientos(fecha,cantidad,precioVenta,idTipoMovimiento,iditem,idusuario,idTienda,placa) VALUES (";
				$consultaSql.="'".$this->param['param_fecha_salida']."',";
				$consultaSql.="'".$this->param['param_cantidad_salida']."',";
				$consultaSql.="'".$this->param['param_precioventa_salida']."',";
				$consultaSql.="'2',";
				$consultaSql.="'".$this->param['param_id_item']."',";
				$consultaSql.="'".$this->param['param_id_usuario']."',";
				$consultaSql.="'".$this->param['param_tienda']."',";
				$consultaSql.="'".$this->param['param_placa']."')";


				//echo $estado;
				//echo $consultaSql;	// FALTA VER AKI EL REGISTRO PREGUNTAR A MILUSKA	
				mysqli_query($this->conexion,$consultaSql);
		 		

				//actualiza stock
				$consultaSql ="";

		    	$consultaSql = "UPDATE stock set ";
		    	$consultaSql.="stock = stock - '".$this->param['param_cantidad_salida']."'";
				$consultaSql.=" where idItem = '".$this->param['param_id_item']."' and idTienda = ".$this->param['param_tienda'];

				//echo $consultaSql;
				mysqli_query($this->conexion,$consultaSql);


				$response_array['status'] = 'success'; 

			}
		}

		 //set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($response_array);

    }



     function existeStock() {	

		$consultaSql ="select if ((select stock from stock where ";
		$consultaSql.="idItem='".$this->param['param_id_item']."' and ";
		$consultaSql.="idTienda='".$this->param['param_tienda']."') > 0,1,0) as respuesta";

		//echo $consultaSql;
		$this->result = mysqli_query($this->conexion,$consultaSql);
	
	}



     function mayorquestock() {	

		$consultaSql ="select if ((select count(*) from stock where ";
		$consultaSql.="idItem='".$this->param['param_id_item']."' and ";
		$consultaSql.="idTienda='".$this->param['param_tienda']."' and stock>='".$this->param['param_cantidad_salida']."' ) > 0,1,0) as respuesta";

		//echo $consultaSql;
		$this->result = mysqli_query($this->conexion,$consultaSql);
	
	}



  	function ejecutarConsultaRespuesta() {

		$respuesta = '';
        while ($fila = mysqli_fetch_array($this->result)) {
            $respuesta = $fila['respuesta'];
        }
        return $respuesta;

	}



  

}

 ?>


<?php 

include_once '../../model/conexion_model.php';

class Salida_model{

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
			case "listar_salidat1";
				echo $this->listar_salidat1();
				break;
			case "listar_salidat2";
				echo $this->listar_salidat2();
				break;
			case "salidat1";
				echo $this->salidat1();
				break;
			case "update-salidat1";
				echo $this->update_salidat1();
				break;
			case "salidat2";
				echo $this->salidat2();
				break;
			case "update-salidat2";
				echo $this->update_salidat2();
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


	function listar_salidat1() {
    	$this->prepararConsultaUsuario('opc_listar_salidat1');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<tr>					
					<!-- <td style="width: 10%;">'.$row[0].'</td>	-->	
					<td style="width: 15%;">'.$row[1].'</td>
					<td style="width: 30%;">'.$row[2].'</td>
					<td style="width: 10%;">'.$row[3].'</td>
					<td style="width: 10%;">'.$row[4].'</td>
					<td style="width: 10%;">'.$row[5].'</td>
					<td style="width: 15%;">'.$row[6].'</td>
					<td style="width: 10%; text-align:center; direction:rtl;"> <a class="btn btn-primary btn-xs" onclick="salidat1('.$row[0].');"><i class="fa fa-edit fa-lg"></i></a></td>



				</tr>';
		}
	}

	function listar_salidat2() {
    	$this->prepararConsultaUsuario('opc_listar_salidat2');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<tr>					
					<!-- <td style="width: 10%;">'.$row[0].'</td>	-->	
					<td style="width: 15%;">'.$row[1].'</td>
					<td style="width: 30%;">'.$row[2].'</td>
					<td style="width: 10%;">'.$row[3].'</td>
					<td style="width: 10%;">'.$row[4].'</td>
					<td style="width: 10%;">'.$row[5].'</td>
					<td style="width: 15%;">'.$row[6].'</td>
					<td style="width: 10%; text-align:center; direction:rtl;"> <a class="btn btn-primary btn-xs" onclick="salidat2('.$row[0].');"><i class="fa fa-edit fa-lg"></i></a></td>



				</tr>';
		}
	}


	function listar_item() {
    	$this->prepararConsultaUsuario('opc_listar_item');    	
    	while($row = $this->result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['descripcion'] = $row['descripcion'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		 //set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);
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



    function salidat1() {

		$opcion='opc_salidat1';
		$id=$this->param['param_id'];

    	$consultaSql = "call sp_control_movimientos(";
		$consultaSql.="'".$opcion."',";
		$consultaSql.="'".$id."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);  

    	while ($row = mysqli_fetch_row($this->result)) {
                        echo json_encode($row);
        	}
	}

	function salidat2() {

		$opcion='opc_salidat2';
		$id=$this->param['param_id2'];

    	$consultaSql = "call sp_control_movimientos(";
		$consultaSql.="'".$opcion."',";
		$consultaSql.="'".$id."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);  

    	while ($row = mysqli_fetch_row($this->result)) {
                        echo json_encode($row);
        	}
	}


	function update_salidat1() {	

		$idusuario = $this->param['param_id'];
		$iditem = $this->param['param_iditem'];

    	$consultaSql = "UPDATE movimientos set ";
    	$consultaSql.="fecha = '".$this->param['param_fecha_salidat1']."',";
		$consultaSql.="cantidad = '".$this->param['param_cantidad_salidat1']."',";
		$consultaSql.="precioVenta = '".$this->param['param_precio_salidat1']."'";
		$consultaSql.=" where idMovimientos = '".$idusuario."' ";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);

		$consultaSql = "UPDATE stock set ";
    	$consultaSql.="stock = stock + (".$this->param['param_cantidad_salidat1_bk']."- ".$this->param['param_cantidad_salidat1']." )";
		$consultaSql.=" where iditem = '".$iditem."' and idTienda = 1;";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);
	}


	function update_salidat2() {	

		$idusuario = $this->param['param_id2'];
		$iditem = $this->param['param_iditem2'];

    	$consultaSql = "UPDATE movimientos set ";
    	$consultaSql.="fecha = '".$this->param['param_fecha_salidat2']."',";
		$consultaSql.="cantidad = '".$this->param['param_cantidad_salidat2']."',";
		$consultaSql.="precioVenta = '".$this->param['param_precio_salidat2']."'";
		$consultaSql.=" where idMovimientos = '".$idusuario."' ";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);

		$consultaSql = "UPDATE stock set ";
    	$consultaSql.="stock = stock + (".$this->param['param_cantidad_salidat2_bk']."- ".$this->param['param_cantidad_salidat2']." )";
		$consultaSql.=" where iditem = '".$iditem."' and idTienda = 2;";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);
	}
  

}

 ?>


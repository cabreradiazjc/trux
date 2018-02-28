<?php 

include_once '../../model/conexion_model.php';

class Entrada_model{

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
			case "listar_entradat1";
				echo $this->listar_entradat1();
				break;
			case "listar_entradat2";
				echo $this->listar_entradat2();
				break;
			case "entradat1";
				echo $this->entradat1();
				break;
			case "update-entradat1";
				echo $this->update_entradat1();
				break;
			case "entradat2";
				echo $this->entradat2();
				break;
			case "update-entradat2";
				echo $this->update_entradat2();
				break;
			
		}
	}

	function prepararConsultaUsuario($opcion) 
	{
		$consultaSql = "call sp_control_inventario(";
		$consultaSql.="'".$opcion."')";
		//1echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }


	function listar_entradat1() {
    	$this->prepararConsultaUsuario('opc_listar_entradat1');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<tr>					
					<!-- <td style="width: 10%;">'.$row[0].'</td>	-->	
					<td style="width: 15%;">'.$row[1].'</td>
					<td style="width: 30%;">'.$row[2].'</td>
					<td style="width: 10%;">'.$row[3].'</td>
					<td style="width: 10%;">'.$row[4].'</td>
					<td style="width: 10%;">'.$row[5].'</td>
					<td style="width: 15%;">'.$row[6].'</td>
					<td style="width: 10%; text-align:center; direction:rtl;"> <a class="btn btn-primary btn-xs" onclick="entradat1('.$row[0].');"><i class="fa fa-edit fa-lg"></i></a></td>



				</tr>';
		}
	}

		function listar_entradat2() {
    	$this->prepararConsultaUsuario('opc_listar_entradat2');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<tr>					
					<!-- <td style="width: 10%;">'.$row[0].'</td>	-->	
					<td style="width: 15%;">'.$row[1].'</td>
					<td style="width: 30%;">'.$row[2].'</td>
					<td style="width: 10%;">'.$row[3].'</td>
					<td style="width: 10%;">'.$row[4].'</td>
					<td style="width: 10%;">'.$row[5].'</td>
					<td style="width: 15%;">'.$row[6].'</td>
					<td style="width: 10%; text-align:center; direction:rtl;"> <a class="btn btn-primary btn-xs" onclick="entradat2('.$row[0].');"><i class="fa fa-edit fa-lg"></i></a></td>



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



	function entradat1() {

		$opcion='opc_entradat1';
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

	function entradat2() {

		$opcion='opc_entradat2';
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


	function update_entradat1() {	

		$idusuario = $this->param['param_id'];
		$iditem = $this->param['param_iditem'];

    	$consultaSql = "UPDATE movimientos set ";
    	$consultaSql.="fecha = '".$this->param['param_fecha_entradat1']."',";
		$consultaSql.="cantidad = '".$this->param['param_cantidad_entradat1']."',";
		$consultaSql.="costoUnitario = '".$this->param['param_costo_entradat1']."'";
		$consultaSql.=" where idMovimientos = '".$idusuario."' ";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);

		$consultaSql = "UPDATE stock set ";
    	$consultaSql.="stock = stock - (".$this->param['param_cantidad_entradat1_bk']."- ".$this->param['param_cantidad_entradat1']." )";
		$consultaSql.=" where iditem = '".$iditem."' and idTienda = 1;";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);
	}


	function update_entradat2() {	

		$idusuario = $this->param['param_id2'];
		$iditem = $this->param['param_iditem2'];

    	$consultaSql = "UPDATE movimientos set ";
    	$consultaSql.="fecha = '".$this->param['param_fecha_entradat2']."',";
		$consultaSql.="cantidad = '".$this->param['param_cantidad_entradat2']."',";
		$consultaSql.="costoUnitario = '".$this->param['param_costo_entradat2']."'";
		$consultaSql.=" where idMovimientos = '".$idusuario."' ";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);

		$consultaSql = "UPDATE stock set ";
    	$consultaSql.="stock = stock - (".$this->param['param_cantidad_entradat2_bk']."- ".$this->param['param_cantidad_entradat2']." )";
		$consultaSql.=" where iditem = '".$iditem."' and idTienda = 2;";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);
	}




     function nuevo_usuarios() {	

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

  

}

 ?>


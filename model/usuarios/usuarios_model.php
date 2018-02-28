<?php 

include_once '../../model/conexion_model.php';

class Usuarios_model{

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
			case "listar_usuarios";
				echo $this->listar_usuarios();
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
			case "reset";
				echo $this->reset();
				break;
			case "changepassword";
				echo $this->changepassword();
				break;
			
		}
	}

	function prepararConsultaUsuario($opcion) 
	{
		$consultaSql = "call sp_control_usuarios(";
		$consultaSql.="'".$opcion."','')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }


	function listar_usuarios() {
    	$this->prepararConsultaUsuario('opc_usuarios_listar');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<tr>					
					<!--<td style="width: 10%;">'.$row[0].'</td>	-->				
					<td style="width: 20%;">'.$row[1].' '.$row[2].' '.$row[3].'</td>
					<td style="width: 15%;">'.$row[4].'</td>
					<td style="width: 10%;">'.$row[5].'</td>
					<td style="width: 10%;">'.$row[6].'</td>
					<td style="width: 10%;">'.$row[7].'</td>
					<td style="width: 15%;">'.$row[8].'</td>
					<td style="width: 20%; text-align:center; direction:rtl;"> <a class="btn btn-primary btn-xs" onclick="editar('.$row[0].');"><i class="fa fa-edit fa-lg"></i></a>  <a class="btn btn-warning btn-xs" onclick="reset('.$row[0].');"><i class="fa fa-refresh fa-lg"></i></a>  <a class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg" onclick="eliminar('.$row[0].');"></i></a>  </td>

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

	function reset() {
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
		$clave = md5($this->param['param_usuario']);
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

    function changepassword() 

	{	
		$idusuario = $this->param['param_idusuario'];
		$clave = md5($this->param['param_clave1']);
		//echo $clave;
		

    	$consultaSql = "UPDATE usuario set ";
    	$consultaSql.="clave = '".$clave."' ";
		$consultaSql.="where idusuario = '".$idusuario."' ";

		//echo $consultaSql;
		mysqli_query($this->conexion,$consultaSql);

    }

  

}

 ?>


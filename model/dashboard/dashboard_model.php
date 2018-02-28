<?php 

include_once '../../model/conexion_model.php';

class Dashboard_model{

	private $param = array();
	private $conexion = null;
	private $result = null;
	private $result2 = null;
	private $result3 = null;

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
			case "espaciosChart";
				echo $this->espaciosChart();
				break;

			case "chartAperturabt";
				echo $this->chartAperturabt();
				break;

			case "chartt1";
				echo $this->chartt1();
				break;
			case "chartt2";
				echo $this->chartt2();
				break;

			case "listar_stock";
				echo $this->listarStock();
				break;
			
			case "nroSalidas";
				echo $this->nroSalidas();
				break;

			case "stockOut";
				echo $this->stockOut();
				break;

			case "stockCritico";
				echo $this->stockCritico();
				break;
		}
	}

	function prepararConsultaUsuario($opcion) 

	{
		$consultaSql = "call sp_control_dashboard(";
		$consultaSql.="'".$opcion."')";
		//echo $consultaSql;	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }


    function listarStock() {
    	$this->prepararConsultaUsuario('opc_listar_stock');   


    	while($row = mysqli_fetch_row($this->result)){

    		$dif = $row[6];

    		switch($dif)
			{
				case 0;
					$row2="<span class='label label-danger'> DANGER (".$row[6].")</span>";
					break;
				case 1;
					$row2="<span class='label label-warning'> WARNING (".$row[6].")</span>";
					break;
				default:
					$row2="<span class='label label-success'> ZOK (".$row[6].")</span>";
			};
    		
			echo '<tr>					
					<td style="font-size: 12px; width: 5%;">'.$row[0].'</td>		
					<td style="font-size: 12px; width: 20%;">'.$row[1].'</td>
					<td style="font-size: 12px; width: 10%;">'.$row[2].'</td>
					<td style="font-size: 12px; width: 10%;">'.$row[3].'</td>
					<td style="font-size: 12px; width: 5%;">'.$row[4].'</td>
					<td style="font-size: 12px; width: 10%;">'.$row[5].'</td>
					<td style="font-size: 12px; width: 10%;">'.$row2.'</td>
					
				</tr>';
		}
	}

    
    function nroSalidas() {
    	$this->prepararConsultaUsuario('opc_nroSalidas');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			/*echo '<div class="inner">
                  <h3>'.$row[0].'</h3>
                  <p>Última apertura de BT</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-unlocked-outline"></i>
                </div>
                <a href="view/bitacoras/aperturabt.php" class="small-box-footer">
                 <i class="fa fa-info-circle"></i> Después de Carteras 2 
                </a>';*/

            echo '
	            <div class="inner">
	            <h3>'.$row[0].'</h3>
	            <p>Salidas éste mes</p>
	            </div>
	            <div class="icon">
	            <i class="ion ion-bag"></i>
	            </div>
	            <a href="view/inventario/salida.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i>
	            </a>
	        ';
		}
	}


	function stockOut() {
    	$this->prepararConsultaUsuario('opc_stockOut');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<div class="inner">
              <h3>El más vendido<sup style="font-size: 20px"></sup></h3>

              <p>'.$row[0].'</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="view/inventario/inventario_admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>';
		}
	}

	function stockCritico() {
    	$this->prepararConsultaUsuario('opc_stockCritico');    	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<div class="inner">
                  <h3>'.$row[0].'</h3>
                  <p>Última apertura de BT</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-unlocked-outline"></i>
                </div>
                <a href="view/bitacoras/aperturabt.php" class="small-box-footer">
                 <i class="fa fa-info-circle"></i> Después de Carteras 2 
                </a>';
		}
	}


	function chartt1() {
		$jsonArray = array();
		$consultaSql = "call sp_control_dashboard('opc_chartt1')";
		//echo $consultaSql;
		$this->result2 = mysqli_query($this->conexion,$consultaSql);

    	  while($row = $this->result2->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['fecha'] = $row['fecha'];
		    $jsonArrayItem['hora'] = $row['hora'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }

		 //set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);
	}

	function chartt2() {
		$jsonArray = array();
		$consultaSql = "call sp_control_dashboard('opc_chartt2')";
		//echo $consultaSql;
		$this->result3 = mysqli_query($this->conexion,$consultaSql);

    	  while($row = $this->result3->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['fecha'] = $row['fecha'];
		    $jsonArrayItem['hora'] = $row['hora'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }

		 //set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);
	}


function chartAperturabt() {
		$jsonArray = array();
		$consultaSql = "call sp_control_dashboard('opc_chartAperturabt')";
		//echo $consultaSql;
		$this->result2 = mysqli_query($this->conexion,$consultaSql);

    	  while($row = $this->result2->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['fecha'] = $row['fecha'];
		    $jsonArrayItem['hora'] = $row['hora'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }

		 //set the response content type as JSON
		header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);
	}



	function nuevo_ac() {
		
		$consultaSql = "INSERT INTO ac_espacios(ac_fecha,ac_24,ac_31,ac_38,ac_127,ac_tedbprod,ac_tecyber) VALUES (";
		$consultaSql.="'".$this->param['param_ac_fecha']."',";
		$consultaSql.="'".$this->param['param_ac_24']."',";
		$consultaSql.="'".$this->param['param_ac_31']."',";
		$consultaSql.="'".$this->param['param_ac_38']."',";
		$consultaSql.="'".$this->param['param_ac_127']."',";
		$consultaSql.="'".$this->param['param_ac_tedbprod']."',";
		$consultaSql.="'".$this->param['param_ac_tecyber']."')";


		//echo $estado;
		//echo $consultaSql;	// FALTA VER AKI EL REGISTRO PREGUNTAR A MILUSKA	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }

    function nuevo_dc() {
		
		$consultaSql = "INSERT INTO dc_espacios(dc_fecha,dc_24,dc_31,dc_38,dc_127,dc_tedbprod,dc_tecyber) VALUES (";
		$consultaSql.="'".$this->param['param_dc_fecha']."',";
		$consultaSql.="'".$this->param['param_dc_24']."',";
		$consultaSql.="'".$this->param['param_dc_31']."',";
		$consultaSql.="'".$this->param['param_dc_38']."',";
		$consultaSql.="'".$this->param['param_dc_127']."',";
		$consultaSql.="'".$this->param['param_dc_tedbprod']."',";
		$consultaSql.="'".$this->param['param_dc_tecyber']."')";

		//echo $estado;
		//echo $consultaSql;	// FALTA VER AKI EL REGISTRO PREGUNTAR A MILUSKA	
		$this->result = mysqli_query($this->conexion,$consultaSql);
    }


  

	function mostrarUsuario() {
    	$this->prepararEditarUsuario('opc_usuario_mostrar');    	
    	$row = mysqli_fetch_row($this->result);
		echo json_encode($row);
		
	}



//REPORTES

/*
	function consultarln() {
    	$this->prepararRegistroUsuario('opc_ln_consultar');  	
    	while($row = mysqli_fetch_row($this->result)){
    		
			echo '<tr>					
					<td style="font-size: 12px; height: 10px; width: 4%;">'.$row[0].'</td>					
					<td style="font-size: 12px; height: 10px; width: 15%;">'.$row[1].'</td>
					<td style="font-size: 12px; height: 10px; width: 25%;">'.$row[2].'</td>
					<td style="font-size: 12px; height: 10px; width: 10%;">'.$row[3].'</td>
					<td style="font-size: 12px; height: 10px; width: 15%;">'.$row[4].'</td>
					<td style="font-size: 12px; height: 10px; width: 10%;">'.$row[5].'</td>
					<td style="font-size: 12px; height: 10px; width: 15%;">'.$row[6].'</td>
				</tr>';
		}
	}

*/


}

 ?>


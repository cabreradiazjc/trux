<?php 
session_start();
include_once '../../model/inventario/entrada_model.php';

$param = array();



$param['param_opcion']='';
if (isset($_POST['param_opcion']))
    $param['param_opcion'] = $_POST['param_opcion'];



$param['param_idusuario']=0;
if (isset($_SESSION['param_idusuario']))
    $param['param_idusuario'] = $_SESSION['param_idusuario'];



//Entrada T1

$param['param_iditem']=0;
if (isset($_POST['param_iditem']))
    $param['param_iditem'] = $_POST['param_iditem'];

$param['param_id']='';
if (isset($_POST['param_id']))
    $param['param_id'] = $_POST['param_id'];

$param['param_fecha_entradat1']='';
if (isset($_POST['param_fecha_entradat1']))
    $param['param_fecha_entradat1'] = $_POST['param_fecha_entradat1'];


$param['param_cantidad_entradat1']='';
if (isset($_POST['param_cantidad_entradat1']))
    $param['param_cantidad_entradat1'] = $_POST['param_cantidad_entradat1'];


$param['param_cantidad_entradat1_bk']='';
if (isset($_POST['param_cantidad_entradat1_bk']))
    $param['param_cantidad_entradat1_bk'] = $_POST['param_cantidad_entradat1_bk'];



$param['param_costo_entradat1'] = '';
if (isset($_POST['param_costo_entradat1']))
    $param['param_costo_entradat1'] = $_POST['param_costo_entradat1'];


$param['param_item_entradat1'] = '';
if (isset($_POST['param_item_entradat1']))
    $param['param_item_entradat1'] = $_POST['param_item_entradat1'];


//ENTRADA T2


$param['param_fecha_entradat2']='';
if (isset($_POST['param_fecha_entradat2']))
    $param['param_fecha_entradat2'] = $_POST['param_fecha_entradat2'];


$param['param_cantidad_entradat2']='';
if (isset($_POST['param_cantidad_entradat2']))
    $param['param_cantidad_entradat2'] = $_POST['param_cantidad_entradat2'];


$param['param_cantidad_entradat2_bk']='';
if (isset($_POST['param_cantidad_entradat2_bk']))
    $param['param_cantidad_entradat2_bk'] = $_POST['param_cantidad_entradat2_bk'];



$param['param_costo_entradat2'] = '';
if (isset($_POST['param_costo_entradat2']))
    $param['param_costo_entradat2'] = $_POST['param_costo_entradat2'];


$param['param_item_entradat2'] = '';
if (isset($_POST['param_item_entradat2']))
    $param['param_item_entradat2'] = $_POST['param_item_entradat1'];


$param['param_iditem2']=0;
if (isset($_POST['param_iditem2']))
    $param['param_iditem2'] = $_POST['param_iditem2'];


$param['param_id2']='';
if (isset($_POST['param_id2']))
    $param['param_id2'] = $_POST['param_id2'];

$Entrada = new Entrada_model();
echo $Entrada->gestionar($param);


 ?>
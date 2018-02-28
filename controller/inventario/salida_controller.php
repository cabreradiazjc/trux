<?php 
session_start();
include_once '../../model/inventario/salida_model.php';

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

$param['param_fecha_salidat1']='';
if (isset($_POST['param_fecha_salidat1']))
    $param['param_fecha_salidat1'] = $_POST['param_fecha_salidat1'];


$param['param_cantidad_salidat1']='';
if (isset($_POST['param_cantidad_salidat1']))
    $param['param_cantidad_salidat1'] = $_POST['param_cantidad_salidat1'];


$param['param_cantidad_salidat1_bk']='';
if (isset($_POST['param_cantidad_salidat1_bk']))
    $param['param_cantidad_salidat1_bk'] = $_POST['param_cantidad_salidat1_bk'];



$param['param_precio_salidat1'] = '';
if (isset($_POST['param_precio_salidat1']))
    $param['param_precio_salidat1'] = $_POST['param_precio_salidat1'];


$param['param_item_salidat1'] = '';
if (isset($_POST['param_item_salidat1']))
    $param['param_item_salidat1'] = $_POST['param_item_salidat1'];


//ENTRADA T2


$param['param_fecha_salidat2']='';
if (isset($_POST['param_fecha_salidat2']))
    $param['param_fecha_salidat2'] = $_POST['param_fecha_salidat2'];


$param['param_cantidad_salidat2']='';
if (isset($_POST['param_cantidad_salidat2']))
    $param['param_cantidad_salidat2'] = $_POST['param_cantidad_salidat2'];


$param['param_cantidad_salidat2_bk']='';
if (isset($_POST['param_cantidad_salidat2_bk']))
    $param['param_cantidad_salidat2_bk'] = $_POST['param_cantidad_salidat2_bk'];



$param['param_precio_salidat2'] = '';
if (isset($_POST['param_precio_salidat2']))
    $param['param_precio_salidat2'] = $_POST['param_precio_salidat2'];


$param['param_item_salidat2'] = '';
if (isset($_POST['param_item_salidat2']))
    $param['param_item_salidat1'] = $_POST['param_item_salidat2'];


$param['param_iditem2']=0;
if (isset($_POST['param_iditem2']))
    $param['param_iditem2'] = $_POST['param_iditem2'];


$param['param_id2']='';
if (isset($_POST['param_id2']))
    $param['param_id2'] = $_POST['param_id2'];










$Salida = new Salida_model();
echo $Salida->gestionar($param);


 ?>
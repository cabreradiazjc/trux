<?php 
session_start();
include_once '../../model/inventario/inventario_admin_model.php';

$param = array();




$param['param_opcion']='';
if (isset($_POST['param_opcion']))
    $param['param_opcion'] = $_POST['param_opcion'];





$param['param_id_usuario']='';
if (isset($_POST['param_id_usuario']))
    $param['param_id_usuario'] = $_POST['param_id_usuario'];

$param['param_id']='';
if (isset($_POST['param_id']))
    $param['param_id'] = $_POST['param_id'];


$param['param_id_edit']='';
if (isset($_POST['param_id_edit']))
    $param['param_id_edit'] = $_POST['param_id_edit'];


$param['param_codigo']='';
if (isset($_POST['param_codigo']))
    $param['param_codigo'] = $_POST['param_codigo'];


$param['param_descripcion']='';
if (isset($_POST['param_descripcion']))
    $param['param_descripcion'] = $_POST['param_descripcion'];


$param['param_unidad'] = '';
if (isset($_POST['param_unidad']))
    $param['param_unidad'] = $_POST['param_unidad'];


$param['param_costounitario'] = '';
if (isset($_POST['param_costounitario']))
    $param['param_costounitario'] = $_POST['param_costounitario'];

$param['param_precioventa'] = '';
if (isset($_POST['param_precioventa']))
    $param['param_precioventa'] = $_POST['param_precioventa'];


$param['param_stockminimo'] = '';
if (isset($_POST['param_stockminimo']))
    $param['param_stockminimo'] = $_POST['param_stockminimo'];


//EDIT

$param['param_codigo_edit']='';
if (isset($_POST['param_codigo_edit']))
    $param['param_codigo_edit'] = $_POST['param_codigo_edit'];


$param['param_descripcion_edit']='';
if (isset($_POST['param_descripcion_edit']))
    $param['param_descripcion_edit'] = $_POST['param_descripcion_edit'];


$param['param_unidad_edit'] = '';
if (isset($_POST['param_unidad_edit']))
    $param['param_unidad_edit'] = $_POST['param_unidad_edit'];


$param['param_costounitario_edit'] = '';
if (isset($_POST['param_costounitario_edit']))
    $param['param_costounitario_edit'] = $_POST['param_costounitario_edit'];

$param['param_precioventa_edit'] = '';
if (isset($_POST['param_precioventa_edit']))
    $param['param_precioventa_edit'] = $_POST['param_precioventa_edit'];


$param['param_stockminimo_edit'] = '';
if (isset($_POST['param_stockminimo_edit']))
    $param['param_stockminimo_edit'] = $_POST['param_stockminimo_edit'];




//ENTRADA


$param['param_fecha_entrada']='';
if (isset($_POST['param_fecha_entrada']))
    $param['param_fecha_entrada'] = $_POST['param_fecha_entrada'];


$param['param_cantidad_entrada']='';
if (isset($_POST['param_cantidad_entrada']))
    $param['param_cantidad_entrada'] = $_POST['param_cantidad_entrada'];


$param['param_costounitario_entrada'] = '';
if (isset($_POST['param_costounitario_entrada']))
    $param['param_costounitario_entrada'] = $_POST['param_costounitario_entrada'];


$param['param_id_item'] = '';
if (isset($_POST['param_id_item']))
    $param['param_id_item'] = $_POST['param_id_item'];

$param['param_idusuario'] = '';
if (isset($_POST['param_idusuario']))
    $param['param_idusuario'] = $_POST['param_idusuario'];


$param['param_tienda'] = '';
if (isset($_POST['param_tienda']))
    $param['param_tienda'] = $_POST['param_tienda'];





$Inventario = new Inventario_model();
echo $Inventario->gestionar($param);


 ?>
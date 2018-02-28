<?php 
session_start();
include_once '../../model/inventario/inventario_model.php';

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



//USER



$param['param_usuario']='';
if (isset($_POST['param_usuario']))
    $param['param_usuario'] = $_POST['param_usuario'];


$param['param_clave']='';
if (isset($_POST['param_clave']))
    $param['param_clave'] = md5($_POST['param_clave']);


$param['param_nombres'] = 1;
if (isset($_POST['param_nombres']))
    $param['param_nombres'] = $_POST['param_nombres'];


$param['param_appaterno'] = '';
if (isset($_POST['param_appaterno']))
    $param['param_appaterno'] = $_POST['param_appaterno'];

$param['param_apmaterno'] = '';
if (isset($_POST['param_apmaterno']))
    $param['param_apmaterno'] = $_POST['param_apmaterno'];


$param['param_email'] = '';
if (isset($_POST['param_email']))
    $param['param_email'] = $_POST['param_email'];

$param['param_celular'] = '';
if (isset($_POST['param_celular']))
    $param['param_celular'] = $_POST['param_celular'];


$param['param_dni'] = '';
if (isset($_POST['param_dni']))
    $param['param_dni'] = $_POST['param_dni'];

$param['param_idtipo'] = '';
if (isset($_POST['param_idtipo']))
    $param['param_idtipo'] = $_POST['param_idtipo'];



//SALIDA



//SALIDA


$param['param_fecha_salida']='';
if (isset($_POST['param_fecha_salida']))
    $param['param_fecha_salida'] = $_POST['param_fecha_salida'];


$param['param_cantidad_salida']='';
if (isset($_POST['param_cantidad_salida']))
    $param['param_cantidad_salida'] = $_POST['param_cantidad_salida'];


$param['param_precioventa_salida'] = '';
if (isset($_POST['param_precioventa_salida']))
    $param['param_precioventa_salida'] = $_POST['param_precioventa_salida'];


$param['param_id_item'] = '';
if (isset($_POST['param_id_item']))
    $param['param_id_item'] = $_POST['param_id_item'];

$param['param_idusuario'] = '';
if (isset($_POST['param_idusuario']))
    $param['param_idusuario'] = $_POST['param_idusuario'];


$param['param_tienda'] = '';
if (isset($_POST['param_tienda']))
    $param['param_tienda'] = $_POST['param_tienda'];


$param['param_placa'] = '';
if (isset($_POST['param_placa']))
    $param['param_placa'] = $_POST['param_placa'];







$Inventario = new Inventario_model();
echo $Inventario->gestionar($param);


 ?>
<?php 
session_start();
include_once '../../model/usuario/usuario_model.php';

$param = array();




$param['param_opcion']='';
if (isset($_POST['param_opcion']))
    $param['param_opcion'] = $_POST['param_opcion'];


$param['param_idusuario']=0;
if (isset($_SESSION['param_idusuario']))
    $param['param_idusuario'] = $_SESSION['param_idusuario'];



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


$Usuario = new Usuario_model();
echo $Usuario->gestionar($param);


 ?>
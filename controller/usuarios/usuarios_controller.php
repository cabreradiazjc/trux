<?php 
session_start();
include_once '../../model/usuarios/usuarios_model.php';

$param = array();
$param['param_opcion']='';
if (isset($_POST['param_opcion']))
    $param['param_opcion'] = $_POST['param_opcion'];

$param['param_idusuario']='';
if (isset($_POST['param_idusuario']))
    $param['param_idusuario'] = $_POST['param_idusuario']; 



//GUARDAR
$param['param_id']='';
if (isset($_POST['param_id']))
    $param['param_id'] = $_POST['param_id']; 

$param['param_usuario']='';
if (isset($_POST['param_usuario']))
    $param['param_usuario'] = $_POST['param_usuario']; 

$param['param_clave']='';
if (isset($_POST['param_clave']))
    $param['param_clave'] = $_POST['param_clave']; 

$param['param_clave1']='';
if (isset($_POST['param_clave1']))
    $param['param_clave1'] = $_POST['param_clave1']; 

$param['param_clave2']='';
if (isset($_POST['param_clave2']))
    $param['param_clave2'] = $_POST['param_clave2']; 

$param['param_nombres']='';
if (isset($_POST['param_nombres']))
    $param['param_nombres'] = $_POST['param_nombres']; 

$param['param_appaterno']='';
if (isset($_POST['param_appaterno']))
    $param['param_appaterno'] = $_POST['param_appaterno']; 

$param['param_apmaterno']='';
if (isset($_POST['param_apmaterno']))
    $param['param_apmaterno'] = $_POST['param_apmaterno']; 

$param['param_celular']='';
if (isset($_POST['param_celular']))
    $param['param_celular'] = $_POST['param_celular']; 

$param['param_email']='';
if (isset($_POST['param_email']))
    $param['param_email'] = $_POST['param_email']; 

$param['param_dni']='';
if (isset($_POST['param_dni']))
    $param['param_dni'] = $_POST['param_dni']; 

$param['param_idtipo']='';
if (isset($_POST['param_idtipo']))
    $param['param_idtipo'] = $_POST['param_idtipo']; 




//EDITAR
$param['param_id_edit']='';
if (isset($_POST['param_id_edit']))
    $param['param_id_edit'] = $_POST['param_id_edit']; 

$param['param_usuario_edit']='';
if (isset($_POST['param_usuario_edit']))
    $param['param_usuario_edit'] = $_POST['param_usuario_edit']; 

$param['param_clave_edit']='';
if (isset($_POST['param_clave_edit']))
    $param['param_clave_edit'] = $_POST['param_clave_edit']; 

$param['param_nombres_edit']='';
if (isset($_POST['param_nombres_edit']))
    $param['param_nombres_edit'] = $_POST['param_nombres_edit']; 

$param['param_appaterno_edit']='';
if (isset($_POST['param_appaterno_edit']))
    $param['param_appaterno_edit'] = $_POST['param_appaterno_edit']; 

$param['param_apmaterno_edit']='';
if (isset($_POST['param_apmaterno_edit']))
    $param['param_apmaterno_edit'] = $_POST['param_apmaterno_edit']; 

$param['param_celular_edit']='';
if (isset($_POST['param_celular_edit']))
    $param['param_celular_edit'] = $_POST['param_celular_edit']; 

$param['param_email_edit']='';
if (isset($_POST['param_email_edit']))
    $param['param_email_edit'] = $_POST['param_email_edit']; 

$param['param_dni_edit']='';
if (isset($_POST['param_dni_edit']))
    $param['param_dni_edit'] = $_POST['param_dni_edit']; 

$param['param_idtipo_edit']='';
if (isset($_POST['param_idtipo_edit']))
    $param['param_idtipo_edit'] = $_POST['param_idtipo_edit']; 



$Usuarios = new Usuarios_model();
echo $Usuarios->gestionar($param);


 ?>
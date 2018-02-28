<?php 
  
  session_start();
  if (isset($_SESSION['usuario']))
  {
    header("Location:../index.php");
  } else {
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TRUX | Racing Store</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

    <!-- Favicon -->
  <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background: #333;">
<div class="login-box">
  <div class="login-logo">
    <a style="color: white;"><h2><b>TRUX</b> Racing Store</h2></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

          <div class="row" >
         <div class="col-xs-12" style="text-align: center; direction: rtl;">
          <img src="../images/logo.png" height="120" width="320" align="center">
        </div>
      </div><br>
    <p class="login-box-msg">Por favor, inicie sesión</p> 

    <form action="../controller/usuario/usuario_controller.php" method="post">
      <div class="form-group has-feedback">
        <input class="form-control" placeholder="Usuario" name="param_usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="param_clave">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
<!--
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
            <label>
              <input type="checkbox"> Remember Me
            </label> 
          </div>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-12">
          <input type="hidden" value="login" name="param_opcion">
          <button type="submit"  class="btn btn-primary btn-block btn-flat" style="background: #333;">INICIAR SESIÓN</button>
        



        </div>


        <!-- /.col -->
      </div>
      <div class="row">
        
        <div class="social-auth-links text-center"> Sistema de Inventario - TRUX Racing Store <br> Todos los derechos reservados ® Trujillo - 2018</div>

      </div>

    </form>

    <!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->
<!--
    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>
-->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
<?php } ?>
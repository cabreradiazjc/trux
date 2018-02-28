<?php 
  date_default_timezone_set("America/Lima");
  session_start();
  if (!isset($_SESSION['usuario']))
  {
    header("Location:../../view/login.php");
  } else {

    switch ($_SESSION['idtipo']) {
      case "1":
        $home = '../../index.php';
        break;
      case "2":
        header("Location:../../view/inventario/inventario.php");
        $home = '../../view/inventario/inventario.php';
        break;
  }

?>


<!DOCTYPE html>
<html>
<head>
  <?php include_once("../../head.php"); ?>
</head>
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
   <?php include_once("../../header.php"); ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../images/logo-user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombres']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree" id="tree">
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USUARIOS
        <small>(Gestión de usuarios)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gestión de Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
      <input type="hidden" name="param_opcion" id="param_opcion" value="listarMenu">
      <input type="hidden" name="grupo" id="grupo" value="Administrador">
      <input type="hidden" name="tarea" id="tarea" value="Usuarios">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de Usuarios</h3>      
            </div>
            <!-- /.box-header -->
            <div class="box-body" >

              <table id="table_usuarios" class="table table-bordered table-striped" >
                
                <thead>
                <tr style="font-size: 11px;">
                  <!--<th>ID</th>-->
                  <th>NOMBRES</th>
                  <th>EMAIL</th>
                  <th>CELULAR</th>
                  <th>DNI</th>
                  <th>USUARIO</th>
                  <th>ROL</th>
                  <th>ACCIONES</th>

                </tr>
                </thead>

                <tbody id="body_usuarios">

                </tbody>

              </table>
           </div>
            <!-- /.box-body -->

            <div class="box-footer clearfix">
               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-nuevo-usuario">
                NUEVO REGISTRO
              </button>
              
            </div>


          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!--Modal-->

        <div class="modal fade" id="modal-nuevo-usuario" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">


              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Usuario</h4>
              </div>

              <div class="box-body" id="mensaje"></div>

              <div class="modal-body">

                 
              <form class="form-horizontal" id="frm_nuevo_usuarios" name="frm_nuevo_usuarios">

                    <!-- Usuario -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">Usuario:</label>

                  <div class="col-sm-9">
                    <input required type="text" class="form-control" placeholder="Usuario" name="param_usuario" id="param_usuario" ></input>
                  </div>
                </div>
                <!-- Fin Usuario -->

                <!-- Contraseña 
                <div class="form-group">
                  <label class="col-sm-3 control-label">Contraseña:</label>

                  <div class="col-sm-9">
                    <input type="password" class="form-control" placeholder="Contraseña" name="param_clave" id="param_clave" ></input>
                  </div>
                </div>
                 Fin Contraseña -->


                <!-- Nombres -->
                <div class="form-group">
                  <label required class="col-sm-3 control-label">Nombres:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nombres" name="param_nombres" id="param_nombres" ></input>
                  </div>
                </div>
                <!-- Fin Nombres -->

                <!-- Apellido Paterno -->
                <div class="form-group">
                  <label required class="col-sm-3 control-label">Apellido Paterno:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Apellido Paterno" name="param_appaterno" id="param_appaterno" ></input>
                  </div>
                </div>
                <!-- Fin Apellido Paterno -->

                <!-- Apellido Materno -->
                <div class="form-group">
                  <label required class="col-sm-3 control-label">Apellido Materno:</label>

                  <div class="col-sm-9">
                   <input type="text" class="form-control" placeholder="Apellido Materno" name="param_apmaterno" id="param_apmaterno" ></input>
                  </div>
                </div>
                <!-- Fin Apellido Materno -->

            
                <!-- Email -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email:</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" placeholder="Correo electrónico" name="param_email" id="param_email" ></input>
                  </div>
                </div>
                <!-- Fin Email -->


                <!-- Celular -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">Celular:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Celular" name="param_celular" id="param_celular" ></input>
                  </div>
                </div>
                <!-- Fin Celular -->


                <!-- DNI -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">DNI:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="DNI" name="param_dni" id="param_dni" ></input>
                  </div>
                </div>
                <!-- Fin DNI -->



                <!-- Combo box de TIPO de usuario -->
                           
                <div class="form-group">
                <label class="col-sm-3 control-label">Rol de usuario:</label>
                <div class="col-sm-9">
                  <select class="form-control" id="param_idtipo" name="param_idtipo">
                    <option>ADMINISTRADOR</option>
                    <option>VENDEDOR</option>
                  </select>
                </div>
                <!-- /.input group -->
                </div>
                <!-- FIn de combo box de TIPO de usuario -->


                
                <!-- FIn de Form -->
              
               
              </div>
              <!-- Fin modal body -->

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="nuevo_usuarios">Guardar</button>
              </div>


            </form>
            <!-- fin de Form -->

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <!--Fin Modal-->

      <!--Modal EDIT-->

        <div class="modal fade" id="modal-editar-usuarios" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">


              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Usuario</h4>
              </div>

              <div class="box-body" id="mensaje_edit"></div>

              <div class="modal-body">

                 
              <form class="form-horizontal" id="frm_editar_usuarios" name="frm_editar_usuarios">

                    <!-- Usuario -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">Usuario:</label>

                  <div class="col-sm-9">
                    <input required type="text" class="form-control" placeholder="Usuario" name="param_usuario_edit" id="param_usuario_edit" ></input>
                  </div>
                </div>
                <!-- Fin Usuario -->

                <!-- Contraseña 
                <div class="form-group">
                  <label class="col-sm-3 control-label">Contraseña:</label>

                  <div class="col-sm-9">
                    <input required type="password" class="form-control" placeholder="Contraseña" name="param_clave_edit" id="param_clave_edit" ></input>
                  </div>
                </div>
                Fin Contraseña -->


                <!-- Nombres -->
                <div class="form-group">
                  <label required class="col-sm-3 control-label">Nombres:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nombres" name="param_nombres_edit" id="param_nombres_edit" ></input>
                  </div>
                </div>
                <!-- Fin Nombres -->

                <!-- Apellido Paterno -->
                <div class="form-group">
                  <label required class="col-sm-3 control-label">Apellido Paterno:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Apellido Paterno" name="param_appaterno_edit" id="param_appaterno_edit" ></input>
                  </div>
                </div>
                <!-- Fin Apellido Paterno -->

                <!-- Apellido Materno -->
                <div class="form-group">
                  <label required class="col-sm-3 control-label">Apellido Materno:</label>

                  <div class="col-sm-9">
                   <input type="text" class="form-control" placeholder="Apellido Materno" name="param_apmaterno_edit" id="param_apmaterno_edit" ></input>
                  </div>
                </div>
                <!-- Fin Apellido Materno -->

            
                <!-- Email -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email:</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" placeholder="Correo electrónico" name="param_email_edit" id="param_email_edit" ></input>
                  </div>
                </div>
                <!-- Fin Email -->


                <!-- Celular -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">Celular:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Celular" name="param_celular_edit" id="param_celular_edit" ></input>
                  </div>
                </div>
                <!-- Fin Celular -->


                <!-- DNI -->
                <div class="form-group">
                  <label class="col-sm-3 control-label">DNI:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="DNI" name="param_dni_edit" id="param_dni_edit" ></input>
                  </div>
                </div>
                <!-- Fin DNI -->



                <!-- Combo box de TIPO de usuario -->
                           
                <div class="form-group">
                <label class="col-sm-3 control-label">Rol de usuario:</label>
                <div class="col-sm-9">
                  <select class="form-control" id="param_idtipo_edit" name="param_idtipo_edit">
                    <option>ADMINISTRADOR</option>
                    <option>VENDEDOR</option>
                  </select>
                </div>
                <!-- /.input group -->
                </div>
                <!-- FIn de combo box de TIPO de usuario -->
                <input type="hidden" id="param_id_edit" name="param_id_edit">
                <!-- FIn de Form -->
              
               
              </div>
              <!-- Fin modal body -->

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="update-usuarios">Actualizar</button>
              </div>


            </form>
            <!-- fin de Form -->

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <!--Fin Modal-->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php include_once("../../footer.php"); ?>
  </footer>

</div>
<!-- ./wrapper -->
<?php include_once("../../foot.php"); ?>


<!-- JS -->
<!-- MENU -->
<script src="../../js/treemodulo_pages.js"></script>
<!-- Mantenedor -->
<script src="../../js/usuarios/usuarios_js.js"></script>

</body>
</html>
<?php } ?>
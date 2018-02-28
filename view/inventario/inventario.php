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
        //header("Location:../../view/inventario/inventario.php");
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
      <ul class="sidebar-menu" data-widget="tree" id="tree"></ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INVENTARIO
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ver Inventario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
      <input type="hidden" name="param_opcion" id="param_opcion" value="listarMenu">
      <input type="hidden" name="grupo" id="grupo" value="Gestión de Inventario">
      <input type="hidden" name="tarea" id="tarea" value="Inventario">


      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border">
 
              <h3 class="box-title">Lista de Inventario</h3>
              

            </div>
            <!-- /.box-header -->
            <div class="box-body" >

              <table id="table_inventario_admin" class="table table-bordered table-striped" >
                
                <thead>
                <tr style="font-size: 11px;">
                  <!--<th>ID</th>-->
                  <th>CÓDIGO</th>
                  <th>ITEM</th>
                  <th>PRECIO</th>
                  <th>UNIDAD</th>
                  <th>TIENDA 1</th>
                  <th>TIENDA 2</th>
                  <th>ACCIONES</th>
                  
                </tr>
                </thead>

                <tbody id="body_inventario_admin">

                </tbody>

              </table>
           </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

       <!--Modal salida-->
          <div class="modal fade" id="modal-salida_item" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">REGISTRAR SALIDA DE ITEM</h4>
                </div>
                <div class="box-body" id="mensaje_salida"></div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" id="frm_salida_item" name="frm_salida_item">
                   <!-- Fecha -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Fecha:</label>
                      <div class="date col-sm-9 ">
                        <input type="text" class="form-control" data-date-format='yyyy-mm-dd' id="param_fecha_salida" name="param_fecha_salida" value="<?php echo date('Y-m-d',strtotime('today')); ?>">
                      </div>
                      <!-- /.input group -->
                    </div>

                       <!-- CCantidad -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Cantidad:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Cantidad" name="param_cantidad_salida" id="param_cantidad_salida" ></input>
                      </div>
                    </div>
                    <!-- Fin Cantidad -->


                    <!-- Costo Unitario -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Precio Venta:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Precio de Venta Unitario" name="param_precioventa_salida" id="param_precioventa_salida" ></input>
                      </div>
                    </div>
                    <!-- Fin Costo Unitario -->


                    <!-- Descripción -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Descripción:</label>
                      <div class="col-sm-9">
                        <textarea disabled class="form-control"  name="param_descripcion_salida" id="param_descripcion_salida" ></textarea>
                      </div>
                    </div>
                    <!-- Fin Descripción -->

                    <!-- Combo box   -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nro. Tienda:</label>
                      <div class="col-sm-3">
                        <select class="form-control" id="param_tienda" name="param_tienda">
                          <option></option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                      <!-- /.input group -->
                      <label class="col-sm-3 control-label">Placa:</label>
                      <div class="date col-sm-3 ">
                        <input type="text" class="form-control" id="param_placa" name="param_placa" placeholder="opcional">
                      </div>
                    </div>
                    <!-- FIn de combo box -->
                  
                    <input type="hidden" name="param_id_usuario" id="param_id_usuario" value="<?php echo $_SESSION['idusuario']; ?>">
                    <input type="hidden" name="param_id_item" id="param_id_item"></input>
                    <!-- FIn de Form -->
                    
                    
                  </div>
                  <!-- Fin modal body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="salida-item">REGISTRAR</button>
                  </div>
                </form>
                <!-- fin de Form -->
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->   
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
<script src="../../js/inventario/inventario_js.js"></script>
   <script>
      $(function () {
          //Initialize Select2 Elements
          //$('.select2').select2()
          //Date picker
          $('#param_fecha_salida').datepicker({
              autoclose: true,
              dateFormat: 'yyyy-mm-dd'
          })


      })
    </script>
</body>
</html>


<?php } ?>
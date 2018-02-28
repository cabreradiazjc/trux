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
      <div class="content-wrapper" style="font-weight: lighter;">
        <section class="content-header">
          <h3 style="color: green;">
           <b>REGISTRO DE ENTRADAS </b>
          <!--<small style="color:#3c8dbc;">(Después de Carteras 2)</small>-->
          </h3>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Gestión de Inventario</a></li>
            <li class="active">Entrada</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content" >
          <input type="hidden" name="param_opcion" id="param_opcion" value="listarMenu">
          <input type="hidden" name="grupo" id="grupo" value="Movimientos">
          <input type="hidden" name="tarea" id="tarea" value="Entrada">
          
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-success"> 
                <!-- /.box-header -->
                <div class="box-body" >
                  <div class="col-md-12">
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active "><a href="#tab_1" data-toggle="tab"><b>TIENDA 1</b></a></li>
                        <li><a href="#tab_2" data-toggle="tab"><b>TIENDA 2</b></a></li> 
                        <!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
                      </ul>
                      <div class="tab-content">
                        <!-- TAB 1  -->
                        <div class="tab-pane active" id="tab_1">
                          <table id="table_entradat1" class="table table-bordered table-striped" >
                            <thead>
                              <tr style="font-size: 11px;">
                                <th>FECHA</th>
                                <th>ITEM</th>
                                <th>CANTIDAD</th>
                                <th>UNIDADES </th>
                                <th>COSTO</th>
                                <th>USUARIO</th>
                                <th>ACCIONES</th>
                              </tr>
                            </thead>
                            <tbody id="body_entradat1">
                            </tbody>
                          </table>
                          <BR>
                         
                        </div>
                        <!-- /.tab-pane -->
                        <!-- TAB 2 DESPUES DE LA CADENA -->
                        <div class="tab-pane" id="tab_2">
                          
                          <table id="table_entradat2" class="table table-bordered table-striped" >
                            
                            <thead>
                              <tr style="font-size: 11px;">
                                <th>FECHA</th>
                                <th>ITEM</th>
                                <th>CANTIDAD</th>
                                <th>UNIDADES </th>
                                <th>COSTO</th>
                                <th>USUARIO</th>
                                <th>ACCIONES</th>
                              </tr>
                            </thead>
                            <tbody id="body_entradat2">
                            </tbody>
                          </table>
                          <BR>
                         
                        </div>
                        <!-- /.tab-pane -->
                        
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div>
                  </div>
                  
                </div>
                <!-- /.box-body -->
               
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->



          <!--Modal Entrada T1-->
          <div class="modal fade" id="modal-entradat1" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">EDITAR ENTRADA <small> - TIENDA 1 </small> </h4>
                </div>
                <div class="box-body" id="mensaje_entradat1"></div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" id="frm_entradat1" name="frm_entradat1">
                    <!-- Fecha -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Fecha:</label>
                      <div class="date col-sm-9 ">
                        <input type="text" class="form-control pull-right" data-date-format='yyyy-mm-dd' id="param_fecha_entradat1" name="param_fecha_entradat1" value="<?php echo date('Y-m-d',strtotime('today')); ?>">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- Fin Fecha  -->

                     <!-- Item  -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Item: </label>
                      <div class="col-sm-9">
                        <input disabled type="text" class="form-control" name="param_item_entradat1" id="param_item_entradat1" >
                      </div>
                    </div>


                    <!-- Cantidad  -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Cantidad: </label>
                      <div class="col-sm-9">
                        <input type="number" step="0.5" class="form-control" name="param_cantidad_entradat1" id="param_cantidad_entradat1" >
                      </div>
                    </div>
                    <!-- Fin -->

                    <!-- Costo -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Costo Unitario: </label>
                      <div class="col-sm-9">
                        <input type="number" step="0.5" class="form-control" name="param_costo_entradat1" id="param_costo_entradat1" >
                      </div>
                    </div>
                    <!-- Fin  -->
                   
                   
                
                    <input type="hidden" id="param_id" name="param_id">
                    <input type="hidden" id="param_cantidad_entradat1_bk" name="param_cantidad_entradat1_bk">
                    <input type="hidden" id="param_iditem" name="param_iditem">
                  </div>
                  <!-- Fin modal body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="btn_entradat1">Actualizar</button>

                  </div>
                
                </form>
                <!-- fin de Form -->
                
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->


          <!--Modal Entrada T2-->
          <div class="modal fade" id="modal-entradat2" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">EDITAR ENTRADA <small> - TIENDA 1 </small> </h4>
                </div>
                <div class="box-body" id="mensaje_entradat2"></div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" id="frm_entradat2" name="frm_entradat2">
                    <!-- Fecha -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Fecha:</label>
                      <div class="date col-sm-9 ">
                        <input type="text" class="form-control pull-right" data-date-format='yyyy-mm-dd' id="param_fecha_entradat2" name="param_fecha_entradat2" value="<?php echo date('Y-m-d',strtotime('today')); ?>">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- Fin Fecha  -->

                     <!-- Item  -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Item: </label>
                      <div class="col-sm-9">
                        <input disabled type="text" class="form-control" name="param_item_entradat2" id="param_item_entradat2" >
                      </div>
                    </div>


                    <!-- Cantidad  -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Cantidad: </label>
                      <div class="col-sm-9">
                        <input type="number" step="0.5" class="form-control" name="param_cantidad_entradat2" id="param_cantidad_entradat2" >
                      </div>
                    </div>
                    <!-- Fin -->

                    <!-- Costo -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Costo Unitario: </label>
                      <div class="col-sm-9">
                        <input type="number" step="0.5" class="form-control" name="param_costo_entradat2" id="param_costo_entradat2" >
                      </div>
                    </div>
                    <!-- Fin  -->
                   
                   
                
                    <input type="hidden" id="param_id2" name="param_id2">
                    <input type="hidden" id="param_cantidad_entradat2_bk" name="param_cantidad_entradat2_bk">
                    <input type="hidden" id="param_iditem2" name="param_iditem2">
                  </div>
                  <!-- Fin modal body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="btn_entradat2">Actualizar</button>

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
    <script src="../../js/inventario/entrada_js.js"></script>
     <script>
      $(function () {
          //Initialize Select2 Elements
          //$('.select2').select2()
          //Date picker
          $('#param_fecha_entradat1').datepicker({
              autoclose: true,
              dateFormat: 'yyyy-mm-dd'
          })
          $('#param_fecha_entradat2').datepicker({
              autoclose: true,
              dateFormat: 'yyyy-mm-dd'
          })



      })
    </script>
  </body>
</html>
<?php } ?>
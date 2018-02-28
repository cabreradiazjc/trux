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
          INVENTARIO
          <small>(Gestión de inventario)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Gestión de Inventario</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content" >
          <input type="hidden" name="param_opcion" id="param_opcion" value="listarMenu">
          <input type="hidden" name="grupo" id="grupo" value="Administrador">
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
                        <th>COD.</th>
                        <th>DESCRIPCIÓN</th>
                        <th>COSTO</th>
                        <th>PRECIO</th>
                        <th>UNIDAD</th>
                        <th>TIENDA 1</th>
                        <th>TIENDA 2</th>
                        <th>MÍNIMO</th>
                        <th>ACCIONES</th>
                      </tr>
                    </thead>
                    <tbody id="body_inventario_admin">
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-nuevo-item">
                  NUEVO ITEM
                  </button>
                  
                </div>
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!--Modal Nuevo Item-->
          <div class="modal fade" id="modal-nuevo-item" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">NUEVO ITEM</h4>
                </div>
                <div class="box-body" id="mensaje_nuevo_item"></div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" id="frm_nuevo_item" name="frm_nuevo_item">
                    <!-- Código 
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Código:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Código" name="param_codigo" id="param_codigo" ></input>
                      </div>
                    </div>-->
                    <!-- Fin Código -->
                    <!-- Descripción -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Descripción:</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Descripción" name="param_descripcion" id="param_descripcion" ></textarea>
                      </div>
                    </div>
                    <!-- Fin Descripción -->
                    <!-- Combo box   -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Unidad:</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="param_unidad" name="param_unidad">
                          <option>UND</option>
                          <option>PAR</option>
                          <option>CAJA</option>
                          <option>ROLLO</option>
                          <option>METROS</option>
                          <option>OTROS</option>
                        </select>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- FIn de combo box -->
                    <!-- Costo Unitario -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Costo Unitario:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Costo Unitario" name="param_costounitario" id="param_costounitario" ></input>
                      </div>
                    </div>
                    <!-- Fin Costo Unitario -->
                    <!-- Precio Venta -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Precio Venta:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Precio Venta" name="param_precioventa" id="param_precioventa" ></input>
                      </div>
                    </div>
                    <!-- Fin Precio Venta-->
                    <!--Stock Minimo -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Stock Minimo:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder=Stock Minimo" name="param_stockminimo" id="param_stockminimo" ></input>
                      </div>
                    </div>
                    <!-- Fin Stock Minimo -->
                    
                    <!-- FIn de Form -->
                    
                    
                  </div>
                  <!-- Fin modal body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="nuevo_item">Guardar</button>
                  </div>
                </form>
                <!-- fin de Form -->
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->



           <!--Modal Editar Item-->
          <div class="modal fade" id="modal-editar_item" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">EDITAR ITEM</h4>
                </div>
                <div class="box-body" id="mensaje_edit"></div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" id="frm_editar_item" name="frm_editar_item">
                    <!-- Código 
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Código:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Código" name="param_codigo" id="param_codigo" ></input>
                      </div>
                    </div>-->
                    <!-- Fin Código -->
                    <!-- Descripción -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Descripción:</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" placeholder="Descripción" name="param_descripcion_edit" id="param_descripcion_edit" ></textarea>
                      </div>
                    </div>
                    <!-- Fin Descripción -->
                    <!-- Combo box   -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Unidad:</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="param_unidad_edit" name="param_unidad_edit">
                          <option>UND</option>
                          <option>PAR</option>
                          <option>CAJA</option>
                          <option>ROLLO</option>
                          <option>METROS</option>
                          <option>OTROS</option>
                        </select>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- FIn de combo box -->
                    <!-- Costo Unitario -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Costo Unitario:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Costo Unitario" name="param_costounitario_edit" id="param_costounitario_edit" ></input>
                      </div>
                    </div>
                    <!-- Fin Costo Unitario -->
                    <!-- Precio Venta -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Precio Venta:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Precio Venta" name="param_precioventa_edit" id="param_precioventa_edit" ></input>
                      </div>
                    </div>
                    <!-- Fin Precio Venta-->
                    <!--Stock Minimo -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Stock Minimo:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Stock Minimo" name="param_stockminimo_edit" id="param_stockminimo_edit" ></input>
                      </div>
                    </div>
                    <!-- Fin Stock Minimo -->
                      <input type="hidden" name="param_id_edit" id="param_id_edit" ></input>
                    <!-- FIn de Form -->
                    
                    
                  </div>
                  <!-- Fin modal body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="update-item">Actualizar</button>
                  </div>
                </form>
                <!-- fin de Form -->
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->



           <!--Modal Entrada-->
          <div class="modal fade" id="modal-entrada_item" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">REGISTRAR ENTRADA DE ITEM</h4>
                </div>
                <div class="box-body" id="mensaje_entrada"></div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" id="frm_entrada_item" name="frm_entrada_item">
                   <!-- Fecha -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Fecha:</label>
                      <div class="date col-sm-9 ">
                        <input type="text" class="form-control" data-date-format='yyyy-mm-dd' id="param_fecha_entrada" name="param_fecha_entrada" value="<?php echo date('Y-m-d',strtotime('today')); ?>">
                      </div>
                      <!-- /.input group -->
                    </div>

                       <!-- CCantidad -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Cantidad:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Cantidad" name="param_cantidad_entrada" id="param_cantidad_entrada" ></input>
                      </div>
                    </div>
                    <!-- Fin Cantidad -->


                        <!-- Costo Unitario -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Costo Unitario:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Costo Unitario" name="param_costounitario_entrada" id="param_costounitario_entrada" ></input>
                      </div>
                    </div>
                    <!-- Fin Costo Unitario -->


                    <!-- Descripción -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Descripción:</label>
                      <div class="col-sm-9">
                        <textarea disabled class="form-control"  name="param_descripcion_entrada" id="param_descripcion_entrada" ></textarea>
                      </div>
                    </div>
                    <!-- Fin Descripción -->
                    <!-- Combo box   -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nro. Tienda:</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="param_tienda" name="param_tienda">
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- FIn de combo box -->
                  
                    <input type="hidden" name="param_id_usuario" id="param_id_usuario" value="<?php echo $_SESSION['idusuario']; ?>">
                    <input type="hidden" name="param_id_item" id="param_id_item"></input>
                    <!-- FIn de Form -->
                    
                    
                  </div>
                  <!-- Fin modal body -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="entrada-item">REGISTRAR</button>
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
    <script src="../../js/inventario/inventario_admin_js.js"></script>

    <script>
      $(function () {
          //Initialize Select2 Elements
          //$('.select2').select2()
          //Date picker
          $('#param_fecha_entrada').datepicker({
              autoclose: true,
              dateFormat: 'yyyy-mm-dd'
          })


      })
    </script>





  </body>
</html>
<?php } ?>
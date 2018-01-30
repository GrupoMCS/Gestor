<?php
    require 'header.php';
?>  
<!-- Todo el contenido de nuestra pagina -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <section class="content-header">
    <h1>
      Sucursales
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Principal</a></li>
      <li class="active">Sucursales</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="box box-default">
              <div class="box-header with-border" data-widget="collapse">
                    <h1 class="box-title">Sucursales <button class="btn btn-success" id="btnagregarSucursales" onclick="mostrarformSucursales(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                  <!--<div class="box-tools pull-right">
                    <i class="fa fa-minus pull-right"></i>
                  </div>-->
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body" id="listadoregistrosSucursales">
                  <table id="tbllistadoSucursales" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th>Opciones</th>
                      <th>Sucursal</th>
                      <th>Telefono</th>
                      
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                      <th>Opciones</th>
                      <th>Sucursal</th>
                      <th>Telefono</th>
                      
                    </tfoot>
                  </table>
              </div>
              <div class="panel-body" id="formularioregistrosSucursales">
                  <form name="formularioSucursales" id="formularioSucursales" method="POST">
                    <div class="form-group ">
                      <label for="">Nombre de tipo de Estado: </label>
                      <input type="hidden" name="idsucursal" id="idsucursal">
                      <input type="text" name="nombre" class="form-control" id="nombre" maxlength="45" placeholder="Nombre de la sucursal" required>
                      <label for="">Telefono: </label>
                      <input type="text" name="telefono" class="form-control" id="telefono" maxlength="10" placeholder="Telefono de contacto">
                    </div>
                    <div class="form-group" >
                      <button class="btn btn-primary" type="submit" id="btnGuardarSucursales"><i class="fa fa-save"></i> Guardar</button>
                      <button class="btn btn-danger" type="button" onclick="cancelarformSucursales()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                    </div>
                  </form>
              </div>
              <div class="panel-body" id="formularioregistrosDirSucursales">
                  <form name="formularioDirSucursales" id="formularioDirSucursales" method="POST">
                    <div class="form-group ">
                      <label for="">Direccion: </label>
                      <input type="hidden" name="iddireccion" id="iddireccion">
                      <input type="text" name="calle" class="form-control" id="calle" maxlength="45" placeholder="Calle" required>
                      <label for="">Numero Exterior: </label>
                      <input type="text" name="numext" class="form-control" id="numext" maxlength="10" placeholder="Numero Exterior">
                    </div>
                    <div class="form-group" >
                      <button class="btn btn-primary" type="submit" id="btnGuardarDirSucursales"><i class="fa fa-save"></i> Guardar</button>
                      <button class="btn btn-danger" type="button" onclick="cancelarformDirSucursales()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                    </div>
                  </form>
              </div>
              <!--Fin centro -->
        </div><!-- /.col -->
    </div><!-- /.row -->
  </section>
    
  </div>
  <!-- /.content-wrapper -->

<!-- Fin de todo el contenido de nuestra pagina -->

<?php
    require 'footer.php';
?>  
<script type="text/javascript" src="scripts/sucursal.js"></script>
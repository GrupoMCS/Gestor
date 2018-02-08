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
                    <div class="form-group">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="nombre">Nombre de la sucursal: </label>
                        <input type="hidden" name="idsucursal" id="idsucursal">
                        <input type="text" name="nombre" class="form-control" id="nombre" maxlength="45" placeholder="Nombre de la sucursal" required>
                        <label for="colonia">Colonia: </label>
                        <input type="text" name="colonia" class="form-control" id="colonia" maxlength="45" placeholder="Colonia">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="telefono">Telefono de contacto: </label>
                        <input type="text" name="telefono" class="form-control" id="telefono" maxlength="10" placeholder="Telefono de contacto">
                        <label for="calle">Calle: </label>
                        <input type="text" name="calle" class="form-control" id="calle" maxlength="45" placeholder="Nombre de la calle">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="numint">Num. Int.:</label>
                        <input type="text" name="numint" class="form-control" id="numint" maxlength="3" placeholder="Num. Int.">
                        <label for="cp">C.P.: </label>
                        <input type="text" name="cp" class="form-control" id="cp" maxlength="10" placeholder="Codigo Postal">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <label for="numext">Num. Ext.: </label>
                        <input type="text" name="numext" class="form-control" id="numext" maxlength="3" placeholder="Num. Ext.">
                        <label for="">Pais: </label>
                        <input type="text" name="pais" class="form-control" id="pais" maxlength="45" placeholder="Pais">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="estado">Estado: </label>
                        <input type="text" name="estado" class="form-control" id="estado" maxlength="45" placeholder="Estado">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="municipio">Municipio: </label>
                        <input type="text" name="municipio" class="form-control" id="municipio" maxlength="45" placeholder="Municipio">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                        <button class="btn btn-primary" type="submit" id="btnGuardarSucursales"><i class="fa fa-save"></i> Guardar</button>
                        <button class="btn btn-danger" type="button" onclick="cancelarformSucursales()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                      </div>
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
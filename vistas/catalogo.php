<?php
    require 'header.php';
?>  
<!-- Todo el contenido de nuestra pagina -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <section class="content-header">
    <h1>
      Catalogos del Sistema
      <small>Catalogos usados en los formularios del Gestor de Proyectos</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Principal</a></li>
      <li class="active">Catalogos</li>
    </ol>
  </section>

  <section class="content">
    <!-- Catalogo tipo de persona-->
    <div class="row container">
        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <div class="box box-default">
              <div class="box-header with-border" data-widget="collapse">
                    <h1 class="box-title">Catalogo: Tipo de Persona <button class="btn btn-success" id="btnagregarTpersona" onclick="mostrarformTPersona(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                  <!--<div class="box-tools pull-right">
                    <i class="fa fa-minus pull-right"></i>
                  </div>-->
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body" id="listadoregistrosTPersona">
                  <table id="tbllistadoTPersona" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th>Opciones</th>
                      <th>Tipos de Estado</th>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                      <th>Opciones</th>
                      <th>Tipos de Estado</th>
                    </tfoot>
                  </table>
              </div>
              <div class="panel-body" id="formularioregistrosTPersona">
                  <form name="formularioTPersona" id="formularioTPersona" method="POST">
                    <div class="form-group ">
                      <label for="">Nombre de tipo de Estado: </label>
                      <input type="hidden" name="idstatus" id="idstatus">
                      <input type="text" name="detalleTPersona" class="form-control" id="detalleTPersona" maxlength="45" placeholder="Nombre de tipo de estado" required>
                    </div>
                    <div class="form-group" >
                      <button class="btn btn-primary" type="submit" id="btnGuardarTPersona"><i class="fa fa-save"></i> Guardar</button>
                      <button class="btn btn-danger" type="button" onclick="cancelarformTPersona()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                    </div>
                  </form>
              </div>
              <!--Fin centro -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- Catalogo estados de proyecto-->
    <div class="row container">
        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <div class="box box-default">
              <div class="box-header with-border" data-widget="collapse">
                    <h1 class="box-title">Catalogo: Estados de los proyectos <button class="btn btn-success" id="btnagregarEProyectos" onclick="mostrarformEProyectos(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                  <!--<div class="box-tools pull-right">
                    <i class="fa fa-minus pull-right"></i>
                  </div>-->
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body" id="listadoregistrosEProyectos">
                  <table id="tbllistadoEProyectos" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th>Opciones</th>
                      <th>Tipos de Estado</th>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                      <th>Opciones</th>
                      <th>Tipos de Estado</th>
                    </tfoot>
                  </table>
              </div>
              <div class="panel-body" id="formularioregistrosEProyectos">
                  <form name="formularioEProyectos" id="formularioEProyectos" method="POST">
                    <div class="form-group ">
                      <label for="">Nombre de tipo de Estado: </label>
                      <input type="hidden" name="idstatus" id="idstatus">
                      <input type="text" name="detalleEProyectos" class="form-control" id="detalleEProyectos" maxlength="45" placeholder="Nombre de tipo de estado" required>
                    </div>
                    <div class="form-group" >
                      <button class="btn btn-primary" type="submit" id="btnGuardarEProyectos"><i class="fa fa-save"></i> Guardar</button>
                      <button class="btn btn-danger" type="button" onclick="cancelarformEProyectos()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
<script type="text/javascript" src="scripts/tipo_persona.js"></script>
<script type="text/javascript" src="scripts/status_proy.js"></script>
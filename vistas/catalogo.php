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
      <li><a href="../"><i class="fa fa-dashboard"></i> Principal</a></li>
      <li class="active">Catalogos</li>
    </ol>
  </section>

  <section class="content">
            <div class="row">
              <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12">
                  <div class="box box-info">
                    <div class="box-header with-border" data-widget="collapse">
                          <h1 class="box-title">Catalogo: Tipo de Persona <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                          <i class="fa fa-minus pull-right"></i>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Tipo de Persona</th>
                            <th>Status</th>
                          </thead>
                          <tbody>

                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Tipo de Persona</th>
                            <th>Status</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group ">
                            <label for="">Tipo de persona: </label>
                            <input type="hidden" name="idtipo_persona" id="idtipo_persona">
                            <input type="text" name="detalle" class="form-control" id="detalle" maxlength="45" placeholder="Tipo de persona" required>
                          </div>
                          <div class="form-group" >
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-danger" type="button" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
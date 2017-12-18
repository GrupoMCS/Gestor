<?php
    require 'header.php';
?>  
<!-- Todo el contenido de nuestra pagina -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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

    <!-- Main content -->
    <section class="content container-fluid">

        <!--################################-->
      <!--| Todo el contenido de la pagina aqui |-->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <!-- Form catalogo tipo_persona -->
        <div class="box box-info" > 
        <!-- <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> -->
          <div class="box-header with-border" data-widget="collapse">
            <h3 class="box-title" >Catalogo de Tipos de Personas</h3>
              <!-- Agregar esto para mostrar minimizar y cerrar el box del form: data-widget del div box-header-->
            <div class="box-tools pull-right">
              <i class="fa fa-minus pull-right"></i>
              <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
            </div>
            <!--############################-->
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body">
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
                <form method="POST" name="formulario" id="formulario">
                  <div class="form-group ">
                    <label for="">Tipo de persona: </label>
                    <input type="hidden" name="idtipo_persona" ide="idtipo_persona">
                    <input type="text" class="form-control" name="Tipo de persona" id="detalle" maxlength="45" placeholder="Tipo de persona" required>
                  </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary" id="btnGuardar"><i class="fa fa-save"></i></button>
                    <button type="button" class="btn btn-danger" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i></button>
                  </div>
                </form>
              </div>					
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="button" class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
        <!-- /.box -->
      </div>
        <!-------------------------->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Fin de todo el contenido de nuestra pagina -->

<?php
    require 'footer.php';
?>  
<script type="text/javascript" src="scripts/tipo_persona.js"></script>
<?php
    require 'header.php';
?>  
<!-- Todo el contenido de nuestra pagina -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Banco de proyectos
        <small>Proyectos dentro del sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li class="active">Banco de proyectos</li>
      </ol>
    </section>

    <section class="content">
    <div class="row justifi-content-center"> 
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><!-- ./Esta div pertenece a los proyectos activos -->
          <div class="box box-default">
            <div class="box-header with-border" data-widget="collapse"><i class="fa fa-minus"></i>
              <h3 class="box-title" id="nombrePanel">Proyectos Activos </h3> 
            </div><!-- /.box-header --> 
            <div class="box-body">
              <div class="content-wraper">
                <div class="panel-group" id=""><!--inicio de caja para agregar proyecto-->
                  <button class="btn btn-success" id="btnagregarProyectos" onclick="mostrarform(true)" data-toggle="collapse" data-target=""><i class="fa fa-plus-circle"></i> Nuevo Proyecto</button>
                  <div id="frmProyectos" class="">

                    <form name="formularioProyectos" id="formularioProyectos" method="POST">
                      <!-- ###########################Quitar para hacer dinamico -->
                        <div class=\"form-group\">
                          <div class=\"row\">
                            <div class=\"col-lg-12 col-smd-12 col-sm-12 col-xs-12\">
                              <label for=\"nombre\">Nombre de la sucursal: </label>
                              <input type=\"hidden\" name=\"idsucursal\" id=\"idsucursal\" >
                              <input type=\"hidden\" name=\"iddireccion\" id=\"iddireccion\" >
                              <input type=\"text\" name=\"nombre\" class=\"form-control\" id=\"nombre\" maxlength=\"45\" placeholder=\"Nombre de la sucursal\" tabindex=\"1\" required>
                            </div>
                          </div>
                          <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                              <label for=\"telefono\">Telefono de contacto: </label>
                              <input type=\"text\" name=\"telefono\" class=\"form-control\" id=\"telefono\" maxlength=\"10\" placeholder=\"Telefono de contacto\" tabindex=\"2\">
                            </div>
                          </div>
                          <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                              <label for=\"colonia\">Colonia: </label>
                              <input type=\"text\" name=\"colonia\" class=\"form-control\" id=\"colonia\" maxlength=\"45\" placeholder=\"Colonia\" tabindex=\"3\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                              <label for=\"calle\">Calle: </label>
                              <input type=\"text\" name=\"calle\" class=\"form-control\" id=\"calle\" maxlength=\"45\" placeholder=\"Nombre de la calle\" tabindex=\"4\">
                            </div>
                            <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                              <label for='numint'>Numero Interior:</label>
                              <input type=\"text\" name=\"numint\" class=\"form-control\" id=\"numint\" maxlength=\"6\" placeholder=\"Numero Interior\" tabindex=\"5\">
                            </div>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                              <label for=\"numext\">Numero Exterior: </label>
                              <input type=\"text\" name=\"numext\" class=\"form-control\" id=\"numext\" maxlength=\"6\" placeholder=\"Numero Exterior\" tabindex=\"6\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                              <label for=\"cp\">C.P.: </label>
                              <input type=\"text\" name=\"cp\" class=\"form-control\" id=\"cp\" maxlength=\"10\" placeholder=\"Codigo Postal\" tabindex=\"7\">
                            </div>
                          </div>
                          <div class=\"row\">
                            <div class=\"col-lg-6 col-md6 col-sm-12 col-xs-12\">
                              <label for=\"pais\">Pais: </label>
                              <input type=\"text\" name=\"pais\" class=\"form-control\" id=\"pais\" maxlength=\"45\" placeholder=\"Pais\" tabindex=\"8\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                              <label for=\"estado\">Estado: </label>
                              <input type=\"text\" name=\"estado\" class=\"form-control\" id=\"estado\" maxlength=\"45\" placeholder=\"Estado\" tabindex=\"9\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                              <label for=\"municipio\">Municipio: </label>
                              <input type=\"text\" name=\"municipio\" class=\"form-control\" id=\"municipio\" maxlength=\"45\" placeholder=\"Municipio\" tabindex=\"10\">
                              <br>
                            </div>
                          </div>
                          <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                              <button class=\"btn btn-primary\" type=\"submit\" id=\"btnGuardar\"><i class=\"fa fa-save\"></i> Guardar</button> <button class=\"btn btn-danger\" type=\"button\" onclick=\"cancelarform()\"><i class=\"fa fa-arrow-circle-left\"></i> Cancelar</button>
                            </div>
                          </div>
                        </div>

                      <!--###########################Finaliza quitar para hacer dinamico-->
                    </form>

                  </div>
                </div><!-- Fin de caja para agregar proyecto-->
              </div>
            </div><!-- /.box-body -->

            <div class="box-body">
            <div class="content-wraper">
                <div class="panel-group" id="proyectos_activos"><!--inicio de caja para agregar proyecto-->
                  <table id="tblProyActivos" class="table table-striped table-bordered table-condensed">
                      <thead>
                        <th></th>
                        
                      </thead>
                  </table>
                </div><!-- Fin de caja para agregar proyecto-->
              </div>
            </div>
          </div><!-- /.box -->
      </div><!-- /.col -->
    



















      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><!-- ./Esta div pertenece a los proyectos inactivos -->
          <div class="box box-default">
            <div class="box-header with-border" data-widget="collapse"><i class="fa fa-minus"></i>
              <h3 class="box-title">Proyectos Concluidos</h3>
            </div><!-- /.box-header -->
              <div class="box-body">
                  <div class="content-wraper">
                      <div class="panel-group" id="proyectos_inactivos"><!--inicio de caja para agregar proyecto-->
                        <table id="tblProyInactivos" class="table table-striped table-bordered table-condensed">
                            <thead>
                              <th></th>
                              
                            </thead>
                          </table>
                      </div><!-- Fin de caja para agregar proyecto-->
                  </div>
              </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div><!-- /.col -->
    </div> 
    </section>
    
  </div>
  <!-- /.content-wrapper -->

<!-- Fin de todo el contenido de nuestra pagina -->

<?php
    require 'footer.php';
?>  
<script type="text/javascript" src="scripts/proyectos.js"></script>
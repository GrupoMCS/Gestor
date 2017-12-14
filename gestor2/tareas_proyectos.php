<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html xmlns="http://www.w3.org/1999/html">
  <head>
    <?php
    include('config.php');
    include 'pagina/includes/head.php';
    ?>
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue layout-boxed">
    <div class="wrapper">

      <!-- Main Header -->
          <?php 
          include 'pagina/includes/header.php';
          include 'pagina/includes/aside.php';
          ?>

    <!-- Content Wrapper. En esta div se cargara todo el contenido de la pagina -->
    <div class ="content-wrapper"><!-- ./wrapper -->


<!--Todo el contenido nuevo en este segmento  -->
    <div class="content">
      <div class="col-md-13"><!-- ./Esta div pertenece a los proyectos activos -->
            <div class="box box-default">
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="tareas_nuevas">
                            <!--inicio de caja para agregar proyecto-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#tareas_nuevas" href="#nuevas">
                                    <h4 class="panel-title">
                                        <a>Agregar/Asignar Nueva Tarea...</a>
                                    </h4>
                                </div>
                                <div id="nuevas" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="pull-right btn-group">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Asignar">
                                                            <button type="button" class="btn btn-default btn btn-default glyphicon glyphicon-export"></button>
                                                        </a>
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Cerrar">
                                                            <button data-toggle="collapse" href="#nuevas" type="button" class="btn btn-default glyphicon glyphicon-floppy-remove"></button>
                                                        </a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5">
                                                <label for="resp-tarea">Proyecto(s):</label>
                                                <input type="text" class="form-control" id="tokenfield_proyecto" style="width:auto;" id="resp-tarea"/>
                                            </div>
                                        </div>
                                        <p>
                                        <div class="row ">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-9">
                                                <label for="nombre-tarea">Nombre de la Tarea:</label>
                                                <input type="text" class="form-control" placeholder="Nombre de la tarea ..." id="nombre-tarea"/></div>
                                        </div>
                                        <p></p>
                                        <div class="row form-group">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-9">
                                                <label for="asigna-tarea">Actividades a Realizar:</label>
                                                <textarea class="form-control" rows="3" placeholder="Detalle sus actividades realizadas ..." id="act-realizar"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5">
                                                <label for="resp-tarea">Responsable de la Tarea:</label>
                                                <input type="text" class="form-control" id="tokenfield_tarea" style="width:auto;" id="resp-tarea"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                <label for="limite">Fecha Unica:</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <input type="radio" name="optionsRadios" id="fecha_unica" value="opcion1" checked />
                                                    </span>
                                                    <div class='input-group date' id='datetimepicker2'>
                                                        <input type='text' class="form-control" id="fecha-limite"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="limite">Fecha Periodica:</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <input type="radio" name="optionsRadios" id="periodico" value="opcion2" />
                                                    </span>
                                                    <select class="form-control autotag" data-placeholder="Perio" id="multiple">
                                                        <option>Diario</option>
                                                        <option>Semanal</option>
                                                        <option>Quincenal</option>
                                                        <option>Mensual</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de caja para agregar proyecto-->
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.Esta div pertenece a tareas actuales -->
      <div class="col-md-13"><!-- ./Esta div pertenece a los proyectos activos -->
        <div class="box box-default">
          <div class="box-header with-border" data-widget="collapse" href="tareas_personales"><i class="fa fa-minus"></i>
            <h3 class="box-title">Tareas de Proyectos Pendientes</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
                <div class="content-wraper">
                    <div class="panel-group" id="tareas_personales">
                        <!--inicio de caja para agregar proyecto-->
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#tareas_personales" href="#personales1">
                                <h4 class="panel-title">
                                    <a>TP-001-001-2015: Servicio a Goca</a>
                                    <div class="progress">
                                        <div class="progress-bar sm progress-bar-striped active" role="progressbar"
                                             style="width:40%">40%
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="personales1" class="panel-collapse collapse">
                                <div  class="panel-body">
                                    <div class="row" style="border-bottom: 2px solid #f5f5f5">
                                        <div class="col-md-3"><strong>Nombre de la Tarea:</strong></div>
                                        <div class="col-md-3">Servicio a GOCA</div>
                                        <div class="col-md-3"><strong>Proyecto:</strong></div>
                                        <div class="col-md-3">MCS2015-001: Gestor</div>
                                    </div>
                                    <div class="row" style="border-bottom: 2px solid #f5f5f5">
                                        <div class="col-md-3"><strong>Actividades a Realizar:</strong></div>
                                        <div class="col-md-3">Instalar 2 impresoras, revisar 1 equipo de computo lento,
                                                                configurar 1 correo electronico en 1 telefono.</div>
                                        <div class="col-md-3"><strong>Cliente:</strong></div>
                                        <div class="col-md-3">001-GOCA</div>
                                    </div>
                                    <div class="row" style="border-bottom: 2px solid #f5f5f5">
                                        <div class="col-md-3"><strong>Asigno:</strong></div>
                                        <div class="col-md-3">Enrique Salomon Reyes</div>
                                        <div class="col-md-3"><strong>Fecha de Asignación:</strong></div>
                                        <div class="col-md-3">08-Diciembre-2015</div>
                                    </div>
                                    <div class="row" style="border-bottom: 2px solid #f5f5f5">
                                        <div class="col-md-3"><strong>Personal Asignado:</strong></div>
                                        <div class="col-md-3">Jose Luis Leon Salazar, José Martín de Jesús Corrales Pérez</div>
                                        <div class="col-md-3"><strong>Fecha Limite de Atención:</strong></div>
                                        <div class="col-md-3">10-Diciembre-2015</div>
                                    </div>
                                </div>

                                <div class="panel-footer" data-toggle="collapse" data-parent="#tareas_persona" href="#tarea_footer1">
                                    <a>Cerrar Tarea:</a>
                                </div>
                                <div id="tarea_footer1" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="pull-right btn-group">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Guardar">
                                                            <button type="button" class="btn btn-default glyphicon glyphicon-floppy-disk"></button>
                                                        </a>
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Enviar">
                                                            <button type="button" class="btn btn-default glyphicon glyphicon-send"></button>
                                                        </a>
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Cerrar">
                                                            <button data-toggle="collapse" href="#tarea_footer1" type="button" class="btn btn-default glyphicon glyphicon-floppy-remove"></button>
                                                        </a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-8">
                                                <label for="act-realizadas">Actividades Realizadas:</label>
                                                <textarea class="form-control" rows="3" placeholder="Detalle sus actividades realizadas ..." id="act-realizadas"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                                <label for="nom_tarea">Revisó/Atendió:</label>
                                                <input type="text" class="form-control" placeholder="Revisó/Atendió ..." id="reviso"/></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-4">
                                                <label for="fecha-atencion">Fecha de Atención:</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="form-group">
                                                            <div class='input-group date' id='datetimepicker1'>
                                                                <input type='text' class="form-control"/>
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.input group -->
                                                </div><!-- /.form group -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin de caja para agregar proyecto-->
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.Esta div pertenece a tareas actuales -->
    </div>

<!-- Hasta aqui todo el contenido nuevo-->
    </div><!-- .content wrapper -->

    <?php
      include 'pagina/includes/footer.php';
      include 'pagina/includes/aside2.php';
    ?>
    </div><!-- ./wrapper -->
    <?php
      include 'pagina/includes/jsfooter.php';
    ?>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        $('#tokenfield_proyecto').tokenfield({
            autocomplete: {
                source: proyectos(),
                delay: 100
            },
            showAutocompleteOnFocus: true
        });

        function proyectos(){
            var words = new Array("MCS2015-001: Gestor", "MCS2015-002: Pagina WEB");

            return words;
        }

        $('#tokenfield_tarea').tokenfield({
            autocomplete: {
                source: res_tarea(),
                delay: 100
            },
            showAutocompleteOnFocus: true
        });

        function res_tarea(){
            var words = new Array("Jesús Enrique Salomon Reyes", "José Martín de Jesús Corrales Pérez", "José Luis Leon Salazar");

            return words;
        }
    </script>
  </body>
</html>

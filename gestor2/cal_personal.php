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
                        <div class="panel-group" id="cal_personal">
                            <!--inicio de caja para agregar proyecto-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#cal_personal" href="#cal_panel">
                                    <h4 class="panel-title">
                                        <a>Calendario Personal</a>
                                    </h4>
                                </div>
                                <div id="cal_panel" class="panel-collapse collapse in">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <span class="pull-right btn-group">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Agendar Evento">
                                                            <button type="button" class="btn btn-default btn btn-default glyphicon glyphicon-calendar"></button>
                                                        </a>
                                                        <!--<a class="btn-group" role="group" data-toggle="tooltip" title="Cerrar">
                                                            <button data-toggle="collapse" href="#cal_panel" type="button" class="btn btn-default glyphicon glyphicon-floppy-remove"></button>
                                                        </a>-->
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="page-header">
                                                    <div class="pull-right form-inline">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
                                                            <button class="btn" data-calendar-nav="today">Hoy</button>
                                                            <button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-warning" data-calendar-view="year">Año</button>
                                                            <button class="btn btn-warning active" data-calendar-view="month">Mes</button>
                                                            <button class="btn btn-warning" data-calendar-view="week">Semana</button>
                                                            <button class="btn btn-warning" data-calendar-view="day">Día</button>
                                                        </div>
                                                    </div>
                                                    <h3></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                                <div class="box box-primary">
                                                    <div class="box-body no-padding">
                                                        <div id="calendar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de caja para calendario-->
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.Esta div pertenece al calendario -->

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

    <script type="text/javascript" src="plugins/calendario_gestor/underscore-min.js"></script>
    <script type="text/javascript" src="plugins/calendario_gestor/jstimezonedetect/jstz.min.js"></script>
    <script type="text/javascript" src="plugins/calendario_gestor/calendar.js"></script>
    <script type="text/javascript" src="plugins/calendario_gestor/lenguaje/es-MX.js"></script>
    <script type="text/javascript" src="plugins/calendario_gestor/app.js"></script>

    <script>
        $(document).ready(function(){
            $("#calendar").calendar(
                {
                    language: 'es-MX',
                    tmpl_path: "plugins/calendario_gestor/tmpls/",
                    events_source: 'events.json.php'
                });
        });
    </script>
  </body>
</html>

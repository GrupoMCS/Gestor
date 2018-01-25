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

    <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12"><!-- ./Esta div pertenece a los proyectos activos -->
        <div class="box box-default">
          <div class="box-header with-border" data-widget="collapse"><i class="fa fa-minus"></i>
            <h3 class="box-title">Proyectos Activos</h3>
          </div><!-- /.box-header -->
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
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->

    <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12"><!-- ./Esta div pertenece a los proyectos inactivos -->
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
    </section>
    
  </div>
  <!-- /.content-wrapper -->

<!-- Fin de todo el contenido de nuestra pagina -->

<?php
    require 'footer.php';
?>  
<script type="text/javascript" src="scripts/proyectos.js"></script>
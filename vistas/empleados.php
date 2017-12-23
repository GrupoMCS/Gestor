<?php
    require 'header.php';
?>  
<!-- Todo el contenido de nuestra pagina -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Empleados
        <small>Empleados del sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li class="active">Clientes</li>
      </ol>
    </section>

    <section class="content">
      <div class="col-md-12">
      <div class="box box-default">
          <div class="box-header with-border" data-widget="collapse"><i class="fa fa-minus"></i>
            <h3 class="box-title">Empleados Activos</h3>
          </div><!-- /.box-header -->
            <div class="box-body">
                <div class="content-wraper">
                    <div class="panel-group" id="proyectos_activos">
                        <!--inicio de caja para empleados activos-->
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_activos" href="#activos1">
                                <h4 class="panel-title">
                                    <a>MCS2015-001: Gestor</a>
                                    <div class="progress">
                                        <div class="progress-bar sm progress-bar-striped active" role="progressbar"
                                             style="width:40%">40%
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="activos1" class="panel-collapse collapse">
                                <div  class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Nombre Proyecto:</strong></div>
                                        <div class="col-md-3">Gestor de Proyectos</div>
                                        <div class="col-md-3"><strong>Fase del Proyecto:</strong></div>
                                        <div class="col-md-3">Planeación</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Cliente:</strong></div>
                                        <div class="col-md-3">Más Más Computers</div>
                                        <div class="col-md-3"><strong>Entregables:</strong></div>
                                        <div class="col-md-3">2 de 5</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Responsable:</strong></div>
                                        <div class="col-md-3">José Martín de Jesús Corrales Pérez</div>
                                        <div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div>
                                        <div class="col-md-3">01-Enero-2015</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Costo Presupuestado:</strong></div>
                                        <div class="col-md-3">$10,000.00</div>
                                        <div class="col-md-3"><strong>Fecha Limite de Entrega:</strong></div>
                                        <div class="col-md-3">Sin Establecer</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><a href="#">Ver Más Detalles...</a></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"><strong></strong></div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fin de caja para agregar proyecto-->
                        <div class="panel panel-default" >
                            <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_activos" href="#activos2">
                                <h4 class="panel-title">
                                    <a>MCS2015-002: Pagina WEB</a>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                                             style="width:60%">60%
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="activos2" class="panel-collapse collapse">
                                <div  class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Nombre Proyecto:</strong></div>
                                        <div class="col-md-3">Pagina WEB Más Más Computers</div>
                                        <div class="col-md-3"><strong>Fase del Proyecto:</strong></div>
                                        <div class="col-md-3">Planeación</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Cliente:</strong></div>
                                        <div class="col-md-3">Más Más Computers</div>
                                        <div class="col-md-3"><strong>Entregables:</strong></div>
                                        <div class="col-md-3">2 de 5</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Responsable:</strong></div>
                                        <div class="col-md-3">Rafael Esparragoza Pérez</div>
                                        <div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div>
                                        <div class="col-md-3">01-Enero-2015</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Costo Presupuestado:</strong></div>
                                        <div class="col-md-3">Sin Presupuesto asignado</div>
                                        <div class="col-md-3"><strong>Fecha Limite de Entrega:</strong></div>
                                        <div class="col-md-3">Sin Establecer</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><a href="#">Ver Más Detalles...</a></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"><strong></strong></div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--fin de la caja para empleados activos-->
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.row -->
    </section>


    
  </div>
  <!-- /.content-wrapper -->

<!-- Fin de todo el contenido de nuestra pagina -->

<?php
    require 'footer.php';
?>  
<script type="text/javascript" src="scripts/tipo_persona.js"></script>
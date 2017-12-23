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
                          <h1 class="box-title">Catalogos del Sistema</h1>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body" id="listadoregistros">
                        <ul>
                            <a href="tipo_persona.php">
                                <li>Catalogo de Tipos de Persona</li>
                            </a>
                            <a href="status_proy.php">
                                <li>Catalogo de Tipos de Estados de los Proyectos</li>
                            </a>
                        </ul>
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
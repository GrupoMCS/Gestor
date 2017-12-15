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

        <!-- Form catalogo tipo_persona -->
		<div class="box box-info">
            <div class="box-header with-border">
			  <h3 class="box-title">Catalogo de Tipos de Personas</h3>
			  	<!-- Agregar esto para mostrar minimizar y cerrar el box del form -->
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
				</div>
			 	 <!--############################-->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
				<div class="box-body">
					<div class="panel-body table-responsive" id="listadoregistros">
						<table id="" class="table table-striped table-bordered table-condensed table-hover">
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
						Aqui va el form

					</div>					
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
                <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button>
                <!--<button type="" class="btn btn-info pull-right">Sign in</button>-->
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->









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
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
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
      <div class="col-md-13"><!-- ./Esta div pertenece a los usuarios nuevos -->
            <div class="box box-default">
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="proyectos_nuevos">
                            <!--inicio de caja para agregar proyectos-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_nuevos" href="#nuevas">
                                    <h4 class="panel-title">
                                        <a>Agregar Proyecto...</a>
                                    </h4>
                                </div>
                                <div id="nuevas" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="fc-row">
                                            <!-- Custom Tabs -->
                                            <div class="nav-tabs-custom">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#cuenta" data-toggle="tab">Cuenta</a></li>
                                                    <li><a href="#empresa" data-toggle="tab">Empresa</a></li>
                                                    <li><a href="#personal" data-toggle="tab">Personal</a></li>
                                                    <li><a href="#formacion" data-toggle="tab">Formación</a></li>
                                                    <span class="pull-right btn-group">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Crear">
                                                            <button type="button" class="btn btn-default btn btn-default glyphicon glyphicon-export"></button>
                                                        </a>
                                                        <a class="btn-group" role="group" data-toggle="tooltip" title="Cerrar">
                                                            <button data-toggle="collapse" href="#nuevas" type="button" class="btn btn-default glyphicon glyphicon-floppy-remove"></button>
                                                        </a>
                                                    </div>
                                                </span>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="cuenta">
                                                        <fieldset>
                                                            <legend class="scheduler-border"><a>Datos de la Cuenta:</a></legend>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                    <label for="usuario">Nombre de Usuario:</label>
                                                                    <input type="text" class="form-control" placeholder="Trabajo." id="usuario" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="contraseña">Contraseña:</label>
                                                                    <input type="password" class="form-control" placeholder="Contraseña."  id="contraseña" />
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                    <label for="correo">Correo Empresarial</label>
                                                                    <div class="input-group">
                                                                        <input type="email" class="form-control" placeholder="Correo..." id="correo">
                                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-2"><strong>Imagen:</strong></div>
                                                                <div class="col-md-2">
                                                                    <div class="pull-left image">
                                                                        <img src="" class="img-responsive img-thumbnail"  alt="User Image" style="max-width: 120px" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="exampleInputFile">Cambiar Imagen:</label>
                                                                    <input type="file" id="exampleInputFile">
                                                                    <p class="help-block">Tam. Permitido: 160x160px</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Estado de la Cuenta:</label>
                                                                        <select class="form-control" >
                                                                            <option>Activo</option>
                                                                            <option>Inactivo</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div><!-- /.tab-pane -->
                                                    <div class="tab-pane" id="empresa">
                                                        <fieldset>
                                                            <legend class="scheduler-border"><a>Datos de la Empresa:</a></legend>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <label for="centro_trabajo">Centro de Trabajo:</label>
                                                                    <select class="form-control" >
                                                                        <option>Oficina Principal Más Más Computers</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="departamento">Departamento:</label>
                                                                    <select class="form-control" >
                                                                        <option>Administracion</option>
                                                                        <option>Sistemas</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="puesto">Puesto:</label>
                                                                    <select class="form-control" >
                                                                        <option>Administrador</option>
                                                                        <option>Programador</option>
                                                                        <option>Intendente</option>
                                                                        <option>Atencion a Clientes</option>
                                                                        <option>Secretaria</option>
                                                                        <option>Contador</option>
                                                                        <option>Gerente de Ventas</option>
                                                                        <option>Lider de Proyectos</option>
                                                                        <option>Jefe de Departamento</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <label for="categoria">Categoria:</label>
                                                                    <select class="form-control" >
                                                                        <option>Administracion</option>
                                                                        <option>Gerencia</option>
                                                                        <option>Sistemas y Comunicación</option>
                                                                        <option>Secretaria</option>
                                                                        <option>Intendencia</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="fecha_ingreso">Fecha de Ingreso:</label>
                                                                    <div class='input-group date' id='datetimepicker1' >
                                                                        <input type='text' class="form-control" id="fecha_ingreso" />
                                                                        <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <label for="telefono_empresa">Telefono Empresa:</label>
                                                                    <div class="input-group">
                                                                        <input type="tel" class="form-control" placeholder=" Tel Empresa..." id="telefono_empresa" >
                                                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="extension">Extensión:</label>
                                                                    <div class="input-group">
                                                                        <input type="tel" class="form-control" placeholder="Extensión..." id="extension" >
                                                                        <span class="input-group-addon"><i class="fa fa-tty"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="fax">Fax:</label>
                                                                    <div class="input-group">
                                                                        <input type="tel" class="form-control" placeholder="Tel Fax..." id="fax" >
                                                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="correo_emp">Correo Empresarial:</label>
                                                                    <div class="input-group">
                                                                        <input type="email" class="form-control" placeholder="Correo..." id="correo_emp" >
                                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div><!-- /.tab-pane -->
                                                    <div class="tab-pane" id="personal">
                                                        <fieldset class="scheduler-border">
                                                            <legend class="scheduler-border"><a>Datos Personales:</a></legend>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <label for="nombre">Nombre(s):</label>
                                                                    <input type="text" class="form-control" placeholder="Nombre(s)." id="nombre"/>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="apaterno">A. Paterno:</label>
                                                                    <input type="text" class="form-control" placeholder="A. Paterno." id="apaterno"/></div>
                                                                <div class="col-md-3">
                                                                    <label for="amaterno">A. Materno:</label>
                                                                    <input type="text" class="form-control" placeholder="A. Materno" id="amaterno"/>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <label for="nacimiento">Fecha de Nacimiento:</label>
                                                                    <div class='input-group date' id='datetimepicker2' >
                                                                        <input type='text' class="form-control" id="nacimiento"/>
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="tel_personal">Telefono Fijo Personal:</label>
                                                                    <div class="input-group">
                                                                        <input type="tel" class="form-control" placeholder="Domestico..." id="tel_personal">
                                                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="tel_mpersonal">Telefono Movil Personal:</label>
                                                                    <div class="input-group">
                                                                        <input type="tel" class="form-control" placeholder="Celular..." id="tel_mpersonal">
                                                                        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Genero:</label>
                                                                        <select class="form-control">
                                                                            <option>Masculino</option>
                                                                            <option>Femenino</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="correo_per">Correo Personal:</label>
                                                                    <div class="input-group">
                                                                        <input type="email" class="form-control" placeholder="Correo..." id="correo_per">
                                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="scheduler-border">
                                                            <legend class="scheduler-border"><a>Dirección:</a></legend>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-6">
                                                                    <label for="calle">Calle:</label>
                                                                    <input type="text" class="form-control" placeholder="Calle." id="calle" /></div>
                                                                <div class="col-md-2">
                                                                    <label for="num_int">Número Int.:</label>
                                                                    <input type="text" class="form-control" placeholder="Número Int." id="num_int" /></div>
                                                                <div class="col-md-2">
                                                                    <label for="num_ext">Número Ext.:</label>
                                                                    <input type="text" class="form-control" placeholder="Número Int." id="num_ext" /></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"><strong></strong></div>
                                                                <div class="col-md-4">
                                                                    <label for="colonia">Colonia:</label>
                                                                    <input type="text" class="form-control" placeholder="Colonia." id="colonia" />                                            </div>
                                                                <div class="col-md-2">
                                                                    <label for="cp">C.P.:</label>
                                                                    <input type="text" class="form-control" placeholder="CP." id="cp" /></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"><strong></strong></div>
                                                                <div class="col-md-3">
                                                                    <label for="pais">Pais:</label>
                                                                    <select class="form-control" >
                                                                        <option>México</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="estado">Estado:</label>
                                                                    <select class="form-control" >
                                                                        <option>Sinaloa</option>
                                                                        <option>Guadalajara</option>
                                                                        <option>D.F.</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="municipio">Municipio:</label>
                                                                    <input type="text" class="form-control" placeholder="Municipio." id="municipio" />
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div><!-- /.tab-pane -->
                                                    <div class="tab-pane" id="formacion">
                                                        <fieldset class="scheduler-border">
                                                            <legend class="scheduler-border"><a>Formación Academica:</a></legend>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <label>Escolaridad Maxima:</label>
                                                                    <select class="form-control">
                                                                        <option>Primaria</option>
                                                                        <option>Secundaria</option>
                                                                        <option>Preparatoria</option>
                                                                        <option>Licenciatura</option>
                                                                        <option>Maestria</option>
                                                                        <option>Doctorado</option>
                                                                        <option>No Termino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="escuela">Nombre de Escuela:</label>
                                                                    <input type="text" class="form-control" placeholder="Escuela" id="escuela"/></div>
                                                                <div class="col-md-3">
                                                                    <label for="carrera">Carrera:</label>
                                                                    <input type="text" class="form-control" placeholder="Carrera" id="carrera"/>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <label for="egreso">Fecha de Egreso:</label>
                                                                    <div class='input-group date' id='datetimepicker3' >
                                                                        <input type='text' class="form-control" id="egreso"/>
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="scheduler-border">
                                                            <legend class="scheduler-border"><a>Cursos Recibidos:</a></legend>

                                                            <div class="panel-group" id="curso_recibido">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" data-toggle="collapse" data-parent="#curso_recibido" href="#curso1">
                                                                        <h4 class="panel-title">
                                                                            <a>Ningun Curso...</a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="curso1" class="panel-collapse collapse">
                                                                        <div  class="panel-body">
                                                                            <div class="row">
                                                                                <div class="col-md-3"><strong>Nombre del Curso:</strong></div>
                                                                                <div class="col-md-3">N/A</div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-3"><strong>Descripción:</strong></div>
                                                                                <div class="col-md-9">N/A</div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-3"><strong>Fecha de Inicio:</strong></div>
                                                                                <div class="col-md-3">N/A</div>
                                                                                <div class="col-md-3"><strong>Fecha de Termino:</strong></div>
                                                                                <div class="col-md-3">N/A</div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-3"><strong>Duración:</strong></div>
                                                                                <div class="col-md-3">N/A</div>
                                                                                <div class="col-md-3"><strong>Tipo de Curso:</strong></div>
                                                                                <div class="col-md-3">N/A</div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-3"><strong>Calificación:</strong></div>
                                                                                <div class="col-md-3">N/A</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </fieldset>
                                                    </div><!-- /.tab-pane -->
                                                </div><!-- /.tab-content -->
                                            </div><!-- nav-tabs-custom -->
                                        </div><!--fin de tabs -->
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de caja para agregar usuarios-->
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- / .Esta div para agregar proyectos -->
      <div class="col-md-13"><!-- ./Esta div pertenece a los proyectos activos -->
        <div class="box box-default">
          <div class="box-header with-border" data-widget="collapse"><i class="fa fa-minus"></i>
            <h3 class="box-title">Proyectos Activos</h3>
          </div><!-- /.box-header -->
            <div class="box-body">
                <div class="content-wraper">
                    <div class="panel-group" id="proyectos_activos">

                        <!--inicio de caja para agregar proyecto-->
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
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
      <div class="col-md-13"><!-- /.Esta div pertenece a los proyectos concluidos -->
            <div class="box box-default  collapsed-box">
              <div class="box-header with-border" data-widget="collapse"><i class="fa fa-plus"></i>
                <h3 class="box-title">Proyectos Concluidos</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <div class="content-wraper">
                  <div class="panel-group" id="proyectos_terminados">
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_terminados" href="#terminados1">
                        <h4 class="panel-title">
                          <a>MCS2015-003: Proyecto de Prueba 1</a>
                        </h4>
                      </div>
                      <div id="terminados1" class="panel-collapse collapse">
                          <div  class="panel-body">
                              <div class="row">
                                  <div class="col-md-3"><strong>Nombre Proyecto:</strong></div>
                                  <div class="col-md-3">Proyecto de Prueba 1</div>
                                  <div class="col-md-3"><strong>Fase del Proyecto:</strong></div>
                                  <div class="col-md-3">Concluido</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Cliente:</strong></div>
                                  <div class="col-md-3">Más Más Computers</div>
                                  <div class="col-md-3"><strong>Entregables:</strong></div>
                                  <div class="col-md-3">5 de 5</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Responsable:</strong></div>
                                  <div class="col-md-3">José Martín de Jesús Corrales Pérez</div>
                                  <div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div>
                                  <div class="col-md-3">01-Enero-2015</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Costo Total de Proyecto:</strong></div>
                                  <div class="col-md-3">$0.00</div>
                                  <div class="col-md-3"><strong>Fecha de Conclusión:</strong></div>
                                  <div class="col-md-3">31-Diciembre-2015</div>
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
                    <div class="panel panel-default" >
                      <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_terminados" href="#terminados2">
                        <h4 class="panel-title">
                          <a>MCS2015-004: Proyecto de Prueba 2</a>
                        </h4>
                      </div>
                      <div id="terminados2" class="panel-collapse collapse">
                          <div  class="panel-body">
                              <div class="row">
                                  <div class="col-md-3"><strong>Nombre Proyecto:</strong></div>
                                  <div class="col-md-3">Proyecto de Prueba 2</div>
                                  <div class="col-md-3"><strong>Fase del Proyecto:</strong></div>
                                  <div class="col-md-3">Concluido</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Cliente:</strong></div>
                                  <div class="col-md-3">Más Más Computers</div>
                                  <div class="col-md-3"><strong>Entregables:</strong></div>
                                  <div class="col-md-3">5 de 5</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Responsable:</strong></div>
                                  <div class="col-md-3">Jesús Enrique Salomon Reyes</div>
                                  <div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div>
                                  <div class="col-md-3">01-Enero-2015</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Costo Total de Proyecto:</strong></div>
                                  <div class="col-md-3">$0.00</div>
                                  <div class="col-md-3"><strong>Fecha de Conclusión:</strong></div>
                                  <div class="col-md-3">31-Diciembre-2015</div>
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
                    <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_terminados" href="#terminados3">
                        <h4 class="panel-title">
                          <a>MCS2015-005: Proyecto de Prueba 3</a>
                        </h4>
                      </div>
                      <div id="terminados3" class="panel-collapse collapse">
                          <div  class="panel-body">
                              <div class="row">
                                  <div class="col-md-3"><strong>Nombre Proyecto:</strong></div>
                                  <div class="col-md-3">Proyecto de Prueba 3</div>
                                  <div class="col-md-3"><strong>Fase del Proyecto:</strong></div>
                                  <div class="col-md-3">Concluido</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Cliente:</strong></div>
                                  <div class="col-md-3">Más Más Computers</div>
                                  <div class="col-md-3"><strong>Entregables:</strong></div>
                                  <div class="col-md-3">5 de 5</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Responsable:</strong></div>
                                  <div class="col-md-3">José Luis León Salazar</div>
                                  <div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div>
                                  <div class="col-md-3">01-Enero-2015</div>
                              </div>
                              <div class="row">
                                  <div class="col-md-3"><strong>Costo Total de Proyecto:</strong></div>
                                  <div class="col-md-3">$0.00</div>
                                  <div class="col-md-3"><strong>Fecha de Conclusión:</strong></div>
                                  <div class="col-md-3">31-Diciembre-2015</div>
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
                  </div>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
      </div><!-- /.col -->
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
  </body>
</html>

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
        <div class="col-md-13"><!-- ./Esta div pertenece a los usuarios nuevos -->
            <div class="box box-default">
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="tareas_nuevas">
                            <!--inicio de caja para agregar usuarios-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#tareas_nuevas" href="#nuevas">
                                    <h4 class="panel-title">
                                        <a>Agregar Empleado...</a>
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
        </div><!-- / .Esta div pertenece a los usuarios nuevos -->
        <div class="col-md-13"><!-- ./Esta div pertenece a los usuarios activos -->
            <div class="box box-default">
                <div class="box-header with-border" data-widget="collapse"><i class="fa fa-minus"></i>
                    <h3 class="box-title">Usuarios Activos</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="usuarios_activos">
                            <!--inicio de caja para agregar usuario-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#usuarios_activos" href="#activos1">
                                    <h4 class="panel-title">
                                        <a>José Martín de Jesús Corrales Pérez</a>
                                    </h4>
                                </div>
                                <div id="activos1" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><strong>Proyectos Actuales:</strong></div>
                                            <div class="col-md-3">1 Proyecto(s).</div>
                                            <div class="col-md-3"><strong></strong></div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Activo desde:</strong></div>
                                            <div class="col-md-3">13-Febrero-2014</div>
                                            <div class="col-md-3"><strong>Puesto:</strong></div>
                                            <div class="col-md-3">Algo dentro de Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Correo Electronico:</strong></div>
                                            <div class="col-md-3">martin.corrales@grupomcs.com</div>
                                            <div class="col-md-3"><strong>Área:</strong></div>
                                            <div class="col-md-3">Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Telefono:</strong></div>
                                            <div class="col-md-3">(667)712-39-45</div>
                                            <div class="col-md-3"><strong>Extención:</strong></div>
                                            <div class="col-md-3">3001</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><a href="datos_usuario.php">Ver Más Detalles...</a></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3"><strong></strong></div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de caja para agregar proyecto (repetir por usuario)-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#usuarios_activos" href="#activos2">
                                    <h4 class="panel-title">
                                        <a>Jesús Enrique Salomon Reyes</a>
                                    </h4>
                                </div>
                                <div id="activos2" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><strong>Proyectos Actuales:</strong></div>
                                            <div class="col-md-3">1 Proyecto(s).</div>
                                            <div class="col-md-3"><strong></strong></div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Activo desde:</strong></div>
                                            <div class="col-md-3">13-Febrero-2012</div>
                                            <div class="col-md-3"><strong>Puesto:</strong></div>
                                            <div class="col-md-3">Administrador</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Correo Electronico:</strong></div>
                                            <div class="col-md-3">enrique_salomon@grupomcs.com</div>
                                            <div class="col-md-3"><strong>Departamento:</strong></div>
                                            <div class="col-md-3">Administración</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Telefono:</strong></div>
                                            <div class="col-md-3">(667)712-39-45</div>
                                            <div class="col-md-3"><strong>Extención:</strong></div>
                                            <div class="col-md-3">3000</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><a href="datos_usuario.php">Ver Más Detalles...</a></div>
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
        </div><!-- / .Esta div pertenece a los usuarios activos-->
        <div class="col-md-13"><!-- ./Esta div pertenece a los usuarios con licencia -->
            <div class="box box-default collapsed-box">
                <div class="box-header with-border" data-widget="collapse"><i class="fa fa-plus"></i>
                    <h3 class="box-title">Usuarios Con Licencia</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="usuarios_licencia">
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#usuarios_licencia" href="#licencia1">
                                    <h4 class="panel-title">
                                        <a>José Luis León Salazar</a>
                                    </h4>
                                </div>
                                <div id="licencia1" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><strong>Tipo de Licencia:</strong></div>
                                            <div class="col-md-3">Vacaciones</div>
                                            <div class="col-md-3"><strong>Dia(s) de Licencia:</strong></div>
                                            <div class="col-md-3">30</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Inicio de Licencia:</strong></div>
                                            <div class="col-md-3">01-Febrero-2016</div>
                                            <div class="col-md-3"><strong>Fin de Licencia</strong></div>
                                            <div class="col-md-3">07-Marzo-2016</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Activo desde:</strong></div>
                                            <div class="col-md-3">13-Febrero-2012</div>
                                            <div class="col-md-3"><strong>Puesto:</strong></div>
                                            <div class="col-md-3">Algo dentro de Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Correo Electronico:</strong></div>
                                            <div class="col-md-3">jose_luis@grupomcs.com</div>
                                            <div class="col-md-3"><strong>Área:</strong></div>
                                            <div class="col-md-3">Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Telefono:</strong></div>
                                            <div class="col-md-3">(667)712-39-45</div>
                                            <div class="col-md-3"><strong>Extención:</strong></div>
                                            <div class="col-md-3">3001</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><a href="datos_usuario.php">Ver Más Detalles...</a></div>
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
        </div><!-- / .Esta div pertenece a los usuarios activos con licencia-->
        <div class="col-md-13"><!-- /.Esta div pertenece a los usuarios inactivos -->
            <div class="box box-default  collapsed-box">
                <div class="box-header with-border" data-widget="collapse"><i class="fa fa-plus"></i>
                    <h3 class="box-title">Usuarios Inactivos o Baja Definitiva</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="proyectos_terminados">
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_terminados" href="#terminados1">
                                    <h4 class="panel-title">
                                        <a>Rafael Esparragoza Lopez</a>
                                    </h4>
                                </div>
                                <div id="terminados1" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><strong>Fecha de Ingreso:</strong></div>
                                            <div class="col-md-3">13-Febrero-2012</div>
                                            <div class="col-md-3"><strong>Fecha de Salida:</strong></div>
                                            <div class="col-md-3">23-Enero-2016</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Motivo de Baja:</strong></div>
                                            <div class="col-md-3">Personal</div>
                                            <div class="col-md-3"><strong>Puesto:</strong></div>
                                            <div class="col-md-3">Algo dentro de Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Correo Electronico:</strong></div>
                                            <div class="col-md-3">rafael_esparragoza@grupomcs.com</div>
                                            <div class="col-md-3"><strong>Área:</strong></div>
                                            <div class="col-md-3">Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Telefono:</strong></div>
                                            <div class="col-md-3">(667)712-39-45</div>
                                            <div class="col-md-3"><strong>Extención:</strong></div>
                                            <div class="col-md-3">3001</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><a href="datos_usuario.php">Ver Más Detalles...</a></div>
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
                                        <a>Jaime Alberto Lopez</a>
                                    </h4>
                                </div>
                                <div id="terminados2" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><strong>Fecha de Ingreso:</strong></div>
                                            <div class="col-md-3">06-Junio-2012</div>
                                            <div class="col-md-3"><strong>Fecha de Salida:</strong></div>
                                            <div class="col-md-3">20-Julio-2014</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Motivo de Baja:</strong></div>
                                            <div class="col-md-3">Uso personal de bienes de la empresa</div>
                                            <div class="col-md-3"><strong>Puesto:</strong></div>
                                            <div class="col-md-3">Algo dentro de Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Correo Electronico:</strong></div>
                                            <div class="col-md-3">carlos_gaxiola@grupomcs.com</div>
                                            <div class="col-md-3"><strong>Área:</strong></div>
                                            <div class="col-md-3">Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Telefono:</strong></div>
                                            <div class="col-md-3">(667)712-39-45</div>
                                            <div class="col-md-3"><strong>Extención:</strong></div>
                                            <div class="col-md-3">3001</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><a href="datos_usuario.php">Ver Más Detalles...</a></div>
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
                                        <a>José Roberto Orozco Bazua</a>
                                    </h4>
                                </div>
                                <div id="terminados3" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><strong>Fecha de Ingreso:</strong></div>
                                            <div class="col-md-3">06-Junio-2012</div>
                                            <div class="col-md-3"><strong>Fecha de Salida:</strong></div>
                                            <div class="col-md-3">20-Agosto-2014</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Motivo de Baja:</strong></div>
                                            <div class="col-md-3">Cambio de trabajo</div>
                                            <div class="col-md-3"><strong>Puesto:</strong></div>
                                            <div class="col-md-3">Algo dentro de Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Correo Electronico:</strong></div>
                                            <div class="col-md-3">rafael_esparragoza@grupomcs.com</div>
                                            <div class="col-md-3"><strong>Área:</strong></div>
                                            <div class="col-md-3">Sistemas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Telefono:</strong></div>
                                            <div class="col-md-3">(667)712-39-45</div>
                                            <div class="col-md-3"><strong>Extención:</strong></div>
                                            <div class="col-md-3">3001</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><a href="datos_usuario.php">Ver Más Detalles...</a></div>
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
        </div><!-- / .Esta div pertenece a los usuarios inactivos -->
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
        $('#tokenfield_cliente').tokenfield({
            autocomplete: {
                source: clientes(),
                delay: 100
            },
            showAutocompleteOnFocus: true
        });

        function clientes(){
            var words = new Array("Jesús Enrique Salomon Reyes", "José Martín de Jesús Corrales Pérez", "José Luis Leon Salazar");

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

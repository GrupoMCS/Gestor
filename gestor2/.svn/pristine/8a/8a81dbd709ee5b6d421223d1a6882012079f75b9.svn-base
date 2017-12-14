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
        <div class="box box-default">
            <div class="box-header with-border">

                <!--<div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>-->
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#cuenta" data-toggle="tab">Cuenta</a></li>
                            <li><a href="#empresa" data-toggle="tab">Empresa</a></li>
                            <li><a href="#personal" data-toggle="tab">Personal</a></li>
                            <li><a href="#formacion" data-toggle="tab">Formación</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="cuenta">
                                <fieldset>
                                    <legend class="scheduler-border"><a>Datos de la Cuenta:</a></legend>
                                    <div class="row form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <label for="usuario">Nombre de Usuario:</label>
                                            <input type="text" class="form-control" placeholder="Trabajo." value="José Martín de Jesús Corrales Pérez" id="usuario" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="contraseña">Contraseña:</label>
                                            <input type="password" class="form-control" placeholder="Contraseña." value="Sistemas" id="contraseña" />
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                            <label for="correo">Correo Empresarial</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Correo..." id="correo" value="martin.corrales@grupomcs.com" >
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2"><strong>Imagen:</strong></div>
                                        <div class="col-md-2">
                                            <div class="pull-left image">
                                                <img src="dist/img/user2-160x160.jpg" class="img-responsive img-thumbnail"  alt="User Image" style="max-width: 120px" />
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
                                            <div class='input-group date' id='datetimepicker2' >
                                                <input type='text' class="form-control" value="27-Diciembre-1985" id="fecha_ingreso" />
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
                                                <input type="tel" class="form-control" placeholder=" Tel Empresa..." value="7123945" id="telefono_empresa" >
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="extension">Extensión:</label>
                                            <div class="input-group">
                                                <input type="tel" class="form-control" placeholder="Celular..." value="3001" id="extension" >
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
                                                <input type="email" class="form-control" placeholder="Correo..." value="martin.corrales@grupomcs.com" id="correo_emp" >
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
                                            <input type="text" class="form-control" placeholder="Nombre(s)." value="José Martín de Jesús" id="nombre"/>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="apaterno">A. Paterno:</label>
                                            <input type="text" class="form-control" placeholder="A. Paterno." value="Corrales" id="apaterno"/></div>
                                        <div class="col-md-3">
                                            <label for="amaterno">A. Materno:</label>
                                            <input type="text" class="form-control" placeholder="A. Materno" value="Pérez" id="amaterno"/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <label for="nacimiento">Fecha de Nacimiento:</label>
                                            <div class='input-group date' id='datetimepicker1' >
                                                <input type='text' class="form-control" value="27-Diciembre-1985"  id="nacimiento"/>
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tel_personal">Telefono Fijo Personal:</label>
                                            <div class="input-group">
                                                <input type="tel" class="form-control" placeholder="Domestico..." value="7133256" id="tel_personal">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="tel_mpersonal">Telefono Movil Personal:</label>
                                            <div class="input-group">
                                                <input type="tel" class="form-control" placeholder="Celular..." value="6672202263" id="tel_mpersonal">
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
                                                <input type="email" class="form-control" placeholder="Correo..." value="cometin111@hotmail.com" id="correo_per">
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
                                            <input type="text" class="form-control" placeholder="Calle." value="Rey de Austria" id="calle" /></div>
                                        <div class="col-md-2">
                                            <label for="num_int">Número Int.:</label>
                                            <input type="text" class="form-control" placeholder="Número Int." value="0" id="num_int" /></div>
                                        <div class="col-md-2">
                                            <label for="num_ext">Número Ext.:</label>
                                            <input type="text" class="form-control" placeholder="Número Int." value="4246" id="num_ext" /></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-1"><strong></strong></div>
                                        <div class="col-md-4">
                                            <label for="colonia">Colonia:</label>
                                            <input type="text" class="form-control" placeholder="Colonia." value="Fracc. Porta Real II" id="colonia" />                                            </div>
                                        <div class="col-md-2">
                                            <label for="cp">C.P.:</label>
                                            <input type="text" class="form-control" placeholder="CP." value="80080" id="cp" /></div>
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
                                            <input type="text" class="form-control" placeholder="Municipio." value="Culiacan" id="municipio" />
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
                                            <input type="text" class="form-control" placeholder="Escuela" value="Instituto Tecnologico de Culiacán" id="escuela"/></div>
                                        <div class="col-md-3">
                                            <label for="carrera">Carrera:</label>
                                            <input type="text" class="form-control" placeholder="Carrera" value="Ing. en Sistemas Computacionales" id="carrera"/>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <label for="egreso">Fecha de Egreso:</label>
                                            <div class='input-group date' id='datetimepicker3' >
                                                <input type='text' class="form-control" value="27-Diciembre-1985"  id="egreso"/>
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
                                                    <a>PHP Nivel Basico</a>
                                                </h4>
                                            </div>
                                            <div id="curso1" class="panel-collapse collapse">
                                                <div  class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Nombre del Curso:</strong></div>
                                                        <div class="col-md-3">PHP Nivel Basico</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Descripción:</strong></div>
                                                        <div class="col-md-9">Este curso de PHP te enseñará las técnicas necesarias para la creación de
                                                            aplicaciones web del lado del servidor, con acceso a recursos como sesiones, envío de datos
                                                            entre páginas, bases de datos, servidores de correo, etc. Te servirá de base para enfrentarte
                                                            a cualquier objetivo avanzado dentro del mundo del desarrollo web.
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Fecha de Inicio:</strong></div>
                                                        <div class="col-md-3">08-Enero-2015</div>
                                                        <div class="col-md-3"><strong>Fecha de Termino:</strong></div>
                                                        <div class="col-md-3">12-Marzo-2015</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Duración:</strong></div>
                                                        <div class="col-md-3">40 horas</div>
                                                        <div class="col-md-3"><strong>Tipo de Curso:</strong></div>
                                                        <div class="col-md-3">Video Tutorial</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Calificación:</strong></div>
                                                        <div class="col-md-3">No Aplica</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" data-toggle="collapse" data-parent="#curso_recibido" href="#curso2">
                                                <h4 class="panel-title">
                                                    <a>PHP Nivel Intermedio</a>
                                                </h4>
                                            </div>
                                            <div id="curso2" class="panel-collapse collapse">
                                                <div  class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Nombre del Curso:</strong></div>
                                                        <div class="col-md-3">PHP Nivel Intermedio</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Descripción:</strong></div>
                                                        <div class="col-md-9">El curso intermedio es para los que dominan los conceptos básicos del lenguaje.
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Fecha de Inicio:</strong></div>
                                                        <div class="col-md-3">08-Junio-2015</div>
                                                        <div class="col-md-3"><strong>Fecha de Termino:</strong></div>
                                                        <div class="col-md-3">12-Septiembre-2015</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Duración:</strong></div>
                                                        <div class="col-md-3">40 horas</div>
                                                        <div class="col-md-3"><strong>Tipo de Curso:</strong></div>
                                                        <div class="col-md-3">Video Tutorial</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"><strong>Calificación:</strong></div>
                                                        <div class="col-md-3">No Aplica</div>
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
            </div><!-- /.box-body -->
        </div><!-- /.box -->
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
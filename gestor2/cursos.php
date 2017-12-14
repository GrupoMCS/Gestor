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
        <div class="col-md-13"><!-- ./Esta div pertenece a los cursos nuevos -->
            <div class="box box-default">
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="cursos_nuevos">
                            <!--inicio de caja para agregar cursos-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#cursos_nuevos" href="#nuevas">
                                    <h4 class="panel-title">
                                        <a>Agregar Curso...</a>
                                    </h4>
                                </div>
                                <div id="nuevas" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="fc-row">
                                            <!-- Custom Tabs -->
                                            <div class="nav-tabs-custom">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                                                    <li><a href="#fichat" data-toggle="tab">Ficha Técnica</a></li>
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
                                                    <div class="tab-pane active" id="general">
                                                        <fieldset>
                                                            <legend class="scheduler-border"><a>Datos del Curso:</a></legend>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-4">
                                                                    <label for="curso">Nombre del Curso:</label>
                                                                    <input type="text" class="form-control" placeholder="Nombre del Curso." id="curso" />
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-10">
                                                                    <label for="descripcion">Descripcion del Curso</label>
                                                                        <textarea type="textarea" class="form-control" placeholder="Descripción..." id="descripcion"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-2">
                                                                    <label for="tipo">Tipo:</label>
                                                                    <select class="form-control" id="tipo">
                                                                        <option>Online</option>
                                                                        <option>Presencial</option>
                                                                        <option>Video Tutorial</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="duracion">Duración:</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" value="40 Horas" id="duracion">
                                                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="disp">Disponibilidad:</label>
                                                                        <select class="form-control" id="disp">
                                                                            <option>Disponible</option>
                                                                            <option>Cerrado</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div><!-- /.tab-pane -->
                                                    <div class="tab-pane" id="fichat">
                                                        <fieldset>
                                                            <legend class="scheduler-border"><a>Temario:</a></legend>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-3">
                                                                    <strong><label for="nModulo">Nómbre del Modulo:</label></strong>
                                                                    <input type="text" class="form-control" placeholder="Modulo" id="nModulo" /></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-9">
                                                                    <label for="descripcion2"><strong>Desccripción del Modulo:</strong></label>
                                                                    <textarea type="text" class="form-control" placeholder="Descripción del Modulo" id="descripcion2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-2">
                                                                    <a class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-default btn btn-default">Agregar Modulo</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!--<div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Modulo</th>
                                                                        <th>Descripción</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td><input></input></td>
                                                                            <td><textarea name="nModulo" id="mod"
                                                                                                    cols="90"
                                                                                                    rows="2"></textarea></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Condiciones y Control de Flujo</td>
                                                                            <td>El Control de flujo es un programa que decide realizar una acción en lugar de otra.
                                                                                EN PHP podemos usar 'if' y 'else' para hacer esto.</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Control de Flujo Switch</td>
                                                                            <td>La sentencia switch te deja realizar operaciones de control de flujo más complejas
                                                                                sin usar cadenas interminables de 'if' y 'else'.</td>
                                                                        </tr>




                                                                    </tbody>
                                                                </table>
                                                            </div>-->
                                                        </fieldset>
                                                        <div class="row form-group">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-9">
                                                                <fieldset>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Modulo</th>
                                                                                <th>Descripción</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Introducción a PHP</td>
                                                                                <td>Este tutorial te presentará PHP, un lenguaje de programación del lado
                                                                                    del servidor que podés usar para hacer sitios web dinámicos y aplicaciones web.</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
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
                    <h3 class="box-title">Capacitaciones</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="content-wraper">
                        <div class="panel-group" id="usuarios_activos">
                            <!--inicio de caja para agregar usuario-->
                            <div class="panel panel-default">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#usuarios_activos" href="#activos1">
                                    <h4 class="panel-title">
                                        <a>Curso PHP Nivel Basico</a>
                                    </h4>
                                </div>
                                <div id="activos1" class="panel-collapse collapse">
                                    <div  class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3"><strong>Nombre:</strong></div>
                                            <div class="col-md-3">Curso PHP Nivel Basico.</div>
                                            <div class="col-md-3"><strong></strong></div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Descripcion:</strong></div>
                                            <div class="col-md-9">Este curso de PHP te enseñará las técnicas necesarias para la creación
                                                                de aplicaciones web del lado del servidor, con acceso a recursos como sesiones,
                                                                envío de datos entre páginas, bases de datos, servidores de correo, etc.</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Tipo:</strong></div>
                                            <div class="col-md-3">Online</div>
                                            <div class="col-md-3"><strong>Duración:</strong></div>
                                            <div class="col-md-3">40 Horas</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><strong>Disponibilidad:</strong></div>
                                            <div class="col-md-3">Disponible</div>
                                            <div class="col-md-3"><strong></strong></div>
                                            <div class="col-md-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"><a data-toggle="collapse" data-parent="#activos1" href="#activos-footer">Detalles...</a></div>
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3"><strong></strong></div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="activos-footer" class="panel-collapse collapse">
                                    <div class="panel-footer">
                                        <fieldset>
                                            <legend class="scheduler-border"><a>Temario:</a></legend>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Modulo</th>
                                                        <th>Descripción</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Introducción a PHP</td>
                                                        <td>Este tutorial te presentará PHP, un lenguaje de programación del lado
                                                            del servidor que podés usar para hacer sitios web dinámicos y aplicaciones web.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Condiciones y Control de Flujo</td>
                                                        <td>El Control de flujo es un programa que decide realizar una acción en lugar de otra.
                                                            EN PHP podemos usar 'if' y 'else' para hacer esto.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Control de Flujo Switch</td>
                                                        <td>La sentencia switch te deja realizar operaciones de control de flujo más complejas
                                                            sin usar cadenas interminables de 'if' y 'else'.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Arrays (Arreglos)</td>
                                                        <td>Los array te permiten almacenar listas de información en una única variable.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Ciclos For en PHP</td>
                                                        <td>Los Array son geniales, pero iterar sobre ellos para usar cada elemento en el array es
                                                            todavía mejor. ¡Podemos hacer eso con los ciclos!</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Ciclos While en PHP</td>
                                                        <td>A veces no sabemos de antemano cuántos ciclos vamos a necesitar. En esos casos,
                                                            podemos usar una estructura diferente: un ciclo while.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Funciones, Parte I</td>
                                                        <td>Las funciones son bits de código reutilizables que podemos usar para hacer que
                                                            nuestros programas sean más eficientes. PHP tiene más de 700 funciones incorporadas,
                                                            ¡aprendamos algunas!</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Funciones, Parte II</td>
                                                        <td>PHP también permite definir nuestras propias funciones. ¡Aprendamos a hacerlo!</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Objetos en PHP</td>
                                                        <td>Los objetos son combinaciones de datos (variables) y acciones (funciones). En este curso,
                                                            vamos a conocer cómo funcionan los objetos en PHP y a aprender cómo crear los nuestros.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>PHP programación orientada a objetos</td>
                                                        <td>Los objetos PHP son instancias de clases. En este curso vamos a aprender más sobre
                                                            clases y veremos otros temas, como la herencia.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Array (Arreglos) avanzados</td>
                                                        <td>En este curso veremos usos más avanzados de la estructura de datos de los array (arreglos).</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de caja para agregar proyecto (repetir por usuario)-->
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- / .Esta div pertenece a los usuarios activos-->
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

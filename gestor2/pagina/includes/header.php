<header class="main-header">
  <!-- Logo -->
  <!-- Logo -->
  <a href="principal.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>MCS</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Grupo </b>MCS</span>
  </a>
  <!-- Header Barra de Navegacion: El estilo esta en header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>

              <!--Aqui establecer por medio de variable la cantidad en sistema (ciclos) -->
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes mensajes nuevos</li>
              <li>
                <!-- Menu Interno: Contiene los datos actuales -->
                <ul class="menu">
                  <li><!-- Inicio del mensaje -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- Imagen del Usuario en el mensaje -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                      </div>
                      <h4>
                        <!-- REsponsable del Mensaje -->
                        Area de Diseño
                        <!-- Tiempo de envio del mensaje -->
                        <small><i class="fa fa-clock-o"></i> 5 minutos</small>
                      </h4>
                      <!-- Titulo de Mensaje -->
                      <p>Nuevos diseño de tema</p>
                    </a>
                  </li><!-- Fin del mensaje -->
                  <!-- Repetir bloque de mensaje anterior hasta fin de los mensajes sin leer -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver Todos</a></li>
            </ul>
          </li>
          <!-- Notificaciones: el estilo se encuentra dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <!-- Numero de notificaciones pendientes -->
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes notificaciones pendientes</li>
              <li>
                <!-- Menu interno: Contiene los datos nuevos -->
                <ul class="menu">
                  <li>
                    <a href="#">
                        <!-- la clase fa-users pertenece al logo a usar para hacer referencia al tipo de Advertencia seguido
                        de mensaje en texto -->
                      <i class="fa fa-users text-aqua"></i>Nuevos integrantes al equipo
                    </a>
                  </li>
                  <!-- Hacer esto repetidamente hasta mostrar todas las notificaciones pendientes -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver Todas</a></li>
            </ul>
          </li>
          <!-- Tareas: El estilo esta en dropdown.less (Funcionalidad opcional) -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes tareas nuevas asignadas</li>
              <li>
                <!-- Menu Interno: Contiene los datos nuevos -->
                <ul class="menu">
                  <li><!-- Item tarea -->
                    <a href="#">
                      <h3>
                        <!-- Titulo de la Tarea -->
                        Diseñar botones
                        <!-- Porcentaje de avance de la tarea -->
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <!-- Barra de progreso -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <!-- Progreso en texto -->
                          <span class="sr-only">20% completo</span>
                        </div>
                      </div>
                    </a>
                  </li><!-- Termina item de tarea -->
                  <!-- hacer esto en ciclos hasta mostrar todas las tareas nuevas -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver Todos</a>
              </li>
            </ul>
          </li>
          <!-- Cuenta de usuario : El estilo esta en dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- Imagen de usuario -->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
              <!-- Nombre de usuario -->
              <span class="hidden-xs">Martin Corrales</span>
            </a>
            <ul class="dropdown-menu">
              <!-- Imagen de usuario en menu interno -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                <p>
                  <!-- Nombre y puesto del usuario -->
                  Martin Corrales - Web Developer
                  <!-- otro dato del usuario (opcional) -->
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Cuerpo de menu interno (opcional) -->
              <li class="user-body">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </li>
              <!-- Pie de menu interno-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- Boton de perfil de usuario -->
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <!-- Boton de Cerrar Cesion-->
                  <a href="#" class="btn btn-default btn-flat">Cerrar Cesion</a>
                </div>
              </li>
            </ul>
          </li>
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Columna del lado izquierdo. Contiene logo asi como la barra lateral  -->
      <aside class="main-sidebar">
        <!-- sidebar: el estilo esta en sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar Panel de usuario -->
          <div class="user-panel">
            <div class="pull-left image">
              <!-- Imagen del usuario en circulo-->
              <img src="../gestor2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <!-- Nombre de Usuario-->
              <p>Martín Corrales</p>
              <!-- Estatus en el sistema-->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : el estilo se encuentra en sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview"><!-- Primer item Inicia ------------------------------------------------------>
              <a href="#">
                <!-- Clase fa-dashboard contiene el logo para usar en el item del menu seguido del nombre del item
                      Clase fa-angle-left y pull-right son los signos "<" y "V" para el menu desplegado o  -->
                <i class="fa fa-gears"></i> <span>Panel de Control</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <!-- Submenu -->
              <ul class="treeview-menu">
                <li><a href="perfil.php"><i class="fa fa-user"></i>Perfil</a></li>
                <li><a href="#"><i class="fa fa-desktop"></i>Config. de Escritorio</a></li>
                <li><a href=""><i class="fa fa-leanpub"></i>Catalogos</a></li>
              </ul>              
            </li><!-- Fin de item
              Repetir item hasta completar menu  -------------------------------------------------------------------------- -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-angellist"></i><span>Proyectos</span> <small class="fa fa-angle-left pull-right"></small>
              </a>
               <ul class="treeview-menu">
                <li><a href="banco_proyectos.php"><i class="fa fa-cloud"></i>Banco de Proyectos</a></li>
                <li><a href="#"><i class="fa fa-puzzle-piece"></i>Peticiones</a></li>
                <li><a href="#"><i class="fa fa-exchange"></i>Seguimiento</a></li>
                <li><a href="#"><i class="fa fa-bank"></i>Recursos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-list-ul"></i> <span>Tareas</span> <small class="fa fa-angle-left pull-right"></small>
              </a>
               <ul class="treeview-menu">
                <li><a href="tareas_personales.php"><i class="fa fa-hand-o-up"></i>Personales</a></li>
                <li><a href="tareas_proyectos.php"><i class="fa fa-hand-o-down"></i>Proyectos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i> <span>Administración</span> <small class="fa fa-angle-left pull-right"></small>
              </a>
               <ul class="treeview-menu">
                   <li>
                       <a href="empleados.php"><i class="fa fa-users"></i>Empleados<i class="fa fa-angle-left pull-right"></i></a>
                       <ul class="treeview-menu">
                           <li><a href="empleados.php"><i class="fa fa-child"></i>Nomina</a></li>
                           <li><a href="cursos.php"><i class="fa fa-graduation-cap"></i>Capacitación</a></li>
                           <li>
                               <a href="#"><i class="fa fa-circle-o"></i>otros<i class="fa fa-angle-left pull-right"></i></a>
                               <ul class="treeview-menu">
                                   <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                   <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                               </ul>
                           </li>
                       </ul>
                   </li>
                <li><a href="#"><i class="fa fa-line-chart"></i>Informes</a></li>
                <li><a href="#"><i class="fa fa-sitemap"></i>Mapa de Proyecto</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Mis Calendarios</span> <small class="fa fa-angle-left pull-right"></small>
              </a>
               <ul class="treeview-menu">
                <li><a href="cal_personal.php"><i class="fa fa-calendar-o"></i>Personales</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>Proyecto</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Documentación</span> <small class="fa fa-angle-left pull-right"></small>
              </a>
               <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-support"></i>Doc. de Soporte</a></li>
                <li><a href="#"><i class="fa fa-folder"></i>Doc. de Proyecto</a></li>
                <li><a href="#"><i class="fa fa-file-pdf-o"></i>Formatos de Trabajo</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
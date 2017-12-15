<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <?php
    //include('config.php');
    //include('pagina/includes/head.php');
    ?>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminLTE 2 | Starter</title>
      <?php
        //include('config.php');
        include('../gestor2/pagina/includes/head.php');
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
          include '../gestor2/pagina/includes/header.php';
          include '../gestor2/pagina/includes/aside.php';
          ?>

    <!-- Content Wrapper. En esta div se cargara todo el contenido de la pagina -->
    <div class ="content-wrapper">

      

    </div><!-- ./content-wrapper -->

    <?php
      include '../gestor2/pagina/includes/footer.php';
      include '../gestor2/pagina/includes/aside2.php';
    ?>
    </div><!-- ./wrapper -->
    <?php
      include '../gestor2/pagina/includes/jsfooter.php';
    ?>
  </body>
</html>

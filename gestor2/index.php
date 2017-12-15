<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<?php
	include('../gestor2/config.php');
	include('../gestor2/pagina/includes/head.php');
	?>
	<link href="plugins/modal/modal.css" rel="stylesheet">
</head>


	<!-- Clase para dar borde a la pagina completa
		<body class="skin-blue layout-boxed sidebar-mini">   -->
	<body class ="skin-blue">

		<!-- Content Wrapper. En esta div se cargara todo el contenido de la pagina -->
		<div class="content-wrapper">

			<!-- BEGIN # MODAL LOGIN -->
			<div class="modal fade in" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
				<div class="modal-dialog">
					<br/><br/><br/><br/><br/><br/><br/>
					<div class="modal-content">
						<div class="modal-header" align="center">
							<img class="img-circle" id="img_logo" src="dist/img/mcs.jpg">
						</div>

						<!-- Begin # DIV Form -->
						<div id="div-forms">

							<!-- Begin # Login Form -->
							<form id="login-form">
								<div class="modal-body">
									<div id="div-login-msg">
										<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
										<span id="text-login-msg">Escribe tu usuario.</span>
									</div>
									<input id="login_username" class="form-control" type="text" placeholder="Usuario" required>
									<input id="login_password" class="form-control" type="password" placeholder="Contraseña" required>
								</div>
								<div class="modal-footer">
									<div>
										<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
									</div>
									<div>
										<button id="login_lost_btn" type="button" class="btn btn-link">Recordar Contraseña?</button>
									</div>
								</div>
							</form>
							<!-- End # Login Form -->

							<!-- Begin | Lost Password Form -->
							<form id="lost-form" style="display:none;">
								<div class="modal-body">
									<div id="div-lost-msg">
										<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
										<span id="text-lost-msg">Escribe tu correo electronico registrado</span>
									</div>
									<input id="lost_email" class="form-control" type="text" placeholder="Correo" required>
								</div>
								<div class="modal-footer">
									<div>
										<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
									</div>
									<div>
										<button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
									</div>
								</div>
							</form>
							<!-- End | Lost Password Form -->
						</div>
						<!-- End # DIV Form -->
					</div>
				</div>
			</div>
			<!-- END # MODAL LOGIN -->

		<!-- Add the sidebar's background. This div must be placed
		immediately after the control sidebar 
		<div class  ="control-sidebar-bg"></div>-->
		</div><!-- ./wrapper -->

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

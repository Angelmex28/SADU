<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">


    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Registrar | SADU</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="partials/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="partials/css/header.css" rel="stylesheet">
    <link href="partials/css/responsive.css" rel="stylesheet">
    <link href="partials/css/estilos.css" rel="stylesheet">
    <link href="partials/css/normalize.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-color: rgb(56,60,68);">
<?php require 'header_login.php' ?> <br>
<main>
		<div class="w-100" style="padding:1em 0 3em;">
                <h1 style="font-size: 40px; justify-content: center; text-align: center;"><a href="login.php">Iniciar Sesión o</a></h1>
                <h1 class="text-white" style="font-size: 40px; justify-content: center; text-align: center;">Registrar:</h1>
				</div>
				<h3 class="text-white text-center" style="font-size: 30px; margin-top: 0px;"><b>SADU</b></h3>
    <!-------------------formulario----------------------------------->
    <form action="registrar_conexion.php" method="POST" class="formulario" id="formulario" enctype="multipart/form-data">

<style>
	.form-control-sm {
	background: rgb(232, 240, 254);
}
</style>


			<div class="formulario__grupo" id="grupo__firstname">
				<label for="firstname" class="formulario__label">Primer Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="form-control form-control-sm" name="firstname" id="firstname" placeholder="Antonio" required="" style="background: rgb(232, 240, 254);">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

                        <div class="formulario__grupo" id="grupo__middlename">
				<label for="middlename" class="formulario__label">Segundo Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="form-control form-control-sm" name="middlename" id="middlename" placeholder="José" required="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__lastname">
				<label for="lastname" class="formulario__label">Apellido</label>
				<div class="formulario__grupo-input">
					<input type="text" class="form-control form-control-sm" name="lastname" id="lastname" placeholder="Guerrero" required="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

                        <!-- Grupo: Dirección -->
			<div class="formulario__grupo" id="grupo__address">
				<label for="address" class="formulario__label">Dirección</label>
				<div class="formulario__grupo-input">
				<input type="text" class="form-control form-control-sm" name="address" id="address" placeholder="Calle 1 entre carrera 2 casa n 2-124" required="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 30 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__email">
				<label for="email" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="correo@correo.com" required="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>


			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__contact">
				<label for="contact" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="form-control form-control-sm" name="contact" id="contact" placeholder="04244912345" required="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>


			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="form-control form-control-sm" name="password" id="password" required="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="form-control form-control-sm" name="password2" id="password2" required="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>


			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="btn-block btn btn-primary" style="border-color: #d8d8d8; border-width: 3px; border-style: solid; margin: 0.5rem 0 1rem" value="registrar" name="registrar">Registrar</button>
			</div>
	
	</form>
                  <!-----------hasta aqui form----------------------->
            </div>
            </div> 
        </div>

	<script src="partials/js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/script.js"></script>
 </main>

</body>
</html>
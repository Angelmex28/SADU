<!DOCTYPE html>
<html lang="es">
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | SADU</title>
 	

<?php include('./header.php'); ?>
<?php require 'header_login.php' ?>  
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    position: fixed;
	    top:0;
	    left: 0
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		display: flex;
	}

</style>

<body class="bg-dark">


  <main id="main" >
  	
  <div class="align-self-center w-100">
	  <div style="padding: 4em 0 0em">
			<h1 style="font-size: 35px" class="text-white text-center"><a href="../registro/registrar.php">Registrar o </a> </h1>
    		<h1 style="font-size: 35px" class="text-white text-center">Iniciar Sesión:<br></h1>
			</div>
			
		<h3 class="text-white text-center" style="font-size: 25px;"><b>SADU</b></h3>
  		<div id="login-center" class="bg-dark row justify-content-center">
  			<div class="card col-md-4" style="border-radius: 1rem; box-shadow: 7px 13px 37px #000;">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="email" class="control-label text-dark">Correo Electrónico</label>
  							<input type="text" id="email" name="email" class="form-control form-control-sm" style="margin: 0.5rem 0 1.5rem">
  						</div>
						  <br>
  						<div class="form-group">
  							<label for="password" class="control-label text-dark">Contraseña</label>
  							<input type="password" id="password" name="password" class="form-control form-control-sm" style="margin: 0.5rem 0 1.5rem">
  						</div>
						  <li><a href="">Recuperar Contraseña</a></li>
  						<center><button class="btn-block btn btn-primary" style="border-color: #d8d8d8; border-width: 3px; border-style: solid; margin: 0.5rem 0 1rem;">Ingresar</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
  		</div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Nombre de usuario o contraseña incorrecta.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
	$('.number').on('input',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        $(this).val(val)
    })
</script>	
</html>
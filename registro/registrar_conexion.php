<?php
if (isset($_POST['registrar'])) {
	
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$middlename = trim($_POST['middlename']);
	$contact = trim($_POST['contact']);
	$address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
	$type = 2;
    $avatar = 0;
    $date_created = date("d/m/y");

	$conn = mysqli_connect('localhost','root','','compartir_documentos');

	$pass_fuerte = md5 ($password);
	$query = "INSERT INTO `users` (`firstname`, lastname, middlename, 
	contact, `address`, email, `password`, `type`, avatar, date_created) 
	VALUES ('$firstname', '$lastname', '$middlename', '$contact', '$address',
	 '$email', '$pass_fuerte', '$type', '$avatar', '$date_created')";

//Verificar Correo electronico para que no se repita

$verificar_correo = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' ");

if(mysqli_num_rows($verificar_correo) > 0){
	echo'
	<script>
			alert("Este correo ya está registrado, intenta con otro diferente");
			window.location = "../index.php";
	</script>
	';
	exit();
}

	$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "error al registrar datos";
	}else{

	echo'
	<script>
			alert("Usuario registrado con éxito");
			window.location = "login.php";
	</script>
	';
	exit();

	}
}
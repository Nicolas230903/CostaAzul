<?php
require_once("Conexion/conexion.php"); 

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$pdo = conectar();
		
	$abm_Login = $pdo->prepare("SELECT * FROM Usuarios where Email ='$email' and Password='$password'");

	$abm_Login->execute();

	foreach($abm_Login->fetchAll(PDO::FETCH_ASSOC) as $row_Usuario){
		setcookie("login", 										"ok", time()+30*24*60*60, "/", "",  0);
		setcookie("Usuario_ID", 	   					$row_Usuario['Usuario_ID'], time()+30*24*60*60, "/", "",  0);
		setcookie("nombre", 									$row_Usuario['Nombre'], time()+30*24*60*60, "/", "",  0);
		setcookie("apellido", 						$row_Usuario['apellido'], time()+30*24*60*60, "/", "", 0);
		setcookie("CUIT", 						$row_Usuario['CUIT'], time()+30*24*60*60, "/", "", 0);
		setcookie("DNI", 						$row_Usuario['DNI'], time()+30*24*60*60, "/", "", 0);
		setcookie("Email", 						$row_Usuario['Email'], time()+30*24*60*60, "/", "", 0);
		setcookie("Nivel", 						$row_Usuario['Nivel'], time()+30*24*60*60, "/", "", 0);
	};

	if ($_COOKIE['Usuario_ID'] == ""){
			header("location:index.php?error=AGUS");
	} else {
		header("Location: index.php?nivel=" . urlencode($row_Usuario['Nivel']));
	};

};
?>
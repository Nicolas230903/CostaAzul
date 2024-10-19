<?php
require_once("Conexion/conexion.php"); 

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
	$usuario=$_POST['nombre'];
	$contrasena=$_POST['apellido'];
	
	$pdo = conectar();
		
	$abm_Login = $pdo->prepare("SELECT * FROM Usuarios where nombre ='$usuario' and contrasenausuario='$contrasena'");

	$abm_Login->execute();

	foreach($abm_Login->fetchAll(PDO::FETCH_ASSOC) as $row_Usuario){
		setcookie("login", 										"ok", time()+30*24*60*60, "/", "",  0);
		setcookie("Usuario_ID", 	   					$row_Usuario['Usuario_ID'], time()+30*24*60*60, "/", "",  0);
		setcookie("nombre", 									$row_Usuario['Nombre'], time()+30*24*60*60, "/", "",  0);
		setcookie("apelldio", 						$row_Usuario['nivelusuario'], time()+30*24*60*60, "/", "", 0);

	};

	if ($_COOKIE['idusuario'] == ""){
			header("location:index.php?error=2");
	} else {
		header("location:switch.php");
	};

};
?>
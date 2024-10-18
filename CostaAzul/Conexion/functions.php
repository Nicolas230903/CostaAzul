<?php
include_once('conexion.php');

// Verifica si la función existe
// if (function_exists('conectar')) {
//     echo 'La función conectar() está definida.';
// } else {
//     echo 'La función conectar() NO está definida.';
// }

date_default_timezone_set('America/Argentina/Buenos_Aires');
	
	//Formato utilizado para la fecha => format("d/m/Y H:i:s");

	$pdo = conectar();

	$abm_Empresa = $pdo->prepare("SELECT * FROM empresa where idempresa = 1");

	$abm_Empresa->execute();

	foreach($abm_Empresa->fetchAll(PDO::FETCH_ASSOC) as $row_Empresa){
		$nombreempresa                  = $row_Empresa['nombreempresa'];
		$rsocialempresa                 = $row_Empresa['rsocialempresa'];
		$cuitempresa                    = $row_Empresa['cuitempresa'];
		$telefonoempresa                = $row_Empresa['telefonoempresa'];
		$mailempresa                    = $row_Empresa['mailempresa'];
		$iibbempresa                    = $row_Empresa['iibbempresa'];
		$inicioactividadempresa         = $row_Empresa['inicioactividadempresa'];
		$direccionempresa               = $row_Empresa['direccionempresa'];
		$localidadempresa               = $row_Empresa['localidadempresa'];
		$situivaempresa                 = $row_Empresa['situivaempresa'];
		$limiteReportes                 = $row_Empresa['limitereportes'];
		$literalsEstadoArticulo         = $row_Empresa['literalsarticulo'];
		$literalsEstadoCliente          = $row_Empresa['literalscliente'];
		$literalsEstadoProveedor        = $row_Empresa['literalsproveedor'];
		$literalsEstadoComprobante      = $row_Empresa['literalscomprobante'];
		$literalsEstadoLineaComprobante = $row_Empresa['literalslineacomprobante'];
		$CantdtolineaComprobante        = $row_Empresa['dtolineacomprobante'];
		$CantdtototalComprobante        = $row_Empresa['dtototalcomprobante'];
		$literalsEstadoComprobante      = $row_Empresa['literalscomprobante'];
		$usadobleunidadmedida				    = $row_Empresa['dobleunidadmedida'];
		$usadepositoenLinea							= $row_Empresa['depositoenlinea'];
		$usaarticulobase								= $row_Empresa['articulobase'];
		$utilizaproduccion							= $row_Empresa['produccion'];
	};

	$abm_Sistema = $pdo->prepare("SELECT * FROM sistema ");
	
	$abm_Sistema->execute();

	foreach($abm_Sistema->fetchAll(PDO::FETCH_ASSOC) as $row_Sistema){
		$idsistema           = $row_Sistema['idsistema'];
		$nombresistema       = $row_Sistema['nombresistema'];
		$versionsistema      = $row_Sistema['versionsistema'];
		$fechaversionsistema = $row_Sistema['fechaversionsistema'];
	};
	
$pdo = cerrarConexion($pdo);
?>
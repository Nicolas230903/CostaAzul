<?php 
require_once("Conexion/Requeridos.php");

$hoy = date('Y-m-d');

@$funcion           = $_GET['funcion'];   // 1 = Articulos | 2 = Clientes | 3 = Formasdepago | 4 = familia | 10 = Proveedores
                                          // 5 = Lista de Precio | 6 = Unidades | 7 = Vendedores | 8 = Localidades | 9 = Zonas
                                          // 11 = Actualizar Precios 

@$tipodecomprobante = $_GET['tipodecomprobante'];  // 1 = Clientes | 2 = Proveedores | 3 = Produccion | 4 = MovStock 

?>
<?php 
include_once("Menu/header.php"); // carga de html y script
?>
<body>
  <?php 
  include_once('Menu/menu_lateral.php'); // menu lateral
  include_once('Menu/menu_superior.php'); //menu superior
  ?>
  <?php
  if($funcion == 1){
    include_once('Abm/Articulos/Articulos.php');
  } elseif ($funcion == 2){
    include_once('Abm/Clientes/Clientes.php');
  } elseif($funcion == 3){
    include_once('Abm/Formasdepago/Formasdepago.php');
  } elseif($funcion == 4){
    include_once('Abm/Familias/Familias.php');
  } elseif($funcion == 5){
    include_once('Abm/Listadeprecios/Listadeprecios.php');
  } elseif($funcion == 6){
    include_once('Abm/Unidades/Unidades.php');
  } elseif($funcion == 7){
    include_once('Abm/Vendedores/Vendedores.php');
  } elseif($funcion == 8){
    include_once('Abm/Localidades/Localidades.php');
  } elseif($funcion == 9){
    include_once('Abm/Zonas/Zonas.php');
  } elseif($funcion == 10){
    include_once('Abm/Proveedores/Proveedores.php');
  } elseif($funcion == 11){
    include_once('Abm/Ajusteprecios/Ajusteprecios.php');
  }elseif($funcion == 12){
    include_once('Abm/CondPago/CondPago.php');
  }elseif($funcion == 13){
    include_once('Abm/Transportes/transportes.php');
  }elseif($funcion == 14){
    include_once('Abm/Provincias/provincias.php');
  }elseif($funcion == 15){
    include_once('Comprobantes/list_ComprobantesEmitidos.php');
  }elseif($funcion == 16){
    include_once('Abm/Empresas/empresas.php');
  }elseif($funcion == 17){
    include_once('Abm/Comprobantes/comprobantes.php');
  }elseif($funcion == 18){
    include_once('Abm/Usuarios/Usuarios.php');
  }elseif($funcion == 19){
    include_once('Reportes/Articulos_Inventario.php');
  }elseif($funcion == 20){
    include_once('Reportes/Articulos_Estados.php');
  }elseif($funcion == 21){
    include_once('Reportes/Ventas_Clientes.php');
  }elseif($funcion == 22){
    include_once('Reportes/Ventas_Articulos.php');
  }elseif($funcion == 23){
    include_once('Reportes/Stock_Articulos.php');
  }elseif($funcion == 24){
    include_once('Reportes/Articulos_Pendientes.php');
  }

  ;
  ?>
  <?php
    include_once("Menu/pie.php"); // pie version y datos
  ?>
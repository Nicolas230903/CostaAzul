<?php 
// Si necesitas incluir archivos PHP, lo puedes hacer aquí.
// Por ejemplo, si tienes un archivo de configuración:
// require_once('config.php'); 
?>

<!DOCTYPE html>
<html lang="es" data-theme="garden">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Costa Azul</title>
  <link rel="icon" href="images/Inicio_img.ico">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link href="./css/index.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./index.js" type="text/javascript" defer></script>
  <script src="./components/header/header.js" type="text/javascript" defer></script>
  <script src="./components/navbar/navbar.js" type="text/javascript" defer></script>
  <script src="./components/servicios/servicios.js" type="text/javascript" defer></script>
  <script src="./components/sobre-nosotros/sobre-nosotros.js" type="text/javascript" defer></script>
  <script src="./components/contactanos/contactanos.js" type="text/javascript" defer></script>
  <script src="./components/footer/footer.js" type="text/javascript" defer></script>
</head>

<body class="w-full max-w-screen min-h-screen h-screen">
  <header-component class="flex w-full h-full"></header-component>
  <servicios-component id="services" class="flex w-full h-auto md:h-[200%]"></servicios-component>
  <nosotros-component id="nosotros" class="w-auto h-auto md:h-[250%]"></nosotros-component>
  <contacto-component id="contacto" class="w-auto h-auto md:h-[100%]"></contacto-component>
  <footer-component class="w-auto h-auto lg:h-[100%] "></footer-component>
</body>

</html>

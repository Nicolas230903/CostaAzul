<?php
include_once('../../Conexion/conexion.php');

    $pdo = conectar();
    $GetProd = $pdo->prepare("SELECT * from Productos");
    $GetProd->execute();

    $lista = $GetProd->fetchAll(PDO::FETCH_ASSOC);
    foreach($lista as $row){

    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../index.js" type="text/javascript" defer></script>
  <script src="../components/navbar/navbar.js" type="text/javascript" defer></script>
  <script src="../components/footer/footer.js" type="text/javascript" defer></script>
  <style>
    /* Contenedor de las tarjetas */
    .row {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin: 0 auto;
      max-width: 1200px;
    }

    /* Estilos para cada tarjeta */
    .card-prod {
      position: relative;
      width: 260px; /* Tamaño más pequeño */
      height: 300px;
      margin: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 2px solid #f7952e;
      text-align: center;
      background-color: white;
    }

    /* Borde superior naranja */
    .card-prod::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background-color: #f7952e; /* Color naranja */
    }

    /* Título o caption */
    .figcapt {
      font-size: 18px;
      font-weight: bold;
      color: #f7952e;
      margin: 10px 0;
      text-align: left;
      padding-left: 10px; /* Un poco más a la izquierda */
    }

    /* Contenedor de la imagen */
    .img-container {
      position: relative;
      width: 100%;
      height: 65%; /* Ocupa aproximadamente el 65% del card */
      overflow: hidden;
    }

    /* Imagen dentro del contenedor */
    .img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: opacity 0.3s;
    }

    /* Opacidad solo en la imagen cuando se pasa el mouse */
    .img-container:hover img {
      opacity: 0.7;
    }

    /* Overlay que aparece al pasar sobre la imagen */
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s;
    }

    /* Muestra el overlay al pasar el mouse */
    .img-container:hover .overlay {
      opacity: 1;
    }

    /* Botón dentro del overlay */
    .btn {
      color: white;
      background-color: #e00000;
      padding: 10px 20px;
      border: none;
      border-radius: 50px;
      font-size: 14px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    /* Hover del botón */
    .btn:hover {
      background-color: #b30000;
    }
  </style>
</head>
<body>
<navbar-component class="h-full w-full" src="../navbar/navbar.php" data-color="black">
  </navbar-component>
  <div class="row">
    <!-- Card 1 -->
    <div class="card-prod">
      <figcaption class="figcaptu">
         <?php echo $row['Codigo'] ?>
      </figcaption>
      <div class="img-container">
        <img src="<?php echo $row['Imagen'] ?>" alt="Imagen de Nórdica" />
        <div class="overlay">
          <a class="btn" href="components/Productos/Nordicas.php">más info</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card-prod">
      <figcaption class="figcapt">
        Colgantes
      </figcaption>
      <div class="img-container">
        <img src="./images/DERECHO.png" alt="Imagen de Colgantes" />
        <div class="overlay">
          <a class="btn" href="components/Productos/Colgantes.php">más info</a>
        </div>
      </div>
    </div>

    <div class="card-prod">
      <figcaption class="figcapt">
        Colgantes
      </figcaption>
      <div class="img-container">
        <img src="./images/DERECHO.png" alt="Imagen de Colgantes" />
        <div class="overlay">
          <a class="btn" href="components/Productos/Colgantes.php">más info</a>
        </div>
      </div>
    </div>

    <div class="card-prod">
      <figcaption class="figcapt">
        Colgantes
      </figcaption>
      <div class="img-container">
        <img src="./images/DERECHO.png" alt="Imagen de Colgantes" />
        <div class="overlay">
          <a class="btn" href="components/Productos/Colgantes.php">más info</a>
        </div>
      </div>
    </div>

    <!-- Puedes agregar más cards aquí con el mismo estilo -->
  </div>
    <footer-component class="w-auto h-100 md:h-[50%]" src="../footer/footer.php"></footer-component>
</body>
</html>
<?php
include_once ('../../Conexion/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password']; // Cifrar la contraseña

  $pdo = conectar();
  // Preparar la consulta SQL para evitar inyecciones SQL
  $insertCliente = $pdo->prepare("INSERT INTO Clientes
  SET
   Email =:Email,
   Password =:Password ");

  $insertCliente->bindValue(":Email", $email, PDO::PARAM_STR);
  $insertCliente->bindValue(":Password",     $password, PDO::PARAM_STR);
  
  // Ejecutar la consulta
  if ($insertCliente->execute()) {
      echo "Registro insertado con éxito";
  } else {
      echo "Error al insertar el registro: ";
  }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" type="text/css" />
     <style>
        /* Estilo para el modal */
        .modal {
            position: fixed;
            z-index: 1000; /* Asegúrate de que esté en la parte superior */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Habilitar scroll si es necesario */
            background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% desde la parte superior y centrado */
            padding: 20px;
            border: 1px solid #888;
            width: 300px; /* Ancho del modal */
            border-radius: 8px; /* Bordes redondeados */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style> 
</head>
<body>
    <h1 class="text-center">Bienvenido a Costa Azul</h1>

    <!-- Modal -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Registro de Usuario</h2>
            <form id="form1" name="form1" method="POST" action="">
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Entrar</button>
            </form>
        </div>

    <script>
        // Mostrar el modal al cargar la página
        window.onload = function() {
            document.getElementById("loginModal").style.display = "block";
        }

        // Obtener elementos del DOM
        var modal = document.getElementById("loginModal");
        var span = document.getElementsByClassName("close")[0];

        // Cuando el usuario hace clic en <span> (x), cierra el modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Cuando el usuario hace clic en cualquier parte fuera del modal, cierra el modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>

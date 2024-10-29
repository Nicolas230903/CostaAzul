<?php
// dashboard.php

// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    header("Location: /login/login.php"); // Redirigir al login si no hay sesión
    exit;
}

// Opcional: Verificar si el usuario tiene una cookie de "Recordarme"
if (isset($_COOKIE['user_id'])) {
    // Si la cookie está presente, restaurar la sesión
    $_SESSION['user_id'] = $_COOKIE['user_id'];
}

// Aquí podrías hacer una consulta para obtener los datos del usuario
require_once('../config.php');

$query = "SELECT * FROM usuarios WHERE id = :user_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $_SESSION['user_id']);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    // Si no se encuentra al usuario, cerrar sesión y redirigir
    session_destroy();
    header("Location: /login/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Bienvenido</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <header>
        <h1>Bienvenido, <?php echo htmlspecialchars($user['nombre']); ?></h1>
        <nav>
            <ul>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="configuracion.php">Configuración</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Resumen de tu cuenta</h2>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>Fecha de registro: <?php echo htmlspecialchars($user['fecha_registro']); ?></p>
            <!-- Aquí puedes agregar más información personalizada -->
        </section>

        <section>
            <h2>Opciones</h2>
            <ul>
                <li><a href="/productos.php">Gestionar productos</a></li>
                <li><a href="/servicios.php">Ver servicios</a></li>
                <!-- Agrega más secciones según las funcionalidades disponibles -->
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Costa Azul. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

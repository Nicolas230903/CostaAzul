<?php
// logout.php
session_start();
session_destroy();

// Borrar la cookie de "Recordarme", si existe
if (isset($_COOKIE['user_id'])) {
    setcookie("user_id", "", time() - 3600, "/"); // Expirar la cookie
}

// Redirigir al login
header("Location: /login/login.php");
exit;
?>

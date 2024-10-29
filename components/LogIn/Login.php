<?php
// login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email2'];
    $password = $_POST['password2'];
    $rememberMe = isset($_POST['remember_me']); // Verificar si la opción 'Recordarme' está marcada

    require_once('config.php');

    $query = "SELECT * FROM usuarios WHERE email2 = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password2'])) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['user_id'] = $user['id'];

        // Verificar si el usuario marcó la opción 'Recordarme'
        if ($rememberMe) {
            // Crear una cookie que dure 30 días
            setcookie("user_id", $user['id'], time() + (86400 * 30), "/"); // 86400 = 1 día
        }

        // Despues fijate nico, si queres agregar los roles es ACA
         // if ($user['role'] === 'admin') {
        //     header("Location: /dashboard/admin_dashboard.php"); // Redirigir al dashboard de admin
        // } else {
        //     header("Location: /dashboard/dashboard.php"); // Redirigir al dashboard de usuario
        // }

        // Redirigir al dashboard
        header("components/Dashboard/DashBoard.php"); // Asegúrate de que la ruta esté correcta según tu estructura de carpetas
        exit;
    } else {
        // Credenciales incorrectas
        echo "Correo o contraseña incorrectos.";
    }
}
?>

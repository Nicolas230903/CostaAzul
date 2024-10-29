<?php 
include_once('../../Conexion/conexion.php');

session_start();

// Captura el nivel de usuario desde la cookie
$nivel = isset($_COOKIE['Nivel']) ? $_COOKIE['Nivel'] : '';
// Debugging: Imprime el valor de $nivel
echo "Nivel del usuario: " . htmlspecialchars($nivel);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<nav class="relative w-full h-[5rem] bg-color">
  <div class="navbar absolute top-0 left-0 right-0 z-50">
    <div class="flex-1">
      <a href="base-path/index.html" class="btn btn-ghost text-xl w-20">
        <img class="w-[30px]" src="../images/FondoGiListo.png" alt="">
      </a>
    </div>
    <div class="flex-none text-white">
      <ul class="menu menu-horizontal px-1">
        <li><button id="openModalButton" class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" onclick="openModal()">INICIO SESIÓN</button></li>
        <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="../../../CostaAzul/servicios/productos.php">PRODUCTOS</a></li>
        
        <?php if ($nivel === '1'):?>
          <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="../../../CostaAzul/servicios/productos.php">DASHBOARD</a></li>
        <?php endif; ?>
        
        <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Productos/Productos.php">NOSOTROS</a></li>
        <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Productos/Galeria.php">GALERIA</a></li>
        <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Productos/Contactanos.php">CONTACTENOS</a></li>
        
        <li>
          <a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="path-to-cart">
            <i class="fas fa-shopping-cart"></i> CARRITO 
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-90 hidden z-50">
  <form id="form" name="form" method="post" action="../../login.php">
    <div class="bg-white rounded-lg shadow-lg w-96">
      <div class="flex justify-between items-center p-4 border-b border-gray-300">
        <h3 class="text-lg font-semibold">Iniciar Sesión</h3>
        <button id="closeModalButton" class="text-gray-600 hover:text-gray-800" onclick="closeModal()">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      
      <div class="form-group">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" name="email" type="text" class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Ingrese el Email" autofocus>
      </div>
      <div class="form-group">
        <label for="password" class="block text-sm font-medium text-gray-700 mt-4">Contraseña</label>
        <input id="password" name="password" type="password" class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Contraseña">
      </div>
      <div class="checkbox">
        <label class="pull-right">
          <a href="#">¿Has olvidado la contraseña?</a>
        </label>
      </div>
      <button type="submit" class="btn btn-success">Ingresar</button>
      <button class="btn btn-danger"><a href="">Registrarse</a></button>
    </div>
  </form>
</div>

<script>
function openModal() {
    document.getElementById('myModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('myModal').classList.add('hidden');
}
</script>

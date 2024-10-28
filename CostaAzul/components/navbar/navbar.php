

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<nav class="relative w-full h-[5rem] bg-color">
  <!-- Nav bar Responsive -->
  <div class="md:hidden sm:flex rounded-box">
    <div class="relative">
      <div class="navbar-end flex w-full">
        <div class="flex-1">
          <a href="base-path/index.html" class="btn btn-ghost text-xl w-20">
            <img class="w-[30px]" src="../images/FondoGiListo.png" alt="">
          </a>
        </div>
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
            <svg xmlns="" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="white">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content z-[40] p-2 shadow bg-base-100 rounded-box absolute top-full right-2 w-auto min-w-min max-w-screen-lg">
            <li><a href="Components/Productos/Productos.php">INICIO</a></li>
            <li><a href="Components/Productos/Productos.php">PRODUCTOS</a></li>
            <li><a href="Components/Productos/Productos.php">NOSOTROS</a></li>
            <li><a href="Components/Productos/Galeria.php">GALERIA</a></li>
            <li><a href="Components/Productos/Contactanos.php">CONTACTENOS</a></li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Computadora -->
  <div class="hidden md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 justify-items-center">
    <div class="navbar absolute top-0 left-0 right-0 z-50 {bgColor}">
      <div class="flex-1">
        <a href="base-path/index.html" class="btn btn-ghost text-xl w-20">
          <img class="w-[30px]" src="" alt="">
        </a>
      </div>
      <div class="flex-none text-white">
        <ul class="menu menu-horizontal px-1">
          <li><button id="openModalButton" class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" onclick = "openModal()"   >INICIO SESIÓN</button></li>
          <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="../../../CostaAzul/servicios/productos.php">PRODUCTOS</a></li>
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
  </div>
</nav>

<!-- Modal -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-90 hidden z-50">
    <div class="bg-white rounded-lg shadow-lg w-96">
        <!-- Header del Modal -->
        <div class="flex justify-between items-center p-4 border-b border-gray-300">
            <h3 class="text-lg font-semibold">Iniciar Sesión</h3>
            <button id="closeModalButton" class="text-gray-600 hover:text-gray-800" onclick = "closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <!-- Cuerpo del Modal -->
        <div class="p-6">
            <form id="loginForm">
                <label for="email2" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email2" class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Ingrese su email" required>
                
                <label for="password2" class="block text-sm font-medium text-gray-700 mt-4">Contraseña</label>
                <input type="password" id="password2" class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Ingrese su contraseña" required>
            </form>
        </div>
        
        <!-- Footer del Modal -->
        <div class="flex justify-end p-4 border-t border-gray-300">
            <button id="cancelButton" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 mr-2" onclick = "closeModal()" >Cancelar</button>
            <button id="loginButton" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 mr-2">Iniciar sesión</button>
            <button id="RegistrarseButton" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700" onclick = "handleRegistration()" >Registrarse</button>
        </div>
    </div>
</div>




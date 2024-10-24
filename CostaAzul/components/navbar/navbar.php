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
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="white">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content z-[40] p-2 shadow bg-base-100 rounded-box absolute top-full right-2 w-auto min-w-min max-w-screen-lg">
            <li><a href="Components/Productos/Productos.php">INICIO</a></li>
            <li><a href="Components/Productos/Productos.php">PRODUCTOS</a></li>
            <li><a href="Components/Productos/Productos.php">NOSOTROS</a></li>
            <li><a href="Components/Productos/Galeria.php">GALERIA</a></li>
            <li><a href="Components/Productos/Contactanos.php">CONTACTENOS</a></li>
            <li><a href="?login=1" class="btn btn-primary">LOG IN</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <!-- COMPUTADORA -->
  <div class="hidden md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 justify-items-center">
    <div class="navbar absolute top-0 left-0 right-0 z-50 {bgColor}">
      <div class="flex-1">
        <a href="base-path/index.html" class="btn btn-ghost text-xl w-20">
          <img class="w-[30px]" src="../images/FondoGiListo.png" alt="">
        </a>
      </div>
      <div class="flex-none text-white">
        <ul class="menu menu-horizontal px-1">
          <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Log_in/POP-UP.php">INICIO SESSION</a></li>
          <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Productos/Productos.php">PRODUCTOS</a></li>
          <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Productos/Productos.php">NOSOTROS</a></li>
          <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Productos/Galeria.php">GALERIA</a></li>
          <li><a class="btn btn-ghost hover:border-gray-500 hover:bg-gray-500" href="components/Productos/Contactanos.php">CONTACTENOS</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
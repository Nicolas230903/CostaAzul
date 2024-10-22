<?php if (isset($_GET['login'])): ?>

<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<div class="modal modal-open">
    <div class="modal-box p-8 rounded-lg shadow-lg bg-white">
      <div class="flex flex-col items-center justify-center">
        
        <img src="images/login-illustration.png" alt="Ilustración de inicio de sesión" class="w-24 h-24 mb-4">

       
        <h2 class="font-bold text-2xl mb-6 text-center text-primary">Iniciar Sesión</h2>

        <form action="login.php" method="POST" class="w-full max-w-md">
         
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
            <input id="email" name="email" type="email" class="input input-bordered w-full mt-1" placeholder="Ingresa tu correo" required>
          </div>

         
          <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input id="password" name="password" type="password" class="input input-bordered w-full mt-1" placeholder="Ingresa tu contraseña" required>
          </div>

          
          <div class="modal-action flex justify-center">
            <button type="submit" class="btn btn-primary w-full">Iniciar Sesión</button>
          </div>
        </form>

        
        <div class="text-center mt-4">
          <a href="#" class="text-sm text-gray-500 hover:text-gray-700">¿Olvidaste tu contraseña?</a>
        </div>
      </div>

           <div class="form-control">
               <label class="cursor-pointer label">
                   <span class="label-text">Recordarme</span>
                   <input type="checkbox" name="remember_me" class="checkbox">
               </label>
            </div>


     
      <div class="text-center mt-4">
        <a href="index.php" class="btn btn-ghost mt-4">Cerrar</a>
      </div>
    </div>
  </div>
</body>
</html>
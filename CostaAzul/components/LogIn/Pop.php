<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
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

</body>
</html>
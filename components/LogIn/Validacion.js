document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    
    form.addEventListener('submit', function (event) {
      let valid = true;
  
      // Validar campo de email
      if (!validateEmail(emailInput.value)) {
        emailInput.classList.add('border-red-500');
        alert('Por favor ingresa un correo válido');
        valid = false;
      }
  
      // Validar campo de contraseña
      if (passwordInput.value.length < 8) {
        passwordInput.classList.add('border-red-500');
        alert('La contraseña debe tener al menos 8 caracteres');
        valid = false;
      }
  
      if (!valid) {
        event.preventDefault(); // Evita que se envíe el formulario si no es válido
      }
    });
  
    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(String(email).toLowerCase());
    }
  });
  
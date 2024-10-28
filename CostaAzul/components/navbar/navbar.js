class NavbarComponent extends HTMLElement {
    constructor() {
        super();
    }
    
    connectedCallback() {
        const componentPath = this.getAttribute("src");
        const basePath = BASEPATH;
        const bgColor = this.getAttribute("data-color") ? this.getAttribute("data-color") : "bg-transparent";
        
        fetch(componentPath)
            .then((response) => {
                if (!response.ok) {
                    throw new Error(`Error al cargar el archivo ${componentPath}: ${response.statusText}`);
                }
                return response.text();
            })
            .then((html) => {
                // Reemplazar las clases de color de fondo
                html = html.replace(/bg-color/g, `bg-${bgColor}`);
                html = html.replace(/base-path/g, basePath);
                
                this.innerHTML = html;

                // Agregar el evento para abrir el modal
                this.setupModal();
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
 }
    document.addEventListener('DOMContentLoaded', () => {
        setupModal();
    });
    
    function setupModal() {
        // Seleccionamos el botón que abrirá el modal
        const openModalButton = document.querySelector('#openModalButton');
    
        // Verificamos si el botón existe
        if (openModalButton) {
            openModalButton.addEventListener('click', () => {
                openModal();
            });
        }
    
        // Seleccionamos los botones que cerrarán el modal
        const closeModalButton = document.querySelector('#closeModalButton');
        const cancelButton = document.querySelector('#cancelButton');
        const registrarseButton = document.querySelector('#RegistrarseButton'); // Botón de registrarse
    
        if (closeModalButton) {
            closeModalButton.addEventListener('click', () => {
                closeModal();
            });
        }
    
        if (cancelButton) {
            cancelButton.addEventListener('click', () => {
                closeModal();
            });
        }
    
        if (registrarseButton) {
            registrarseButton.addEventListener('click', () => {
                handleRegistration(); // Maneja el registro
            });
        }
    
        // Opcional: cerrar el modal si se hace clic fuera del contenido del modal
        const modalOverlay = document.querySelector('#myModal');
        if (modalOverlay) {
            modalOverlay.addEventListener('click', (event) => {
                if (event.target === modalOverlay) { // Solo cierra si el clic es en el fondo oscuro
                    closeModal();
                }
            });
        }
    }
    
    function openModal() {
        const modal = document.querySelector('#myModal');
        if (modal) {
            modal.classList.remove('hidden'); // Muestra el modal
            modal.classList.add('flex'); // Asegura que el modal tenga la clase flex para centrarlo
            document.body.style.overflow = "hidden"; // Bloquea el scroll de fondo
        }
    }
    
    function closeModal() {
        const modal = document.querySelector('#myModal');
        if (modal) {
            modal.classList.add('hidden'); // Oculta el modal
            modal.classList.remove('flex'); // Remueve la clase flex para deshabilitar la visibilidad
            document.body.style.overflow = "auto"; // Restaura el scroll del fondo
        }
    }
    
    function handleRegistration() 
    {
        // Redirige a la página de registro
        window.location.href = 'components/InicioSession/incioSession.php';
    }
    
    // Inicializamos el modal cuando la página haya cargado
    document.addEventListener('DOMContentLoaded', setupModal);
    


customElements.define("navbar-component", NavbarComponent);
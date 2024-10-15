class NavbarComponent extends HTMLElement {
    constructor() {
        super();
    }
    
    connectedCallback() {
        const componentPath = this.getAttribute("src");
        const basePath = BASEPATH;
        const bgColor = this.getAttribute("data-color")
            ? this.getAttribute("data-color")
            : "bg-transparent";
        fetch(componentPath)
            .then((response) => {
                if (!response.ok) {
                    throw new Error(
                        `Error al cargar el archivo ${componentPath}: ${response.statusText}`,
                    );
                }
                return response.text();
            })
            .then((html) => {
                // Utilizamos una expresión regular para reemplazar todas las ocurrencias de "bg-color"
                html = html.replace(/bg-color/g, `bg-${bgColor}`);
                html = html.replace(/base-path/g, basePath);


                this.innerHTML = html;
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
}

customElements.define("navbar-component", NavbarComponent);

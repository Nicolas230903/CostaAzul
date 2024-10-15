class FooterComponent extends HTMLElement {
    constructor() {
        super();
    }
    
    connectedCallback() {
        const componentPath = this.getAttribute("src");
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
				this.innerHTML = html;
			})
			.catch((error) => {
				console.error("Error:", error);
			});
    }
}

customElements.define("footer-component", FooterComponent);
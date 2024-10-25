class FooterComponent extends HTMLElement {
    constructor() {
        super();
    }
    
    connectedCallback() {
        fetch("../../CostaAzul/components/footer/footer.php")
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
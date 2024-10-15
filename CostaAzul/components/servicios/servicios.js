class ServiciosComponent extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		fetch("./components/servicios/nuestro-servicios.html")
			.then((response) => {
				if (!response.ok) {
					throw new Error(
						`Error al cargar el archivo navbar-content.html: ${response.statusText}`,
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

customElements.define("servicios-component", ServiciosComponent);

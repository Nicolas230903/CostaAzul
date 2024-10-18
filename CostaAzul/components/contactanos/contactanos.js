class ContactoComponent extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		fetch("./components/contactanos/contactanos.html")
			.then((response) => {
				if (!response.ok) {
					throw new Error(
						`Error al cargar el archivo contactanos.html: ${response.statusText}`,
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


customElements.define("contacto-component", ContactoComponent);

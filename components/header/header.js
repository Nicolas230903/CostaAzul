class HeaderComponent extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		fetch("./components/header/header.php")
			.then((response) => {
				if (!response.ok) {
					throw new Error(
						`Error al cargar el archivo header-content.html: ${response.statusText}`,
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

customElements.define("header-component", HeaderComponent);

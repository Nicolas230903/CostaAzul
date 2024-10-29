class NosotrosComponent extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		fetch("./components/sobre-nosotros/sobre-nosotros.php")
			.then((response) => {
				if (!response.ok) {
					throw new Error(
						`Error al cargar el archivo sobre-nosotros.php: ${response.statusText}`,
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

customElements.define("nosotros-component", NosotrosComponent);
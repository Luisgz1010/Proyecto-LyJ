document.addEventListener("DOMContentLoaded", function() {

	let titulo = document.querySelector(".welcome-panel h2");

	if(titulo){
		titulo.innerHTML = "Bienvenido a nuestro proyecto";
	}

	let texto = document.querySelector(".welcome-panel-content p");

	if(texto){
		texto.innerHTML = "Sistema personalizado desarrollado en WordPress.";
	}

});
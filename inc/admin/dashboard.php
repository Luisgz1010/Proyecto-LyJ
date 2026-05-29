<?php
function mi_tema_widget_escritorio() {
	wp_add_dashboard_widget(
		'mi_tema_widget_proyecto',
		'Proyecto Open Source',
		'mi_tema_contenido_widget_escritorio'
	);
}
add_action( 'wp_dashboard_setup', 'mi_tema_widget_escritorio' );
function mi_tema_contenido_widget_escritorio() {
	echo '
		<div class="mi-dashboard-card">
			<h3>Panel del proyecto</h3>
			<p>
				Interfaz personalizada para el proyecto academico de WordPress.
				Esta mejora agrega identidad visual y acceso rapido al sitio.
			</p>

			<a class="mi-dashboard-button" href="' . esc_url( home_url() ) . '">
				Ver sitio
			</a>
		</div>
	';
}
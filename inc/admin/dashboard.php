<?php
function mi_tema_widget_escritorio() {
	wp_add_dashboard_widget(
		'mi_tema_widget_proyecto',
		'Proyecto LyJ',
		'mi_tema_contenido_widget_escritorio'
	);
}
add_action( 'wp_dashboard_setup', 'mi_tema_widget_escritorio' );

function mi_tema_contenido_widget_escritorio() {
	?>
	<div class="mi-dashboard-card">
		<div class="mi-dashboard-hero">
			<h3>Panel Proyecto LyJ</h3>
			<p>
				Administra tu tema WordPress, revisa el sitio, edita el diseño y prepara funciones interactivas con APIs.
			</p>
		</div>

		<div class="mi-dashboard-actions">
			<a class="mi-dashboard-button" href="<?php echo esc_url( home_url() ); ?>">
				Ver sitio
			</a>

			<a class="mi-dashboard-button mi-dashboard-button-secondary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>">
				Editar diseño
			</a>

			<a class="mi-dashboard-button mi-dashboard-button-secondary" href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>">
				Nueva página
			</a>
		</div>

		<div class="mi-dashboard-grid">
			<div>
				<strong>Frontend</strong>
				<span>Home, header, footer, estilos y botones.</span>
			</div>

			<div>
				<strong>Admin</strong>
				<span>Login, escritorio, barra superior y accesos rápidos.</span>
			</div>

			<div>
				<strong>APIs</strong>
				<span>GitHub, clima, noticias o datos externos.</span>
			</div>
		</div>
	</div>
	<?php
}
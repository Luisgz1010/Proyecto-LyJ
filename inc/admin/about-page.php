<?php

function lyj_about_page_menu() {
	add_menu_page(
		'Acerca de Proyecto LyJ',
		'Proyecto LyJ',
		'read',
		'proyecto-lyj',
		'lyj_about_page_render',
		'dashicons-admin-site-alt3',
		3
	);
}
add_action( 'admin_menu', 'lyj_about_page_menu' );

function lyj_about_page_render() {
	?>
	<div class="wrap lyj-about-page">
		<section class="lyj-about-hero">
			<div>
				<span class="lyj-about-kicker">Proyecto Open Source</span>
				<h1>Proyecto LyJ</h1>
				<p>
					Tema personalizado para WordPress creado por Luis y Joed, enfocado en identidad visual,
					administracion moderna y flujo colaborativo con GitHub.
				</p>

				<div class="lyj-about-actions">
					<a class="button button-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						Ver sitio
					</a>
					<a class="button" href="https://github.com/Luisgz1010/Proyecto-LyJ" target="_blank" rel="noopener">
						Repositorio GitHub
					</a>
				</div>
			</div>

			<div class="lyj-about-logo">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/LyJlogo.png' ); ?>" alt="Logo LyJ">
			</div>
		</section>

		<section class="lyj-about-grid">
			<article>
				<h2>Avances</h2>
				<ul>
					<li>Login personalizado con logo LyJ.</li>
					<li>Panel admin modernizado.</li>
					<li>Menu superior personalizado.</li>
					<li>Base de datos inicial incluida.</li>
					<li>Repositorio publico en GitHub.</li>
				</ul>
			</article>

			<article>
				<h2>Equipo</h2>
				<p>
					Proyecto desarrollado por Luis y Joed como practica open source usando WordPress,
					PHP, CSS, Git y GitHub.
				</p>
			</article>

			<article>
				<h2>Tecnologias</h2>
				<p>
					WordPress, PHP, HTML, CSS, JavaScript, Git, GitHub, XAMPP y phpMyAdmin.
				</p>
			</article>
		</section>
	</div>
	<?php
}
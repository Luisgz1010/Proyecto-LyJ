<?php

function mi_login_estilos() {
	wp_enqueue_style(
		'mi-login-css',
		get_template_directory_uri() . '/assets/admin/login.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'login_enqueue_scripts', 'mi_login_estilos' );

function mi_login_logo_url() {
	return home_url( '/' );
}
add_filter( 'login_headerurl', 'mi_login_logo_url' );

function mi_login_logo_url_title() {
	return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'mi_login_logo_url_title' );
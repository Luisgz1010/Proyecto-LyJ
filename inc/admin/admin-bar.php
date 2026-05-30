<?php

function lyj_admin_bar_menu( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );

	$wp_admin_bar->add_node(
		array(
			'id'    => 'lyj-logo',
			'title' => '<span class="lyj-admin-bar-logo" aria-hidden="true"></span><span class="screen-reader-text">Proyecto LyJ</span>',
			'href'  => admin_url(),
			'meta'  => array(
				'title' => 'Proyecto LyJ',
			),
		)
	);

	$wp_admin_bar->add_node(
		array(
			'id'     => 'lyj-about',
			'parent' => 'lyj-logo',
			'title'  => 'Acerca de WordPress LyJ',
			'href'   => admin_url( 'admin.php?page=proyecto-lyj' ),
		)
	);

	$wp_admin_bar->add_node(
		array(
			'id'     => 'lyj-description',
			'parent' => 'lyj-logo',
			'title'  => 'Proyecto open source creado por Luis y Joed',
			'href'   => home_url( '/' ),
		)
	);

	$wp_admin_bar->add_node(
		array(
			'id'     => 'lyj-theme',
			'parent' => 'lyj-logo',
			'title'  => 'Tema personalizado para WordPress',
			'href'   => admin_url( 'themes.php' ),
		)
	);

	$wp_admin_bar->add_node(
		array(
			'id'     => 'lyj-github',
			'parent' => 'lyj-logo',
			'title'  => 'Repositorio en GitHub',
			'href'   => 'https://github.com/Luisgz1010/Proyecto-LyJ',
			'meta'   => array(
				'target' => '_blank',
			),
		)
	);
}
add_action( 'admin_bar_menu', 'lyj_admin_bar_menu', 11 );
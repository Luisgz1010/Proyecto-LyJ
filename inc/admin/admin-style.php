<?php

function mi_tema_admin_assets() {

    wp_enqueue_style(
        'mi-admin-css',
        get_template_directory_uri() . '/assets/admin/admin.css'
    );

    wp_enqueue_script(
        'mi-admin-js',
        get_template_directory_uri() . '/assets/js/admin.js',
        array(),
        false,
        true
    );
}

add_action('admin_enqueue_scripts', 'mi_tema_admin_assets');
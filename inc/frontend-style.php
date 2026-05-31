<?php

function lyj_frontend_styles() {
    wp_enqueue_style(
        'lyj-style',
        get_template_directory_uri() . '/assets/css/lyj-style.css',
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'lyj_frontend_styles');
function lyj_editor_styles() {
    add_editor_style('/assets/css/lyj-style.css');
}

add_action('after_setup_theme', 'lyj_editor_styles');
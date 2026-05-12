<?php

function zeva_cyberpunk_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function zeva_register_menus() {
    register_nav_menus([
        'primary' => 'Main Menu'
    ]);
}
add_action('init', 'zeva_register_menus');

add_action('after_setup_theme', 'zeva_cyberpunk_setup');

function zeva_cyberpunk_assets() {
    wp_enqueue_style('zeva-cyberpunk-style', get_stylesheet_uri(), [], '1.0');
}

add_action('wp_enqueue_scripts', 'zeva_cyberpunk_assets');
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1200, 675, true); // 16:9 hard crop

/**
 * Sluit de categorie 'Cyber War' (ID 37) uit van de homepage
 */
function zeva_exclude_cyber_war_from_home( $query ) {
    // Voer dit alleen uit op de homepage en voor de hoofd-query
    if ( $query->is_home() && $query->is_main_query() ) {
        // We gebruiken -37 om deze categorie te verbergen
        $query->set( 'cat', '-37' );
    }
}
add_action( 'pre_get_posts', 'zeva_exclude_cyber_war_from_home' );

<?php
function ribbon_child_theme_setup() {
    load_child_theme_textdomain( 'mythemeshop', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ribbon_child_theme_setup' );
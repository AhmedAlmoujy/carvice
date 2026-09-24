<?php
/**
 * CarVice Express Theme Functions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function carvice_express_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('القائمة الرئيسية', 'carvice-express'),
        'footer'  => __('قائمة الفوتر', 'carvice-express'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'carvice_express_setup');

function carvice_express_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue CSS with Protocol Scheme Auto-Detection
    wp_enqueue_style('carvice-main', set_url_scheme(get_template_directory_uri() . '/styles/main.css'), array(), $theme_version);
    wp_enqueue_style('carvice-hero', set_url_scheme(get_template_directory_uri() . '/styles/hero.css'), array(), $theme_version);
    wp_enqueue_style('carvice-sections', set_url_scheme(get_template_directory_uri() . '/styles/sections.css'), array(), $theme_version);
    wp_enqueue_style('carvice-footer', set_url_scheme(get_template_directory_uri() . '/styles/footer.css'), array(), $theme_version);
    wp_enqueue_style('carvice-style', set_url_scheme(get_stylesheet_uri()), array(), $theme_version);

    // Enqueue JS
    wp_enqueue_script('carvice-app', set_url_scheme(get_template_directory_uri() . '/scripts/app.js'), array(), $theme_version, true);
    wp_enqueue_script('carvice-animations', set_url_scheme(get_template_directory_uri() . '/scripts/animations.js'), array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'carvice_express_scripts');

// Register Elementor Pro Theme Builder Locations
function carvice_express_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_location(
        'header',
        array(
            'label'           => __('Header', 'carvice-express'),
            'multiple'        => false,
            'edit_in_content' => false,
        )
    );
    $elementor_theme_manager->register_location(
        'footer',
        array(
            'label'           => __('Footer', 'carvice-express'),
            'multiple'        => false,
            'edit_in_content' => false,
        )
    );
}
add_action('elementor/theme/register_locations', 'carvice_express_register_elementor_locations');


<?php

define('NUTSCLUB_VERSION', '2.0.0');

function nutsclub_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo', [
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ]);

    register_nav_menus([
        'primary' => __('Menu Principal', 'nutsclub'),
    ]);
}
add_action('after_setup_theme', 'nutsclub_setup');

function nutsclub_scripts() {
    if (is_page_template('page-poker.php')) {
        return;
    }
    wp_enqueue_style('nutsclub-style', get_template_directory_uri() . '/assets/css/style.css', [], NUTSCLUB_VERSION);
    wp_enqueue_script('nutsclub-main', get_template_directory_uri() . '/assets/js/main.js', [], NUTSCLUB_VERSION, true);
}
add_action('wp_enqueue_scripts', 'nutsclub_scripts');

// ===== POKER LANDING PAGE =====
function nutsclub_poker_landing_assets() {
    if (!is_page_template('page-poker.php')) {
        return;
    }

    // Strip WP bloat
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'feeds');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_resource_hints', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'rel_canonical');

    // Dequeue all theme styles
    global $wp_styles;
    if (!empty($wp_styles->queue)) {
        foreach ($wp_styles->queue as $handle) {
            wp_dequeue_style($handle);
        }
    }

    // Dequeue all theme scripts except ours
    global $wp_scripts;
    if (!empty($wp_scripts->queue)) {
        foreach ($wp_scripts->queue as $handle) {
            if ($handle !== 'nutsclub-poker-landing') {
                wp_dequeue_script($handle);
            }
        }
    }

    wp_enqueue_style('nutsclub-poker-landing', get_template_directory_uri() . '/assets/css/poker-landing.css', [], NUTSCLUB_VERSION);
    wp_enqueue_script('nutsclub-poker-landing', get_template_directory_uri() . '/assets/js/poker-landing.js', [], NUTSCLUB_VERSION, true);
}
add_action('wp_enqueue_scripts', 'nutsclub_poker_landing_assets', 999);

// ===== ACF Fields for Poker Landing Page =====
function nutsclub_poker_acf_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_poker_landing',
        'title' => 'Poker Landing Page',
        'location' => [[[
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'page-poker.php',
        ]]],
        'fields' => [
            [
                'key' => 'field_poker_url',
                'label' => 'Poker URL',
                'name' => 'poker_url',
                'type' => 'url',
                'default_value' => '#',
                'required' => true,
            ],
            [
                'key' => 'field_bonus_text',
                'label' => 'Texto do Bônus',
                'name' => 'bonus_text',
                'type' => 'text',
                'default_value' => '100% Bonus Instant',
            ],
            [
                'key' => 'field_hero_tagline',
                'label' => 'Hero Tagline',
                'name' => 'hero_tagline',
                'type' => 'text',
                'default_value' => 'As mesas mais <span class="text-gold">soft</span> do Brasil. Saque em 5 minutos.',
            ],
            [
                'key' => 'field_hero_cta',
                'label' => 'Texto do CTA',
                'name' => 'hero_cta',
                'type' => 'text',
                'default_value' => 'Jogar Agora',
            ],
        ],
    ]);
}
add_action('acf/init', 'nutsclub_poker_acf_fields');

function nutsclub_customizer_settings($wp_customize) {
    $wp_customize->add_section('nutsclub_hero', [
        'title' => __('Hero', 'nutsclub'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('hero_title', ['default' => 'NUTS POKER']);
    $wp_customize->add_control('hero_title', [
        'label' => __('Título do Hero', 'nutsclub'),
        'section' => 'nutsclub_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_subtitle', ['default' => 'Sua mesa de poker online']);
    $wp_customize->add_control('hero_subtitle', [
        'label' => __('Subtítulo', 'nutsclub'),
        'section' => 'nutsclub_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_bg', ['default' => get_template_directory_uri() . '/assets/img/banner_nuts.jpg']);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg', [
        'label' => __('Imagem de Fundo', 'nutsclub'),
        'section' => 'nutsclub_hero',
    ]));

    $wp_customize->add_section('nutsclub_contact', [
        'title' => __('Contato', 'nutsclub'),
        'priority' => 35,
    ]);

    $wp_customize->add_setting('contact_instagram', ['default' => 'https://www.instagram.com/nutsclub_']);
    $wp_customize->add_control('contact_instagram', [
        'label' => __('Instagram', 'nutsclub'),
        'section' => 'nutsclub_contact',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('contact_whatsapp', ['default' => '']);
    $wp_customize->add_control('contact_whatsapp', [
        'label' => __('WhatsApp', 'nutsclub'),
        'section' => 'nutsclub_contact',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('contact_address', ['default' => '']);
    $wp_customize->add_control('contact_address', [
        'label' => __('Endereço', 'nutsclub'),
        'section' => 'nutsclub_contact',
        'type' => 'text',
    ]);
}
add_action('customize_register', 'nutsclub_customizer_settings');

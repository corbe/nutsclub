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
    if (is_page_template('page-poker.php') || is_page_template('page-torneios.php')) {
        return;
    }
    wp_enqueue_style('nutsclub-style', get_template_directory_uri() . '/assets/css/style.css', [], NUTSCLUB_VERSION);
    wp_enqueue_script('nutsclub-main', get_template_directory_uri() . '/assets/js/main.js', [], NUTSCLUB_VERSION, true);
}
add_action('wp_enqueue_scripts', 'nutsclub_scripts');

// ===== POKER LANDING PAGE =====
function nutsclub_poker_landing_assets() {
    // Check if current page is using our landing templates
    $load = false;
    if (is_page()) {
        $id = get_queried_object_id();
        $template = get_page_template_slug($id);
        if ($template === 'page-poker.php' || $template === 'page-torneios.php') {
            $load = true;
        }
    }
    // Fallback: check post slug directly
    if (!$load && is_page()) {
        $post = get_queried_object();
        if ($post && in_array($post->post_name, ['poker', 'torneios'])) {
            $load = true;
        }
    }
    if (!$load) {
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

    // Force table styles inline (bypass cache issues)
    wp_add_inline_style('nutsclub-poker-landing', '
.trn-filters{display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap}
.trn-filters__label{font-size:13px;color:#808080;font-weight:500;letter-spacing:0.3px}
.trn-filters__select{background:#202020;color:#fff;border:1px solid rgba(255,255,255,.08);border-radius:8px;padding:8px 14px;font-size:13px;font-family:inherit;cursor:pointer;transition:.2s}
.trn-filters__select:hover,.trn-filters__select:focus{border-color:rgba(255,255,255,.2);outline:none}
.trn-table-wrap{overflow-x:auto;border:1px solid rgba(255,255,255,.06);border-radius:16px;background:#181818;display:inline-block;min-width:100%}
.trn-table{width:100%;border-collapse:collapse}
.trn-table thead{background:#202020}
.trn-table th{text-align:left;padding:14px 20px;font-size:12px;font-weight:600;letter-spacing:0.5px;text-transform:uppercase;color:#808080;border-bottom:1px solid rgba(255,255,255,.06);white-space:nowrap}
.trn-table td{padding:12px 20px;font-size:14px;color:#BFBFBF;border-bottom:1px solid rgba(255,255,255,.03)}
.trn-table tbody tr{transition:.15s;background:transparent}
.trn-table tbody tr:nth-child(even){background:rgba(255,255,255,.02)}
.trn-table tbody tr:hover{background:rgba(245,166,59,.05)}
.trn-table tbody tr:last-child td{border-bottom:none}
.trn-table__name{color:#fff;font-weight:600}
.trn-table__buyin{color:#fff;font-weight:600}
.trn-table__gtd{color:#F5A63B;font-weight:700}
.trn-pagination{display:flex;align-items:center;justify-content:center;gap:4px;margin-top:24px;flex-wrap:wrap}
.trn-pagination__btn{display:inline-flex;align-items:center;justify-content:center;min-width:36px;height:36px;padding:0 10px;font-size:13px;font-weight:500;color:#808080;background:transparent;border:1px solid rgba(255,255,255,.06);border-radius:8px;cursor:pointer;transition:.2s;font-family:inherit}
.trn-pagination__btn:hover{border-color:rgba(255,255,255,.15);color:#fff;background:rgba(255,255,255,.03)}
.trn-pagination__btn--active{background:#F5A63B;color:#0B0B0D;border-color:transparent;font-weight:600}
.trn-pagination__btn--active:hover{background:#E8972A;color:#0B0B0D}
');
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



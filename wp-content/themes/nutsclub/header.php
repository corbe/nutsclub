<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/bg_header.png'); ?>'); background-size: auto 100%; background-repeat: repeat-x;">
    <div class="container header__inner">
        <div class="header__content" style="width: 100%;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="Nuts Poker" class="header__logo-img">
            </a>

            <button class="header__toggle" aria-label="Abrir menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="header__nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'header__menu',
                    'container' => false,
                    'fallback_cb' => false,
                ]);
                ?>
                <a href="<?php echo esc_url(get_theme_mod('contact_whatsapp', '#')); ?>" class="btn btn--primary header__cta">Jogue Agora</a>
            </nav>
        </div>
    </div>
</header>

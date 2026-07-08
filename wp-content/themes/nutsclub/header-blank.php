<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.png?v=' . filemtime(get_template_directory() . '/assets/img/favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/poker-landing.css?v=' . filemtime(get_template_directory() . '/assets/css/poker-landing.css')); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('lp-body'); ?>>
<?php wp_body_open(); ?>

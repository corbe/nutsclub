<?php get_header(); ?>

<main class="main">
    <section class="hero hero--sm" style="background-image: url('<?php echo esc_url(get_theme_mod('hero_bg', get_template_directory_uri() . '/assets/img/banner_nuts.jpg')); ?>')">
        <div class="hero__overlay"></div>
        <div class="container hero__content">
            <span class="hero__suit">&#9824;</span>
            <h1 class="hero__title"><span>NUTS</span> POKER</h1>
            <p class="hero__subtitle"><?php echo esc_html(get_theme_mod('hero_subtitle', 'Sua mesa de poker online')); ?></p>
        </div>
    </section>

    <section class="section page-content">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <div class="page-body">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

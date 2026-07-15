<?php get_header(); ?>

<main class="main">
    <section class="hero" style="background-image: url('<?php echo esc_url(get_theme_mod('hero_bg', get_template_directory_uri() . '/assets/img/banner_nuts.jpg')); ?>')">
        <div class="hero__overlay"></div>
        <div class="container hero__content">
            <span class="hero__suit">&#9824;</span>
            <h1 class="hero__title"><span>NUTS</span> POKER</h1>
            <p class="hero__subtitle"><?php echo esc_html(get_theme_mod('hero_subtitle', 'Sua mesa de poker online')); ?></p>
            <div class="hero__actions">
                <a href="<?php echo esc_url(get_theme_mod('contact_whatsapp', 'https://api.whatsapp.com/send?phone=5511944601642')); ?>" class="btn btn--primary">Criar Conta</a>
                <a href="#about" class="btn btn--outline">Saiba Mais</a>
            </div>
        </div>
    </section>

    <section id="about" class="section about">
        <div class="container">
            <div class="about__grid">
                <div class="about__content">
                    <span class="section__tag">Bem-vindo ao</span>
                    <h2 class="section__title">Nuts Poker</h2>
                    <p>A plataforma de poker online mais emocionante da cidade. Texas Hold'em, Omaha e torneios exclusivos com premiações incríveis. Junte-se a milhares de jogadores e mostre suas habilidades nas mesas.</p>
                    <div class="about__features">
                        <div class="feature">
                            <span class="feature__icon">&#9824;</span>
                            <h4>Texas Hold'em</h4>
                            <p>A modalidade clássica do poker</p>
                        </div>
                        <div class="feature">
                            <span class="feature__icon">&#9830;</span>
                            <h4>Torneios</h4>
                            <p>Competições com grandes prêmios</p>
                        </div>
                        <div class="feature">
                            <span class="feature__icon">&#9829;</span>
                            <h4>Jogue Grátis</h4>
                            <p>Mesas recreativas sem depósito</p>
                        </div>
                    </div>
                </div>
                <div class="about__image">
                    <div class="about__image-placeholder">&#9824; &#9829; &#9830; &#9827;</div>
                </div>
            </div>
        </div>
    </section>

    <section id="tournaments" class="section tournaments">
        <div class="container">
            <div class="section__header">
                <span class="section__tag">Torneios</span>
                <h2 class="section__title">Torneios Diários</h2>
            </div>
            <div class="tournaments__grid">
                <?php
                $events = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'meta_key' => '_thumbnail_id',
                ]);
                if ($events->have_posts()) :
                    while ($events->have_posts()) : $events->the_post(); ?>
                        <article class="tournament-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="tournament-card__image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="tournament-card__body">
                                <span class="tournament-card__badge">Breve</span>
                                <h3 class="tournament-card__title"><?php the_title(); ?></h3>
                                <p class="tournament-card__excerpt"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="tournament-card__link">Ver detalhes</a>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <a href="/torneios/" class="btn btn--accent" style="display:inline-block;margin-top:32px">Ver Todos os Torneios</a>
                <?php else : ?>
                    <p class="tournaments__empty">Em breve novos torneios serão anunciados. Fique ligado!</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="modes" class="section features">
        <div class="container">
            <div class="section__header">
                <span class="section__tag">Modalidades</span>
                <h2 class="section__title">Escolha sua Mesa</h2>
            </div>
            <div class="features__grid">
                <div class="features__item">
                    <span class="feature__icon">&#9824;</span>
                    <h4>Texas Hold'em</h4>
                    <p>O jogo mais popular do mundo. Perfeito para iniciantes e profissionais.</p>
                </div>
                <div class="features__item">
                    <span class="feature__icon">&#9830;</span>
                    <h4>Omaha</h4>
                    <p>Mais cartas, mais ação, mais emoção. O desafio ideal para experientes.</p>
                </div>
                <div class="features__item">
                    <span class="feature__icon">&#9829;</span>
                    <h4>Seven-Card Stud</h4>
                    <p>A modalidade clássica que testa sua memória e estratégia.</p>
                </div>
                <div class="features__item">
                    <span class="feature__icon">&#9827;</span>
                    <h4>Jogo Rápido</h4>
                    <p>Partidas curtas e dinâmicas para jogar quando e onde quiser.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section contact">
        <div class="container">
            <div class="contact__card">
                <h2 class="contact__title">Entre para o Jogo</h2>
                <p>Crie sua conta e receba fichas grátis para começar a jogar agora mesmo.</p>
                <div class="contact__actions">
                    <a href="<?php echo esc_url(get_theme_mod('contact_whatsapp', 'https://api.whatsapp.com/send?phone=5511944601642')); ?>" class="btn btn--accent">Criar Conta Grátis</a>
                    <a href="<?php echo esc_url(get_theme_mod('contact_instagram', 'https://www.instagram.com/nutsclub_')); ?>" target="_blank" class="btn btn--outline">Siga no Instagram</a>
                </div>
                <?php if (get_theme_mod('contact_address')) : ?>
                    <p class="contact__address"><?php echo esc_html(get_theme_mod('contact_address')); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

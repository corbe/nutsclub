<?php
/**
 * Template Name: Poker Landing Page
 * Description: High-conversion landing page for iGaming poker funnel.
 * Strips all theme chrome — full control layout.
 */

get_header('blank');

$poker_url    = get_field('poker_url') ?: '#';
$bonus_text   = get_field('bonus_text') ?: '100% Bonus Instant';
$hero_tagline = get_field('hero_tagline') ?: 'As mesas mais <span class="text-gold">soft</span> do Brasil. Saque em 5 minutos.';
$hero_cta     = get_field('hero_cta') ?: 'Jogar Agora';
?>

<main class="lp" id="top">
  <!-- ===== HEADER ===== -->
  <header class="lp-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/bg_header.png'); ?>'); background-size: auto 100%; background-repeat: repeat-x;">
    <div class="lp-header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-header__logo" aria-label="Nuts Poker">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="Nuts Poker" style="height: 40px; width: auto;">
      </a>
      <a href="<?php echo esc_url($poker_url); ?>" class="lp-header__login" rel="nofollow">Log In</a>
    </div>
  </header>

  <!-- ===== HERO ===== -->
  <section class="lp-hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/banner_nuts.jpg'); ?>'); background-size: cover; background-position: center;">
    <div class="lp-hero__overlay"></div>
    <div class="lp-hero__content">
      <div class="lp-hero__badge"><?php echo esc_html($bonus_text); ?></div>
      <h1 class="lp-hero__title"><?php echo wp_kses_post($hero_tagline); ?></h1>
      <p class="lp-hero__sub">Deposite e jogue em torneios com premiações garantidas. Ambiente seguro, pagamento rápido.</p>
      <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-hero__cta" rel="nofollow">
        <?php echo esc_html($hero_cta); ?>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <div class="lp-hero__trust">
        <span class="lp-trust__badge" title="18+">18+</span>
        <span class="lp-trust__badge" title="Licenciado">&#9670; Licenciado</span>
        <span class="lp-trust__badge" title="RNG Certificado">RNG</span>
        <span class="lp-trust__badge" title="Jogo Responsável">&#9829; Jogo Resp.</span>
      </div>
    </div>
  </section>

  <!-- ===== URGENCY BAR ===== -->
  <section class="lp-urgency">
    <div class="lp-urgency__inner">
      <div class="lp-urgency__pulse"></div>
      <span class="lp-urgency__label">&#9670; AO VIVO</span>
      <span class="lp-urgency__stat"><strong>R$ 247.500</strong> em premiações</span>
      <span class="lp-urgency__sep" aria-hidden="true"></span>
      <span class="lp-urgency__stat"><strong>1.284</strong> jogadores online</span>
      <span class="lp-urgency__sep" aria-hidden="true"></span>
      <span class="lp-urgency__stat"><strong>47</strong> mesas ativas</span>
    </div>
  </section>

  <!-- ===== BENEFITS ===== -->
  <section class="lp-section" id="benefits">
    <div class="lp-container">
      <h2 class="lp-section__title reveal">Por que jogar no Nuts Poker</h2>
      <div class="lp-benefits">
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9824;</div>
          <h3 class="lp-card__title">Fair Play Garantido</h3>
          <p class="lp-card__text">RNG certificado internacionalmente. Nada de suspeitas — só sorte e estratégia.</p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9830;</div>
          <h3 class="lp-card__title">Saque Relâmpago</h3>
          <p class="lp-card__text">Seu dinheiro na conta em até 5 minutos via Pix. Sem burocracia.</p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9829;</div>
          <h3 class="lp-card__title">Torneios Diários</h3>
          <p class="lp-card__text">Mais de R$ 1 milhão em garantias por mês. Mesas soft para você crescer.</p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9827;</div>
          <h3 class="lp-card__title">Jogue de Qualquer Lugar</h3>
          <p class="lp-card__text">Cliente desktop e mobile nativos. Sua mesa no bolso.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ===== SHOWCASE ===== -->
  <section class="lp-section lp-section--dark" id="showcase">
    <div class="lp-container">
      <h2 class="lp-section__title reveal">Veja a Mesa</h2>
      <div class="lp-showcase">
        <figure class="lp-showcase__item reveal">
          <div class="lp-showcase__frame">
            <div class="lp-showcase__placeholder" style="aspect-ratio: 16/9; background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);">
              <span class="lp-showcase__suit">&#9824;</span>
            </div>
          </div>
          <figcaption>Texas Hold'em — Cash Game</figcaption>
        </figure>
        <figure class="lp-showcase__item reveal" data-delay="100">
          <div class="lp-showcase__frame">
            <div class="lp-showcase__placeholder" style="aspect-ratio: 16/9; background: linear-gradient(135deg, #1a1a2e 0%, #0f3460 100%);">
              <span class="lp-showcase__suit">&#9829;</span>
            </div>
          </div>
          <figcaption>Torneio — Milionário Garantido</figcaption>
        </figure>
      </div>
      <div class="lp-showcase__cta reveal">
        <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta" rel="nofollow">Abrir Conta Gratuita</a>
      </div>
    </div>
  </section>

  <!-- ===== TRUST ===== -->
  <section class="lp-section" id="trust">
    <div class="lp-container">
      <h2 class="lp-section__title reveal">Confiança que Você Pode Ver</h2>
      <div class="lp-trust">
        <div class="lp-trust__rating reveal">
          <div class="lp-trust__stars">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
          </div>
          <span class="lp-trust__score">Excelente — 4.8/5</span>
          <span class="lp-trust__count">Baseado em 2.347 avaliações</span>
        </div>
        <div class="lp-trust__badges reveal" data-delay="100">
          <span class="lp-trust__badge">18+</span>
          <span class="lp-trust__badge">&#9670; Licenciado SPA</span>
          <span class="lp-trust__badge">RNG Testado</span>
          <span class="lp-trust__badge">&#9829; Jogo Responsável</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FINAL CTA ===== -->
  <section class="lp-section lp-final" id="cta">
    <div class="lp-container">
      <div class="lp-final__card reveal">
        <h2 class="lp-final__title">Entre para o Jogo</h2>
        <p class="lp-final__text">Ganhe 100% de bônus no primeiro depósito e comece com o pé direito nas mesas mais soft do Brasil.</p>
        <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-cta--xl" rel="nofollow">
          Criar Conta Grátis
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <p class="lp-final__disclaimer">Depósito mínimo de R$ 20. Termos e condições se aplicam. 18+</p>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="lp-footer">
    <div class="lp-container">
      <div class="lp-footer__inner">
        <div class="lp-footer__brand">
          <span class="lp-footer__logo">&#9824; NUTS POKER</span>
          <p class="lp-footer__tagline">Sua mesa de poker online</p>
        </div>
        <nav class="lp-footer__nav" aria-label="Links de compliance">
          <a href="#" class="lp-footer__link">Termos de Uso</a>
          <a href="#" class="lp-footer__link">Privacidade</a>
          <a href="#" class="lp-footer__link">Jogo Responsável</a>
          <a href="#" class="lp-footer__link">Contato</a>
        </nav>
        <p class="lp-footer__copy">&copy; <?php echo date('Y'); ?> Nuts Poker. Todos os direitos reservados. 18+</p>
        <p class="lp-footer__warning">Jogue com responsabilidade. Se o jogo deixar de ser diversão, procure ajuda.</p>
      </div>
    </div>
  </footer>

  <!-- ===== STICKY CTA (mobile) ===== -->
  <div class="lp-sticky">
    <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-sticky__btn" rel="nofollow">Jogar Agora</a>
  </div>
</main>

<?php get_footer('blank'); ?>

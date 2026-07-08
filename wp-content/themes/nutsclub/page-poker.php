<?php
/**
 * Template Name: Poker Landing Page
 * Description: High-conversion landing page for iGaming poker funnel.
 */

// --- Translation system ---
$langs = ['pt', 'en', 'es'];
$lang  = isset($_COOKIE['lp_lang']) && in_array($_COOKIE['lp_lang'], $langs) ? $_COOKIE['lp_lang'] : 'pt';

$t = [];
$t['pt']['bonus']         = '100% Bonus Instant';
$t['en']['bonus']         = '100% Instant Bonus';
$t['es']['bonus']         = '100% Bono Instantáneo';

$t['pt']['tagline']       = 'As mesas mais <span class="text-gold">soft</span> do Brasil. Saque em 5 minutos.';
$t['en']['tagline']       = 'The <span class="text-gold">softest</span> tables in Brazil. Withdraw in 5 minutes.';
$t['es']['tagline']       = 'Las mesas más <span class="text-gold">soft</span> de Brasil. Retiro en 5 minutos.';

$t['pt']['hero_sub']      = 'Deposite e jogue em torneios com premiações garantidas. Ambiente seguro, pagamento rápido.';
$t['en']['hero_sub']      = 'Deposit and play in tournaments with guaranteed prizes. Secure environment, fast payments.';
$t['es']['hero_sub']      = 'Deposita y juega en torneos con premios garantizados. Entorno seguro, pagos rápidos.';

$t['pt']['cta']           = 'Jogar Agora';
$t['en']['cta']           = 'Play Now';
$t['es']['cta']           = 'Juega Ahora';



$t['pt']['urgency_label'] = 'AO VIVO';
$t['en']['urgency_label'] = 'LIVE NOW';
$t['es']['urgency_label'] = 'EN VIVO';

$t['pt']['urgency_prize'] = 'em premiações';
$t['en']['urgency_prize'] = 'in prizes';
$t['es']['urgency_prize'] = 'en premios';

$t['pt']['urgency_players'] = 'jogadores online';
$t['en']['urgency_players'] = 'players online';
$t['es']['urgency_players'] = 'jugadores online';

$t['pt']['urgency_tables']  = 'mesas ativas';
$t['en']['urgency_tables']  = 'active tables';
$t['es']['urgency_tables']  = 'mesas activas';

$t['pt']['benefits_title']  = 'Por que jogar no Nuts Poker';
$t['en']['benefits_title']  = 'Why Play at Nuts Poker';
$t['es']['benefits_title']  = 'Por qué jugar en Nuts Poker';

$t['pt']['card1_title']     = 'Fair Play Garantido';
$t['en']['card1_title']     = 'Fair Play Guaranteed';
$t['es']['card1_title']     = 'Juego Justo Garantizado';

$t['pt']['card1_text']      = 'RNG certificado internacionalmente. Nada de suspeitas — só sorte e estratégia.';
$t['en']['card1_text']      = 'Internationally certified RNG. No suspicions — just luck and strategy.';
$t['es']['card1_text']      = 'RNG certificado internacionalmente. Sin sospechas — solo suerte y estrategia.';

$t['pt']['card2_title']     = 'Saque Relâmpago';
$t['en']['card2_title']     = 'Lightning Withdrawals';
$t['es']['card2_title']     = 'Retiro Relámpago';

$t['pt']['card2_text']      = 'Seu dinheiro na conta em até 5 minutos via Pix. Sem burocracia.';
$t['en']['card2_text']      = 'Your money in your account in up to 5 minutes. No hassle.';
$t['es']['card2_text']      = 'Tu dinero en la cuenta en hasta 5 minutos. Sin burocracia.';

$t['pt']['card3_title']     = 'Torneios Diários';
$t['en']['card3_title']     = 'Daily Tournaments';
$t['es']['card3_title']     = 'Torneos Diarios';

$t['pt']['card3_text']      = 'Mais de R$ 1 milhão em garantias por mês. Mesas soft para você crescer.';
$t['en']['card3_text']      = 'Over R$ 1 million in guarantees monthly. Soft tables to grow.';
$t['es']['card3_text']      = 'Más de R$ 1 millón en garantías al mes. Mesas soft para crecer.';

$t['pt']['card4_title']     = 'Jogue de Qualquer Lugar';
$t['en']['card4_title']     = 'Play Anywhere';
$t['es']['card4_title']     = 'Juega Desde Cualquier Lugar';

$t['pt']['card4_text']      = 'Cliente desktop e mobile nativos. Sua mesa no bolso.';
$t['en']['card4_text']      = 'Native desktop and mobile client. Your table in your pocket.';
$t['es']['card4_text']      = 'Cliente nativo de escritorio y móvil. Tu mesa en el bolsillo.';

$t['pt']['showcase_title']  = 'Veja a Mesa';
$t['en']['showcase_title']  = 'See the Table';
$t['es']['showcase_title']  = 'Ve la Mesa';

$t['pt']['showcase_1']      = 'Texas Hold\'em — Cash Game';
$t['en']['showcase_1']      = 'Texas Hold\'em — Cash Game';
$t['es']['showcase_1']      = 'Texas Hold\'em — Cash Game';

$t['pt']['showcase_2']      = 'Torneio — Milionário Garantido';
$t['en']['showcase_2']      = 'Tournament — Million GTD';
$t['es']['showcase_2']      = 'Torneo — Millonario Garantizado';

$t['pt']['showcase_cta']    = 'Abrir Conta Gratuita';
$t['en']['showcase_cta']    = 'Open Free Account';
$t['es']['showcase_cta']    = 'Abrir Cuenta Gratis';

$t['pt']['trust_title']     = 'Confiança que Você Pode Ver';
$t['en']['trust_title']     = 'Trust You Can See';
$t['es']['trust_title']     = 'Confianza que Puedes Ver';

$t['pt']['trust_score']     = 'Excelente — 4.8/5';
$t['en']['trust_score']     = 'Excellent — 4.8/5';
$t['es']['trust_score']     = 'Excelente — 4.8/5';

$t['pt']['trust_count']     = 'Baseado em 2.347 avaliações';
$t['en']['trust_count']     = 'Based on 2,347 reviews';
$t['es']['trust_count']     = 'Basado en 2.347 opiniones';

$t['pt']['final_title']     = 'Entre para o Jogo';
$t['en']['final_title']     = 'Join the Game';
$t['es']['final_title']     = 'Entra al Juego';

$t['pt']['final_text']      = 'Ganhe 100% de bônus no primeiro depósito e comece com o pé direito nas mesas mais soft do Brasil.';
$t['en']['final_text']      = 'Get a 100% bonus on your first deposit and start on the right foot at the softest tables in Brazil.';
$t['es']['final_text']      = 'Obtén un 100% de bono en tu primer depósito y empieza con el pie derecho en las mesas más soft de Brasil.';

$t['pt']['final_cta']       = 'Criar Conta Grátis';
$t['en']['final_cta']       = 'Create Free Account';
$t['es']['final_cta']       = 'Crear Cuenta Gratis';

$t['pt']['final_disclaimer'] = 'Depósito mínimo de R$ 20. Termos e condições se aplicam. 18+';
$t['en']['final_disclaimer'] = 'Minimum deposit R$ 20. Terms and conditions apply. 18+';
$t['es']['final_disclaimer'] = 'Depósito mínimo R$ 20. Términos y condiciones aplican. 18+';

$t['pt']['footer_brand']    = 'NUTS POKER';
$t['en']['footer_brand']    = 'NUTS POKER';
$t['es']['footer_brand']    = 'NUTS POKER';

$t['pt']['footer_tag']      = 'Sua mesa de poker online';
$t['en']['footer_tag']      = 'Your online poker table';
$t['es']['footer_tag']      = 'Tu mesa de poker online';

$t['pt']['footer_termos']   = 'Termos de Uso';
$t['en']['footer_termos']   = 'Terms of Use';
$t['es']['footer_termos']   = 'Términos de Uso';

$t['pt']['footer_priv']     = 'Privacidade';
$t['en']['footer_priv']     = 'Privacy';
$t['es']['footer_priv']     = 'Privacidad';

$t['pt']['footer_jogo']     = 'Jogo Responsável';
$t['en']['footer_jogo']     = 'Responsible Gaming';
$t['es']['footer_jogo']     = 'Juego Responsable';

$t['pt']['footer_contato']  = 'Contato';
$t['en']['footer_contato']  = 'Contact';
$t['es']['footer_contato']  = 'Contacto';

$t['pt']['footer_copy']     = 'Todos os direitos reservados. 18+';
$t['en']['footer_copy']     = 'All rights reserved. 18+';
$t['es']['footer_copy']     = 'Todos los derechos reservados. 18+';

$t['pt']['footer_warn']     = 'Jogue com responsabilidade. Se o jogo deixar de ser diversão, procure ajuda.';
$t['en']['footer_warn']     = 'Play responsibly. If gambling stops being fun, seek help.';
$t['es']['footer_warn']     = 'Juega con responsabilidad. Si el juego deja de ser diversión, busca ayuda.';

$t['pt']['sticky_cta']      = 'Jogar Agora';
$t['en']['sticky_cta']      = 'Play Now';
$t['es']['sticky_cta']      = 'Juega Ahora';

$t['pt']['trust_badge_18']  = '18+';
$t['pt']['trust_badge_lic'] = 'Licenciado';
$t['pt']['trust_badge_rng'] = 'RNG';
$t['pt']['trust_badge_resp']= 'Jogo Resp.';
$t['en']['trust_badge_18']  = '18+';
$t['en']['trust_badge_lic'] = 'Licensed';
$t['en']['trust_badge_rng'] = 'RNG';
$t['en']['trust_badge_resp']= 'Responsible';
$t['es']['trust_badge_18']  = '18+';
$t['es']['trust_badge_lic'] = 'Licenciado';
$t['es']['trust_badge_rng'] = 'RNG';
$t['es']['trust_badge_resp']= 'Juego Resp.';

$t['pt']['trust_badge_lic2']  = 'Licenciado SPA';
$t['en']['trust_badge_lic2']  = 'SPA Licensed';
$t['es']['trust_badge_lic2']  = 'Licenciado SPA';

$t['pt']['trust_badge_rng2']  = 'RNG Testado';
$t['en']['trust_badge_rng2']  = 'RNG Tested';
$t['es']['trust_badge_rng2']  = 'RNG Probado';

$t['pt']['trust_badge_resp2'] = 'Jogo Responsável';
$t['en']['trust_badge_resp2'] = 'Responsible Gaming';
$t['es']['trust_badge_resp2'] = 'Juego Responsable';

$t['pt']['modal_termos']    = 'Termos de Uso';
$t['en']['modal_termos']    = 'Terms of Use';
$t['es']['modal_termos']    = 'Términos de Uso';

$t['pt']['modal_priv']      = 'Privacidade';
$t['en']['modal_priv']      = 'Privacy';
$t['es']['modal_priv']      = 'Privacidad';

$t['pt']['modal_jogo']      = 'Jogo Responsável';
$t['en']['modal_jogo']      = 'Responsible Gaming';
$t['es']['modal_jogo']      = 'Juego Responsable';

$t['pt']['modal_contato']   = 'Contato';
$t['en']['modal_contato']   = 'Contact';
$t['es']['modal_contato']   = 'Contacto';

$t['pt']['insta_link']      = 'Siga no Instagram';
$t['en']['insta_link']      = 'Follow on Instagram';
$t['es']['insta_link']      = 'Síguenos en Instagram';

function __t($key) {
    global $t, $lang;
    return $t[$lang][$key] ?? $t['pt'][$key] ?? $key;
}

// Switch language via query param
if (isset($_GET['lang']) && in_array($_GET['lang'], ['pt','en','es'])) {
    $lang = $_GET['lang'];
    setcookie('lp_lang', $lang, time() + 365*86400, '/');
    $_COOKIE['lp_lang'] = $lang;
}

$poker_url  = get_field('poker_url') ?: '#';

get_header('blank');
?>

<main class="lp" id="top">
  <header class="lp-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/bg_header.png'); ?>'); background-size: auto 100%; background-repeat: repeat-x;">
    <div class="lp-header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-header__logo" aria-label="Nuts Poker">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="Nuts Poker" style="height: 40px; width: auto;">
      </a>
      <div class="lp-header__right">
        <div class="lp-lang">
          <a href="?lang=pt" class="lp-lang__flag <?php echo $lang === 'pt' ? 'lp-lang__flag--active' : ''; ?>" aria-label="Português" title="Português">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#009739"/><polygon points="11,2 20,8 11,14 2,8" fill="#FEDD00"/><circle cx="11" cy="8" r="3.5" fill="#002776"/></svg>
          </a>
          <a href="?lang=en" class="lp-lang__flag <?php echo $lang === 'en' ? 'lp-lang__flag--active' : ''; ?>" aria-label="English" title="English">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#012169"/><path d="M0 0v1.6L19.8 16H22v-1.6L2.2 0H0zm22 0v1.6L2.2 16H0v-1.6L19.8 0H22z" fill="#FFF"/><path d="M0 7.2V8.8h22V7.2H0zM10 0h2v16h-2V0z" fill="#FFF"/><path d="M0 4v1.6l4.4 2.9v1.5L0 13v1.6L8.8 8H22V4H0z" fill="#C8102E"/><path d="M22 4v1.6l-4.4 2.9v1.5L22 13v1.6L13.2 8H0V4h22z" fill="#C8102E"/></svg>
          </a>
          <a href="?lang=es" class="lp-lang__flag <?php echo $lang === 'es' ? 'lp-lang__flag--active' : ''; ?>" aria-label="Español" title="Español">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#C60B1E"/><rect y="3" width="22" height="10" fill="#FFC400"/></svg>
          </a>
        </div>
      </div>
    </div>
  </header>

  <section class="lp-hero" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/img/banner_nuts.jpg'); ?>'); background-size: cover; background-position: center;">
    <div class="lp-hero__overlay"></div>
    <div class="lp-hero__content">
      <div class="lp-hero__badge"><?php echo esc_html(__t('bonus')); ?></div>
      <h1 class="lp-hero__title"><?php echo __t('tagline'); ?></h1>
      <p class="lp-hero__sub"><?php echo __t('hero_sub'); ?></p>
      <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-hero__cta" rel="nofollow">
        <?php echo __t('cta'); ?>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <div class="lp-hero__trust">
        <span class="lp-trust__badge" title="18+"><?php echo __t('trust_badge_18'); ?></span>
        <span class="lp-trust__badge">&#9670; <?php echo __t('trust_badge_lic'); ?></span>
        <span class="lp-trust__badge"><?php echo __t('trust_badge_rng'); ?></span>
        <span class="lp-trust__badge">&#9829; <?php echo __t('trust_badge_resp'); ?></span>
      </div>
    </div>
  </section>

  <section class="lp-urgency">
    <div class="lp-urgency__inner">
      <div class="lp-urgency__pulse"></div>
      <span class="lp-urgency__label">&#9670; <?php echo __t('urgency_label'); ?></span>
      <span class="lp-urgency__stat"><strong>R$ 247.500</strong> <?php echo __t('urgency_prize'); ?></span>
      <span class="lp-urgency__sep" aria-hidden="true"></span>
      <span class="lp-urgency__stat"><strong>1.284</strong> <?php echo __t('urgency_players'); ?></span>
      <span class="lp-urgency__sep" aria-hidden="true"></span>
      <span class="lp-urgency__stat"><strong>47</strong> <?php echo __t('urgency_tables'); ?></span>
    </div>
  </section>

  <section class="lp-section" id="benefits">
    <div class="lp-container">
      <h2 class="lp-section__title reveal"><?php echo __t('benefits_title'); ?></h2>
      <div class="lp-benefits">
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9824;</div>
          <h3 class="lp-card__title"><?php echo __t('card1_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card1_text'); ?></p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9830;</div>
          <h3 class="lp-card__title"><?php echo __t('card2_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card2_text'); ?></p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9829;</div>
          <h3 class="lp-card__title"><?php echo __t('card3_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card3_text'); ?></p>
        </article>
        <article class="lp-card reveal">
          <div class="lp-card__icon">&#9827;</div>
          <h3 class="lp-card__title"><?php echo __t('card4_title'); ?></h3>
          <p class="lp-card__text"><?php echo __t('card4_text'); ?></p>
        </article>
      </div>
    </div>
  </section>

  <section class="lp-section lp-section--dark" id="showcase">
    <div class="lp-container">
      <h2 class="lp-section__title reveal"><?php echo __t('showcase_title'); ?></h2>
      <div class="lp-showcase">
        <figure class="lp-showcase__item reveal">
          <div class="lp-showcase__frame">
            <div class="lp-showcase__placeholder" style="aspect-ratio: 16/9; background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);">
              <span class="lp-showcase__suit">&#9824;</span>
            </div>
          </div>
          <figcaption><?php echo __t('showcase_1'); ?></figcaption>
        </figure>
        <figure class="lp-showcase__item reveal" data-delay="100">
          <div class="lp-showcase__frame">
            <div class="lp-showcase__placeholder" style="aspect-ratio: 16/9; background: linear-gradient(135deg, #1a1a2e 0%, #0f3460 100%);">
              <span class="lp-showcase__suit">&#9829;</span>
            </div>
          </div>
          <figcaption><?php echo __t('showcase_2'); ?></figcaption>
        </figure>
      </div>
      <div class="lp-showcase__cta reveal">
        <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta" rel="nofollow"><?php echo __t('showcase_cta'); ?></a>
      </div>
    </div>
  </section>

  <section class="lp-section" id="trust">
    <div class="lp-container">
      <h2 class="lp-section__title reveal"><?php echo __t('trust_title'); ?></h2>
      <div class="lp-trust">
        <div class="lp-trust__rating reveal">
          <div class="lp-trust__stars">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="#D4AF37" aria-hidden="true"><path d="M10 1l2.39 4.84 5.34.78-3.86 3.77.91 5.31L10 13.24l-4.78 2.51.91-5.31L2.27 6.62l5.34-.78L10 1z"/></svg>
          </div>
          <span class="lp-trust__score"><?php echo __t('trust_score'); ?></span>
          <span class="lp-trust__count"><?php echo __t('trust_count'); ?></span>
        </div>
        <div class="lp-trust__badges reveal" data-delay="100">
          <span class="lp-trust__badge"><?php echo __t('trust_badge_18'); ?></span>
          <span class="lp-trust__badge">&#9670; <?php echo __t('trust_badge_lic2'); ?></span>
          <span class="lp-trust__badge"><?php echo __t('trust_badge_rng2'); ?></span>
          <span class="lp-trust__badge">&#9829; <?php echo __t('trust_badge_resp2'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <section class="lp-section lp-final" id="cta">
    <div class="lp-container">
      <div class="lp-final__card reveal">
        <h2 class="lp-final__title"><?php echo __t('final_title'); ?></h2>
        <p class="lp-final__text"><?php echo __t('final_text'); ?></p>
        <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-cta--xl" rel="nofollow">
          <?php echo __t('final_cta'); ?>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <p class="lp-final__disclaimer"><?php echo __t('final_disclaimer'); ?></p>
      </div>
    </div>
  </section>

  <footer class="lp-footer">
    <div class="lp-container">
      <div class="lp-footer__inner">
        <div class="lp-footer__brand">
          <span class="lp-footer__logo">&#9824; <?php echo __t('footer_brand'); ?></span>
          <p class="lp-footer__tagline"><?php echo __t('footer_tag'); ?></p>
        </div>
        <div class="lp-footer__social">
          <a href="https://www.instagram.com/nutsclub_" target="_blank" rel="noopener" class="lp-footer__social-link" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
        </div>
        <nav class="lp-footer__nav" aria-label="Links de compliance">
          <a href="#" class="lp-footer__link" data-modal="termos-de-uso"><?php echo __t('footer_termos'); ?></a>
          <a href="#" class="lp-footer__link" data-modal="privacidade"><?php echo __t('footer_priv'); ?></a>
          <a href="#" class="lp-footer__link" data-modal="jogo-responsavel"><?php echo __t('footer_jogo'); ?></a>
          <a href="#" class="lp-footer__link" data-modal="contato"><?php echo __t('footer_contato'); ?></a>
        </nav>
        <p class="lp-footer__copy">&copy; <?php echo date('Y'); ?> Nuts Poker. <?php echo __t('footer_copy'); ?></p>
        <p class="lp-footer__warning"><?php echo __t('footer_warn'); ?></p>
      </div>
    </div>
  </footer>

  <div class="lp-sticky">
    <a href="<?php echo esc_url($poker_url); ?>" class="lp-cta lp-sticky__btn" rel="nofollow"><?php echo __t('sticky_cta'); ?></a>
  </div>
</main>

<?php
// Modal pages
$modal_pages = get_posts([
    'post__in' => [14, 15, 16, 17],
    'post_type' => 'page',
    'posts_per_page' => 4,
]);
foreach ($modal_pages as $mp) :
    $slug = $mp->post_name;
?>
<div class="lp-modal" id="modal-<?php echo esc_attr($slug); ?>" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="lp-modal__backdrop" data-modal-close></div>
  <div class="lp-modal__content">
    <button class="lp-modal__close" data-modal-close aria-label="Fechar">&times;</button>
    <div class="lp-modal__body"><?php echo apply_filters('the_content', $mp->post_content); ?></div>
  </div>
</div>
<?php endforeach; ?>

<?php get_footer('blank'); ?>

<header class="lp-header">
  <div class="lp-header__inner">
    <a href="<?php echo esc_url(lang_home_url('/')); ?>" class="lp-header__logo" aria-label="Nuts Poker">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png?v=' . filemtime(get_template_directory() . '/assets/img/logo.png')); ?>" alt="Nuts Poker" style="height: 40px; width: auto;">
    </a>
    <nav class="lp-header__nav">
      <a href="<?php echo esc_url(lang_home_url('/torneios/')); ?>" class="lp-header__nav-link <?php echo !empty($is_torneios) ? 'lp-header__nav-link--active' : ''; ?>"><?php echo __t('menu_torneios'); ?></a>
    </nav>
    <div class="lp-header__right">
      <div class="lp-lang">
        <button class="lp-lang__toggle" aria-label="Selecionar idioma" aria-expanded="false">
          <span class="lp-lang__current">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><?php if ($lang === 'pt'): ?><rect width="22" height="16" fill="#009739"/><polygon points="11,2 20,8 11,14 2,8" fill="#FEDD00"/><circle cx="11" cy="8" r="3.5" fill="#002776"/><?php elseif ($lang === 'en'): ?><rect width="22" height="16" fill="#012169"/><path d="M0 0v1.6L19.8 16H22v-1.6L2.2 0H0zm22 0v1.6L2.2 16H0v-1.6L19.8 0H22z" fill="#FFF"/><path d="M0 7.2V8.8h22V7.2H0zM10 0h2v16h-2V0z" fill="#FFF"/><path d="M0 4v1.6l4.4 2.9v1.5L0 13v1.6L8.8 8H22V4H0z" fill="#C8102E"/><path d="M22 4v1.6l-4.4 2.9v1.5L22 13v1.6L13.2 8H0V4h22z" fill="#C8102E"/><?php else: ?><rect width="22" height="16" fill="#C60B1E"/><rect y="3" width="22" height="10" fill="#FFC400"/><?php endif; ?></svg>
            <span><?php echo $lang === 'pt' ? 'PT' : ($lang === 'en' ? 'EN' : 'ES'); ?></span>
          </span>
          <svg class="lp-lang__chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M3 5l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="lp-lang__menu">
          <a href="<?php echo lang_url('pt'); ?>" class="lp-lang__option <?php echo $lang === 'pt' ? 'lp-lang__option--active' : ''; ?>">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#009739"/><polygon points="11,2 20,8 11,14 2,8" fill="#FEDD00"/><circle cx="11" cy="8" r="3.5" fill="#002776"/></svg>
            Português
          </a>
          <a href="<?php echo lang_url('en'); ?>" class="lp-lang__option <?php echo $lang === 'en' ? 'lp-lang__option--active' : ''; ?>">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#012169"/><path d="M0 0v1.6L19.8 16H22v-1.6L2.2 0H0zm22 0v1.6L2.2 16H0v-1.6L19.8 0H22z" fill="#FFF"/><path d="M0 7.2V8.8h22V7.2H0zM10 0h2v16h-2V0z" fill="#FFF"/><path d="M0 4v1.6l4.4 2.9v1.5L0 13v1.6L8.8 8H22V4H0z" fill="#C8102E"/><path d="M22 4v1.6l-4.4 2.9v1.5L22 13v1.6L13.2 8H0V4h22z" fill="#C8102E"/></svg>
            English
          </a>
          <a href="<?php echo lang_url('es'); ?>" class="lp-lang__option <?php echo $lang === 'es' ? 'lp-lang__option--active' : ''; ?>">
            <svg width="22" height="16" viewBox="0 0 22 16" aria-hidden="true"><rect width="22" height="16" fill="#C60B1E"/><rect y="3" width="22" height="10" fill="#FFC400"/></svg>
            Español
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

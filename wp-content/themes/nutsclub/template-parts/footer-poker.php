<footer class="lp-footer">
  <div class="lp-container">
    <div class="lp-footer__inner">
      <div class="lp-footer__brand">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png?v=' . filemtime(get_template_directory() . '/assets/img/logo.png')); ?>" alt="Nuts Poker" class="lp-footer__logo-img">
        <p class="lp-footer__tagline"><?php echo __t('footer_tag'); ?></p>
      </div>
      <div class="lp-footer__social">
        <a href="https://api.whatsapp.com/send?phone=5511944601642" target="_blank" rel="noopener" class="lp-footer__social-link" aria-label="WhatsApp">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
        </a>
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

<footer class="footer">
        <div class="container footer__inner">
            <div class="footer__brand">
                <h3>&#9824; NUTS POKER</h3>
                <p>Sua mesa de poker online</p>
            </div>

            <div class="footer__social">
                <a href="<?php echo esc_url(get_theme_mod('contact_instagram', 'https://www.instagram.com/nutsclub_')); ?>" target="_blank" rel="noopener" class="footer__social-link" aria-label="Instagram">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                </a>
                <?php if (get_theme_mod('contact_whatsapp')) : ?>
                <a href="<?php echo esc_url(get_theme_mod('contact_whatsapp')); ?>" target="_blank" rel="noopener" class="footer__social-link" aria-label="WhatsApp">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                </a>
                <?php endif; ?>
            </div>

            <p class="footer__copy">&copy; <?php echo date('Y'); ?> Nuts Poker. Todos os direitos reservados.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

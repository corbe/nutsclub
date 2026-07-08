(function () {
  'use strict';

  // === SCROLL REVEAL via Intersection Observer ===
  const reveals = document.querySelectorAll('.reveal');

  if (reveals.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const delay = parseInt(entry.target.getAttribute('data-delay')) || 0;
            setTimeout(() => {
              entry.target.classList.add('reveal--visible');
            }, delay);
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );

    reveals.forEach((el) => observer.observe(el));
  } else {
    // Fallback: show all reveals immediately
    reveals.forEach((el) => el.classList.add('reveal--visible'));
  }

  // === URGENCY COUNTER (cosmetic increment) ===
  const statEls = document.querySelectorAll('.lp-urgency__stat strong');
  if (statEls.length) {
    const playerStat = statEls[1];
    if (playerStat) {
      setInterval(() => {
        const current = parseInt(playerStat.textContent.replace(/\D/g, '')) || 1284;
        const delta = Math.floor(Math.random() * 5) - 2; // -2 to +2
        const next = Math.max(800, current + delta);
        playerStat.textContent = next.toLocaleString('pt-BR');
      }, 8000);
    }
  }
})();

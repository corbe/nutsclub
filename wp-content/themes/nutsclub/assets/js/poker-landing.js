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
    reveals.forEach((el) => el.classList.add('reveal--visible'));
  }

  // === URGENCY COUNTER ===
  const statEls = document.querySelectorAll('.lp-urgency__stat strong');
  if (statEls.length) {
    const playerStat = statEls[1];
    if (playerStat) {
      setInterval(() => {
        const current = parseInt(playerStat.textContent.replace(/\D/g, '')) || 1284;
        const delta = Math.floor(Math.random() * 5) - 2;
        const next = Math.max(800, current + delta);
        playerStat.textContent = next.toLocaleString('pt-BR');
      }, 8000);
    }
  }

  // === MODAL ===
  const modals = document.querySelectorAll('.lp-modal');
  const triggers = document.querySelectorAll('[data-modal]');
  const closeBtns = document.querySelectorAll('[data-modal-close]');

  function openModal(id) {
    const el = document.getElementById(id);
    if (!el) return;
    el.classList.add('lp-modal--open');
    el.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeModal(el) {
    el.classList.remove('lp-modal--open');
    el.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  triggers.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const id = 'modal-' + btn.getAttribute('data-modal');
      openModal(id);
    });
  });

  closeBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const modal = btn.closest('.lp-modal');
      if (modal) closeModal(modal);
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      modals.forEach((m) => {
        if (m.classList.contains('lp-modal--open')) closeModal(m);
      });
    }
  });

  // === LANGUAGE DROPDOWN ===
  const langToggle = document.querySelector('.lp-lang__toggle');
  const langMenu = document.querySelector('.lp-lang__menu');

  if (langToggle && langMenu) {
    langToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = langMenu.classList.contains('lp-lang__menu--open');
      langMenu.classList.toggle('lp-lang__menu--open');
      langToggle.setAttribute('aria-expanded', !isOpen);
    });

    document.addEventListener('click', () => {
      langMenu.classList.remove('lp-lang__menu--open');
      langToggle.setAttribute('aria-expanded', 'false');
    });

    langMenu.addEventListener('click', (e) => {
      e.stopPropagation();
    });
  }

  // === CAROUSEL (torneios) ===
  const carousel = document.querySelector('.trn-hero__carousel');
  const cards = document.querySelectorAll('.trn-hero__card');
  const dots = document.querySelectorAll('.trn-hero__dot');

  if (cards.length >= 3) {
    let current = 1;
    const total = cards.length;
    let interval;

    function goToSlide(index) {
      if (index < 0) index = total - 1;
      if (index >= total) index = 0;
      current = index;
      cards.forEach((card, i) => {
        card.classList.remove('trn-hero__card--center', 'trn-hero__card--side');
        if (i === current) {
          card.classList.add('trn-hero__card--center');
        } else {
          card.classList.add('trn-hero__card--side');
        }
      });
      dots.forEach((d, i) => {
        d.classList.toggle('trn-hero__dot--active', i === current);
      });
    }

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        goToSlide(parseInt(dot.getAttribute('data-slide')));
        resetInterval();
      });
    });

    cards.forEach((card) => {
      card.addEventListener('click', function () {
        const idx = parseInt(this.getAttribute('data-index'));
        if (idx !== current) {
          goToSlide(idx);
          resetInterval();
        }
      });
    });

    // Drag to slide
    if (carousel) {
      let isDown = false;
      let startX = 0;
      let moved = false;

      carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.clientX;
        moved = false;
        e.preventDefault();
      });

      carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        const diff = e.clientX - startX;
        if (Math.abs(diff) > 30) {
          moved = true;
          isDown = false;
          if (diff < 0) {
            goToSlide(current + 1);
          } else {
            goToSlide(current - 1);
          }
          resetInterval();
        }
      });

      carousel.addEventListener('mouseup', () => { isDown = false; });
      carousel.addEventListener('mouseleave', () => { isDown = false; });
    }

    function resetInterval() {
      clearInterval(interval);
      interval = setInterval(() => goToSlide((current + 1) % total), 5000);
    }

    resetInterval();

    const hero = document.querySelector('.trn-hero');
    if (hero) {
      hero.addEventListener('mouseenter', () => clearInterval(interval));
      hero.addEventListener('mouseleave', resetInterval);
    }
  }
})();

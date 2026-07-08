(function () {
  'use strict';

  // === SCROLL REVEAL ===
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
  const track = document.querySelector('.trn-hero__carousel');
  const cards = document.querySelectorAll('.trn-hero__card');
  const dots = document.querySelectorAll('.trn-hero__dot');
  const carouselWrap = document.querySelector('.trn-hero');

  if (cards.length >= 3) {
    let current = Math.floor(cards.length / 2);
    const total = cards.length;
    let interval;

    function getVisibleIndices(center) {
      const prev = center - 1 < 0 ? total - 1 : center - 1;
      const next = center + 1 >= total ? 0 : center + 1;
      return [prev, center, next];
    }

    function goToSlide(index) {
      if (index < 0) index = total - 1;
      if (index >= total) index = 0;
      current = index;
      const visible = getVisibleIndices(current);

      cards.forEach((card, i) => {
        card.classList.remove('trn-hero__card--center', 'trn-hero__card--side', 'trn-hero__card--hidden');

        if (i === current) {
          card.classList.add('trn-hero__card--center');
          card.style.display = '';
        } else if (visible.includes(i)) {
          card.classList.add('trn-hero__card--side');
          card.style.display = '';
        } else {
          card.classList.add('trn-hero__card--hidden');
          card.style.display = 'none';
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

    // Drag
    if (track) {
      let isDown = false;
      let startX = 0;

      track.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.clientX;
        e.preventDefault();
      });

      track.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        const diff = e.clientX - startX;
        if (Math.abs(diff) > 40) {
          isDown = false;
          if (diff < 0) goToSlide(current + 1);
          else goToSlide(current - 1);
          resetInterval();
        }
      });

      track.addEventListener('mouseup', () => { isDown = false; });
      track.addEventListener('mouseleave', () => { isDown = false; });
    }

    function resetInterval() {
      clearInterval(interval);
      interval = setInterval(() => goToSlide((current + 1) % total), 4500);
    }

    goToSlide(current);
    resetInterval();

    if (carouselWrap) {
      carouselWrap.addEventListener('mouseenter', () => clearInterval(interval));
      carouselWrap.addEventListener('mouseleave', resetInterval);
    }
  }
})();

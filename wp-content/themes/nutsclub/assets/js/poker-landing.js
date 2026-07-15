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
  const cards = document.querySelectorAll('.trn-hero__card');
  const dots = document.querySelectorAll('.trn-hero__dot');

  if (cards.length >= 3) {
    let current = Math.floor(cards.length / 2);
    const total = cards.length;
    let interval;
    let isMobile = false;

    function isMobileWidth() {
      return window.innerWidth <= 600;
    }

    function getVisibleIndices(center) {
      const prev = center - 1 < 0 ? total - 1 : center - 1;
      const next = center + 1 >= total ? 0 : center + 1;
      return [prev, center, next];
    }

    function isForward(from, to) {
      const diff = (to - from + total) % total;
      return diff <= Math.floor(total / 2);
    }

    function slideTo(index, dir) {
      if (index < 0) index = total - 1;
      if (index >= total) index = 0;
      if (index === current) return;

      const prev = current;
      const mob = isMobileWidth();

      if (dir === undefined || dir === 0) {
        dir = isForward(prev, index) ? 1 : -1;
      }

      if (mob) {
        const inAnim = dir === 1 ? 'slideInRight' : 'slideInLeft';
        const outAnim = dir === 1 ? 'slideOutLeft' : 'slideOutRight';

        cards.forEach((card, i) => {
          card.classList.remove('trn-hero__card--center', 'trn-hero__card--side', 'trn-hero__card--hidden');
          card.style.pointerEvents = 'none';
          card.style.animation = 'none';
          card.style.order = '';

          if (i === index) {
            card.style.transform = dir === 1 ? 'translateX(120%)' : 'translateX(-120%)';
            card.style.opacity = '1';
            card.style.display = '';
            card.classList.add('trn-hero__card--center');
          } else if (i === prev) {
            card.style.transform = 'translateX(0)';
            card.style.opacity = '1';
            card.style.display = '';
          } else {
            card.style.display = 'none';
            card.classList.add('trn-hero__card--hidden');
          }
        });

        void document.body.offsetHeight;

        cards.forEach((card, i) => {
          if (i === index) {
            card.style.animation = inAnim + ' 0.35s cubic-bezier(0.16,1,0.3,1) forwards';
          } else if (i === prev) {
            card.style.animation = outAnim + ' 0.35s cubic-bezier(0.16,1,0.3,1) forwards';
          }
        });

        setTimeout(() => {
          cards.forEach((c) => { c.style.animation = ''; });
          resetCarouselStyle();
        }, 380);
      } else {
        const visible = getVisibleIndices(index);
        const orderMap = {};
        orderMap[visible[0]] = 0;
        orderMap[visible[1]] = 1;
        orderMap[visible[2]] = 2;

        cards.forEach((card, i) => {
          card.classList.remove('trn-hero__card--center', 'trn-hero__card--side', 'trn-hero__card--hidden');
          card.style.transform = '';
          card.style.opacity = '';
          card.style.transition = '';
          card.style.pointerEvents = '';

          if (i === index) {
            card.classList.add('trn-hero__card--center');
            card.style.display = '';
            card.style.order = orderMap[i] ?? 1;
          } else if (visible.includes(i)) {
            card.classList.add('trn-hero__card--side');
            card.style.display = '';
            card.style.order = orderMap[i] ?? 0;
          } else {
            card.classList.add('trn-hero__card--hidden');
            card.style.display = 'none';
            card.style.order = '';
          }
        });
      }

      current = index;

      dots.forEach((d, i) => {
        d.classList.toggle('trn-hero__dot--active', i === current);
      });
    }

    function resetCarouselStyle() {
      const visible = getVisibleIndices(current);
      const mob = isMobileWidth();

      cards.forEach((c) => { c.style.transition = ''; });

      if (mob) {
        cards.forEach((card, i) => {
          card.classList.remove('trn-hero__card--center', 'trn-hero__card--side', 'trn-hero__card--hidden');
          card.style.pointerEvents = 'none';

          if (i === current) {
            card.style.transform = 'translateX(0)';
            card.style.opacity = '1';
            card.style.display = '';
            card.classList.add('trn-hero__card--center');
            card.style.pointerEvents = 'auto';
          } else if (visible.includes(i)) {
            card.style.transform = i === visible[0] ? 'translateX(-120%)' : 'translateX(120%)';
            card.style.opacity = '0';
            card.style.display = '';
          } else {
            card.style.transform = '';
            card.style.display = 'none';
            card.classList.add('trn-hero__card--hidden');
          }
        });
      } else {
        const orderMap = {};
        orderMap[visible[0]] = 0;
        orderMap[visible[1]] = 1;
        orderMap[visible[2]] = 2;

        cards.forEach((card, i) => {
          card.classList.remove('trn-hero__card--center', 'trn-hero__card--side', 'trn-hero__card--hidden');
          card.style.transform = '';
          card.style.opacity = '';

          if (i === current) {
            card.classList.add('trn-hero__card--center');
            card.style.display = '';
            card.style.order = orderMap[i] ?? 1;
          } else if (visible.includes(i)) {
            card.classList.add('trn-hero__card--side');
            card.style.display = '';
            card.style.order = orderMap[i] ?? 0;
          } else {
            card.classList.add('trn-hero__card--hidden');
            card.style.display = 'none';
            card.style.order = '';
          }
        });
      }
    }

    resetCarouselStyle();

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        const idx = parseInt(dot.getAttribute('data-slide'));
        if (idx !== current) {
          slideTo(idx);
          clearInterval(interval);
          startRotation();
        }
      });
    });

    cards.forEach((card) => {
      card.addEventListener('click', function () {
        const idx = parseInt(this.getAttribute('data-index'));
        if (idx !== current) {
          slideTo(idx);
          clearInterval(interval);
          startRotation();
        }
      });
    });

    // Drag & Touch
    const track = document.querySelector('.trn-hero__carousel');
    if (track) {
      let startX = 0;
      let isDown = false;

      function dragEnd(clientX) {
        if (!isDown) return;
        const diff = clientX - startX;
        isDown = false;

        if (isMobileWidth()) {
          const threshold = track.offsetWidth * 0.2;
          if (Math.abs(diff) > threshold) {
            slideTo(diff < 0 ? current + 1 : current - 1, diff < 0 ? 1 : -1);
            clearInterval(interval);
            startRotation();
          } else {
            resetCarouselStyle();
          }
        } else {
          if (Math.abs(diff) > 40) {
            slideTo(diff < 0 ? current + 1 : current - 1);
            clearInterval(interval);
            startRotation();
          }
        }
      }

      track.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.clientX;
      });

      track.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        if (!isMobileWidth()) {
          const diff = e.clientX - startX;
          if (Math.abs(diff) > 40) {
            isDown = false;
            slideTo(diff < 0 ? current + 1 : current - 1);
            clearInterval(interval);
            startRotation();
          }
        }
      });

      track.addEventListener('mouseup', (e) => dragEnd(e.clientX));
      track.addEventListener('mouseleave', () => { isDown = false; });

      track.addEventListener('touchstart', (e) => {
        isDown = true;
        startX = e.touches[0].clientX;
        isMobile = true;

        if (isMobileWidth()) {
          cards.forEach((c) => { c.style.animation = 'none'; c.style.transition = 'none'; });
        }
      });

      track.addEventListener('touchmove', (e) => {
        e.preventDefault();
        if (!isDown) return;
        const x = e.touches[0].clientX;
        const diff = x - startX;

        if (isMobileWidth()) {
          const cardW = cards[0].offsetWidth || track.offsetWidth;
          const pct = (diff / cardW) * 100;
          const visible = getVisibleIndices(current);

          cards.forEach((card, i) => {
            if (i === current) {
              card.style.transform = `translateX(${pct}%)`;
              card.style.opacity = '1';
              card.style.display = '';
              card.classList.add('trn-hero__card--center');
            } else if (i === visible[2] && diff < 0) {
              card.style.transform = `translateX(${100 + pct}%)`;
              card.style.opacity = '1';
              card.style.display = '';
            } else if (i === visible[0] && diff > 0) {
              card.style.transform = `translateX(${-100 + pct}%)`;
              card.style.opacity = '1';
              card.style.display = '';
            } else {
              card.style.display = 'none';
            }
          });
        } else if (Math.abs(diff) > 40) {
          isDown = false;
          slideTo(diff < 0 ? current + 1 : current - 1);
          clearInterval(interval);
          startRotation();
        }
      }, { passive: false });

      track.addEventListener('touchend', (e) => dragEnd(e.changedTouches[0].clientX));
      track.addEventListener('touchcancel', () => { isDown = false; });
    }

    function startRotation() {
      clearInterval(interval);
      interval = setInterval(() => slideTo((current + 1) % total, 1), 3500);
    }

    startRotation();

    window.addEventListener('resize', () => {
      const mob = isMobileWidth();
      if (mob !== isMobile) {
        isMobile = mob;
        resetCarouselStyle();
      }
    });
  }

  // === TABLE PAGINATION ===
  const tableBody = document.querySelector('#tournaments-table tbody');
  const pageInfo = document.getElementById('page-info');
  const prevBtn = document.getElementById('page-prev');
  const nextBtn = document.getElementById('page-next');
  const rows = tableBody ? tableBody.querySelectorAll('tr') : [];

  if (rows.length) {
    const perPage = 20;
    let currentPage = 1;
    const totalPages = Math.ceil(rows.length / perPage);

    function showPage(page) {
      if (page < 1 || page > totalPages) return;
      currentPage = page;
      const start = (page - 1) * perPage;
      const end = start + perPage;
      rows.forEach((row, i) => {
        row.style.display = (i >= start && i < end) ? '' : 'none';
      });
      if (pageInfo) pageInfo.textContent = 'Página ' + page + ' de ' + totalPages;
    }

    if (prevBtn) prevBtn.addEventListener('click', () => showPage(currentPage - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => showPage(currentPage + 1));

    showPage(1);
  }

  // === LUCIde ICONS ===
  if (window.lucide) {
    lucide.createIcons();
  }
})();

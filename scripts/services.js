/**
 * CarVice Express (كارفيس إكسبريس) - Services Page Script
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Header scroll effect & Hero alignment
  const siteHeader = document.getElementById('site-header');
  function syncHeroOffset() {
    if (siteHeader && window.scrollY === 0) {
      const headerHeight = Math.floor(siteHeader.getBoundingClientRect().height);
      const offset = Math.max(0, headerHeight - 1);
      document.documentElement.style.setProperty('--services-hero-margin', `${offset}px`);
    }
  }
  syncHeroOffset();
  window.addEventListener('resize', syncHeroOffset);

  if (siteHeader) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 30) {
        siteHeader.classList.add('is-scrolled');
      } else {
        siteHeader.classList.remove('is-scrolled');
      }
    }, { passive: true });
  }

  // 2. Mobile Drawer Navigation
  const mobileBtn = document.getElementById('mobile-menu-btn');
  const mobileDrawer = document.getElementById('mobile-drawer');

  if (mobileBtn && mobileDrawer) {
    mobileBtn.addEventListener('click', () => {
      const isOpen = mobileDrawer.classList.toggle('is-open');
      mobileBtn.classList.toggle('is-active', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    document.querySelectorAll('.mobile-nav-link').forEach(link => {
      link.addEventListener('click', () => {
        mobileDrawer.classList.remove('is-open');
        mobileBtn.classList.remove('is-active');
        document.body.style.overflow = '';
      });
    });
  }

  // 3. Touch Device Card Flip Support
  // On touch screens, first tap flips the card, second tap opens the WhatsApp link
  const isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
  if (isTouchDevice) {
    const cards = document.querySelectorAll('.service-card');
    cards.forEach(card => {
      card.addEventListener('click', (e) => {
        if (!card.classList.contains('is-active')) {
          // If clicking on front face on mobile, flip it first
          e.preventDefault();
          cards.forEach(c => {
            if (c !== card) c.classList.remove('is-active');
          });
          card.classList.add('is-active');
        }
      });
    });

    // Tap outside to close active flipped card
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.service-card')) {
        cards.forEach(c => c.classList.remove('is-active'));
      }
    });
  }
});

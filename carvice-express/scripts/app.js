/**
 * CarVice Express (كارفيس إكسبريس)
 * Interactive Application Controller
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initServiceHoverCards();
  initFaqAccordion();
  initBeforeAfterSlider();
  initReviewsCarousel();
  initPersonasSlider();
  initBranchHotspots();
  initOffersCarousel();
  initScrollAnimations();
});

/* --------------------------------------------------------------------------
   1. Navbar & Mobile Drawer
   -------------------------------------------------------------------------- */
function initNavbar() {
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.mobile-toggle');
  const drawer = document.querySelector('.mobile-drawer');
  const overlay = document.querySelector('.mobile-drawer-overlay');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');

  // Sticky Header on Scroll
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    }, { passive: true });
  }

  // Drawer Toggle
  function toggleDrawer(open) {
    if (!drawer) return;
    const isOpen = open !== undefined ? open : !drawer.classList.contains('is-open');
    drawer.classList.toggle('is-open', isOpen);
    if (overlay) overlay.classList.toggle('is-open', isOpen);
    if (toggle) toggle.classList.toggle('is-active', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  }

  if (toggle) {
    toggle.addEventListener('click', () => toggleDrawer());
  }
  if (overlay) {
    overlay.addEventListener('click', () => toggleDrawer(false));
  }

  // ScrollSpy & Smooth Anchor Navigation
  const allNavLinks = document.querySelectorAll('.desktop-nav .nav-link, .mobile-drawer .mobile-nav-link');
  const navSections = [
    { id: 'hero', navTarget: 'hero' },
    { id: 'services', navTarget: 'services' },
    { id: 'about', navTarget: 'about' },
    { id: 'engine-feature', navTarget: 'about' },
    { id: 'why-us', navTarget: 'about' },
    { id: 'offers', navTarget: 'offers' },
    { id: 'faq', navTarget: 'faq' },
    { id: 'testimonials', navTarget: 'faq' },
    { id: 'personas', navTarget: 'branches' },
    { id: 'branches', navTarget: 'branches' },
    { id: 'site-footer', navTarget: 'site-footer' }
  ];

  function setActiveNav(targetId) {
    if (!targetId) return;
    allNavLinks.forEach(link => {
      const sectionAttr = link.getAttribute('data-section') || '';
      const href = link.getAttribute('href') || '';
      if (sectionAttr === targetId || href === `#${targetId}` || href.endsWith(`#${targetId}`)) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  function updateActiveNav() {
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    const headerOffset = 130;

    // Check if at the bottom of the page
    if ((window.innerHeight + scrollY) >= document.documentElement.scrollHeight - 80) {
      setActiveNav('site-footer');
      return;
    }

    // Determine current section in view
    let currentTarget = 'hero';
    for (let i = 0; i < navSections.length; i++) {
      const el = document.getElementById(navSections[i].id);
      if (el) {
        const top = el.offsetTop - headerOffset;
        if (scrollY >= top) {
          currentTarget = navSections[i].navTarget;
        }
      }
    }
    setActiveNav(currentTarget);
  }

  allNavLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href') || '';

      // If it's an anchor on this page
      if (href.startsWith('#') || (href.includes('#') && (href.startsWith(window.location.origin) || !href.startsWith('http')))) {
        const hash = href.substring(href.indexOf('#') + 1);
        const targetEl = document.getElementById(hash);
        if (targetEl) {
          e.preventDefault();
          const headerOffset = 80;
          const targetY = targetEl.offsetTop - headerOffset;
          window.scrollTo({
            top: targetY,
            behavior: 'smooth'
          });

          setActiveNav(hash);
          toggleDrawer(false);
          return;
        }
      }

      // If it's a full page navigation, ensure mobile drawer closes smoothly
      toggleDrawer(false);
    });
  });

  window.addEventListener('scroll', updateActiveNav, { passive: true });
  setTimeout(updateActiveNav, 150);
}

/* --------------------------------------------------------------------------
   2. FAQ Accordion
   -------------------------------------------------------------------------- */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question-btn');
    if (!questionBtn) return;

    questionBtn.addEventListener('click', () => {
      const isActive = item.classList.contains('is-active');

      // Close all others
      faqItems.forEach(otherItem => {
        otherItem.classList.remove('is-active');
        const btn = otherItem.querySelector('.faq-question-btn');
        if (btn) btn.setAttribute('aria-expanded', 'false');
      });

      // Toggle current
      if (!isActive) {
        item.classList.add('is-active');
        questionBtn.setAttribute('aria-expanded', 'true');
      } else {
        questionBtn.setAttribute('aria-expanded', 'false');
      }
    });
  });
}

/* --------------------------------------------------------------------------
   3. Interactive Before / After Engine Slider
   -------------------------------------------------------------------------- */
function initBeforeAfterSlider() {
  const container = document.querySelector('.engine-comparison-wrapper');
  const handle = document.querySelector('.engine-slider-handle');
  const dirtyOverlay = document.querySelector('.engine-dirty-overlay');

  if (!container || !handle || !dirtyOverlay) return;

  let isDragging = false;

  function updateSliderPosition(clientX) {
    const rect = container.getBoundingClientRect();
    let x = clientX - rect.left;
    
    // Clamp within container
    if (x < 0) x = 0;
    if (x > rect.width) x = rect.width;

    const percentage = (x / rect.width) * 100;
    handle.style.left = `${percentage}%`;
    dirtyOverlay.style.clipPath = `polygon(0% 0%, ${percentage}% 0%, ${percentage}% 100%, 0% 100%)`;
  }

  // Mouse Events
  container.addEventListener('mousedown', (e) => {
    isDragging = true;
    updateSliderPosition(e.clientX);
    e.preventDefault();
  });

  window.addEventListener('mouseup', () => {
    isDragging = false;
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    updateSliderPosition(e.clientX);
  });

  // Touch Events (Mobile)
  container.addEventListener('touchstart', (e) => {
    isDragging = true;
    if (e.touches && e.touches[0]) {
      updateSliderPosition(e.touches[0].clientX);
    }
  }, { passive: true });

  window.addEventListener('touchend', () => {
    isDragging = false;
  });

  window.addEventListener('touchmove', (e) => {
    if (!isDragging || !e.touches || !e.touches[0]) return;
    updateSliderPosition(e.touches[0].clientX);
  }, { passive: true });

  // Click anywhere on container to slide
  container.addEventListener('click', (e) => {
    updateSliderPosition(e.clientX);
  });
}

/* --------------------------------------------------------------------------
   4. Customer Reviews Carousel (Mobile Slider)
   -------------------------------------------------------------------------- */
function initReviewsCarousel() {
  const container = document.getElementById('reviews-slider');
  const dots = document.querySelectorAll('.reviews-pagination-dots .pagination-dot');
  const cards = container ? container.querySelectorAll('.review-card') : document.querySelectorAll('.review-card');

  if (!cards.length || !dots.length) return;

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      dots.forEach(d => d.classList.remove('active'));
      dot.classList.add('active');

      if (cards[index]) {
        cards[index].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      }
    });
  });

  if (container) {
    let scrollTimeout;
    container.addEventListener('scroll', () => {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(() => {
        const containerCenter = container.getBoundingClientRect().left + container.offsetWidth / 2;
        let closestIndex = 0;
        let minDiff = Infinity;

        cards.forEach((card, idx) => {
          const cardCenter = card.getBoundingClientRect().left + card.offsetWidth / 2;
          const diff = Math.abs(cardCenter - containerCenter);
          if (diff < minDiff) {
            minDiff = diff;
            closestIndex = idx;
          }
        });

        dots.forEach((d, i) => d.classList.toggle('active', i === closestIndex));
      }, 50);
    }, { passive: true });
  }
}

/* --------------------------------------------------------------------------
   4b. Who We Serve (Personas) Mobile Slider
   -------------------------------------------------------------------------- */
function initPersonasSlider() {
  const container = document.getElementById('personas-slider');
  const dots = document.querySelectorAll('.personas-pagination-dots .pagination-dot');
  const cards = container ? container.querySelectorAll('.persona-card') : document.querySelectorAll('.persona-card');

  if (!cards.length || !dots.length) return;

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      dots.forEach(d => d.classList.remove('active'));
      dot.classList.add('active');

      if (cards[index]) {
        cards[index].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      }
    });
  });

  if (container) {
    let scrollTimeout;
    container.addEventListener('scroll', () => {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(() => {
        const containerCenter = container.getBoundingClientRect().left + container.offsetWidth / 2;
        let closestIndex = 0;
        let minDiff = Infinity;

        cards.forEach((card, idx) => {
          const cardCenter = card.getBoundingClientRect().left + card.offsetWidth / 2;
          const diff = Math.abs(cardCenter - containerCenter);
          if (diff < minDiff) {
            minDiff = diff;
            closestIndex = idx;
          }
        });

        dots.forEach((d, i) => d.classList.toggle('active', i === closestIndex));
      }, 50);
    }, { passive: true });
  }
}

/* --------------------------------------------------------------------------
   5. Interactive Branch Map Hotspots
   -------------------------------------------------------------------------- */
function initBranchHotspots() {
  const hotspots = document.querySelectorAll('.map-hotspot');

  hotspots.forEach(spot => {
    spot.addEventListener('click', (e) => {
      e.stopPropagation();
      const branchName = spot.getAttribute('data-branch') || 'فرع كارفيس إكسبريس';
      const city = spot.getAttribute('data-city') || 'المنطقة الشرقية';
      
      // Subtle tactile pulse on click
      spot.classList.add('is-clicked');
      setTimeout(() => spot.classList.remove('is-clicked'), 400);

      // Notification or modal feedback
      alert(`كارفيس إكسبريس - ${branchName}\nالموقع: ${city}\nساعات العمل: 8:00 ص - 11:00 م يومياً`);
    });
  });
}

/* --------------------------------------------------------------------------
   6. Services Cards: Desktop Hover & Mobile Slider / Tap Reveal
   -------------------------------------------------------------------------- */
function initServiceHoverCards() {
  const container = document.getElementById('services-slider');
  const cards = document.querySelectorAll('.service-hover-card');
  const dots = document.querySelectorAll('#services-dots .pagination-dot');
  if (!cards.length) return;

  // Dots click navigation (Mobile)
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      dots.forEach(d => d.classList.remove('active'));
      dot.classList.add('active');

      if (cards[index]) {
        cards[index].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      }
    });
  });

  // Mobile scroll synchronization for pagination dots
  if (container) {
    let scrollTimeout;
    container.addEventListener('scroll', () => {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(() => {
        const containerCenter = container.getBoundingClientRect().left + container.offsetWidth / 2;
        let closestIndex = 0;
        let minDiff = Infinity;

        cards.forEach((card, idx) => {
          const cardCenter = card.getBoundingClientRect().left + card.offsetWidth / 2;
          const diff = Math.abs(cardCenter - containerCenter);
          if (diff < minDiff) {
            minDiff = diff;
            closestIndex = idx;
          }
        });

        dots.forEach((d, i) => d.classList.toggle('active', i === closestIndex));
      }, 50);
    }, { passive: true });
  }

  // On touch devices / mobile, tapping a card reveals back info, tapping again/clicking link navigates
  cards.forEach(card => {
    card.addEventListener('click', (e) => {
      // If user clicked directly on the WhatsApp link on the revealed back card, let it open
      if (e.target.closest('.service-card-full-link') && card.classList.contains('is-active')) {
        return;
      }

      // Check if this card is already active
      const isCurrentlyActive = card.classList.contains('is-active');

      // Close other cards
      cards.forEach(c => {
        if (c !== card) c.classList.remove('is-active');
      });

      // Toggle current card
      if (!isCurrentlyActive) {
        card.classList.add('is-active');
      } else {
        card.classList.remove('is-active');
      }
    });
  });

  // Close cards when tapping outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.service-hover-card')) {
      cards.forEach(card => card.classList.remove('is-active'));
    }
  });
}

/* --------------------------------------------------------------------------
   7. Offers 5-Slide Interactive Carousel
   -------------------------------------------------------------------------- */
function initOffersCarousel() {
  const track = document.getElementById('offers-track');
  const viewport = document.getElementById('offers-viewport');
  const prevBtn = document.getElementById('offers-prev-btn');
  const nextBtn = document.getElementById('offers-next-btn');
  const dots = document.querySelectorAll('#offers-dots .offers-dot');
  const slides = track ? track.querySelectorAll('.offer-slide') : [];

  if (!track || !slides.length) return;

  let currentIndex = 0;
  let autoplayTimer = null;
  const totalSlides = slides.length;

  function updateSliderPosition() {
    if (currentIndex >= totalSlides) currentIndex = 0;
    if (currentIndex < 0) currentIndex = totalSlides - 1;

    const moveAmount = 100 * currentIndex;
    track.style.transform = `translateX(-${moveAmount}%)`;

    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentIndex);
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSliderPosition();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSliderPosition();
  }

  if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetAutoplay(); });
  if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetAutoplay(); });

  dots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      currentIndex = idx;
      updateSliderPosition();
      resetAutoplay();
    });
  });

  function startAutoplay() {
    stopAutoplay();
    autoplayTimer = setInterval(nextSlide, 4000);
  }

  function stopAutoplay() {
    if (autoplayTimer) clearInterval(autoplayTimer);
  }

  function resetAutoplay() {
    stopAutoplay();
    startAutoplay();
  }

  if (viewport) {
    viewport.addEventListener('mouseenter', stopAutoplay);
    viewport.addEventListener('mouseleave', startAutoplay);

    let touchStartX = 0;
    let touchEndX = 0;

    viewport.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      stopAutoplay();
    }, { passive: true });

    viewport.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      if (touchStartX - touchEndX > 40) {
        nextSlide();
      } else if (touchEndX - touchStartX > 40) {
        prevSlide();
      }
      startAutoplay();
    }, { passive: true });
  }

  updateSliderPosition();
  startAutoplay();
}

/* --------------------------------------------------------------------------
   8. Scroll Reveal Observer & Smooth Entrance Animations
   -------------------------------------------------------------------------- */
function initScrollAnimations() {
  const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

  if (!revealElements.length) return;

  // Mark JS reveal as active
  document.documentElement.classList.add('js-reveal-active');

  if (!('IntersectionObserver' in window)) {
    revealElements.forEach(el => el.classList.add('is-visible'));
    return;
  }

  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -20px 0px',
    threshold: 0.05
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        obs.unobserve(entry.target);
      }
    });
  }, observerOptions);

  revealElements.forEach(el => {
    // Immediately display elements if already in initial viewport
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      el.classList.add('is-visible');
    } else {
      observer.observe(el);
    }
  });
}

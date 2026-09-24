/**
 * CarVice Express (كارفيس إكسبريس)
 * Animation & Scroll Choreography
 */

document.addEventListener('DOMContentLoaded', () => {
  initProgressBarsAnimation();
  initSmoothScrollLinks();
});

/* --------------------------------------------------------------------------
   1. Progress Bar Counter Animation
   -------------------------------------------------------------------------- */
function initProgressBarsAnimation() {
  const progressGroup = document.querySelector('.why-progress-group');
  if (!progressGroup) return;

  let hasAnimated = false;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !hasAnimated) {
        hasAnimated = true;
        animateBars();
      }
    });
  }, { threshold: 0.2 });

  observer.observe(progressGroup);

  function animateBars() {
    const bars = progressGroup.querySelectorAll('.progress-fill');
    bars.forEach(bar => {
      const targetWidth = bar.getAttribute('data-target') || '0';
      bar.style.width = `${targetWidth}%`;
    });

    // Animate Number Counters
    const counters = progressGroup.querySelectorAll('.counter-val');
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
      let current = 0;
      const step = Math.ceil(target / 40);
      const timer = setInterval(() => {
        current += step;
        if (current >= target) {
          counter.textContent = `${target}%`;
          clearInterval(timer);
        } else {
          counter.textContent = `${current}%`;
        }
      }, 30);
    });
  }
}

/* --------------------------------------------------------------------------
   2. Smooth Scroll Navigation with Offset
   -------------------------------------------------------------------------- */
function initSmoothScrollLinks() {
  const links = document.querySelectorAll('a[href^="#"]');
  const header = document.querySelector('.site-header');

  links.forEach(link => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      if (targetId === '#' || !targetId) return;

      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        e.preventDefault();
        const headerOffset = header ? header.offsetHeight + 10 : 70;
        const elementPosition = targetEl.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
}

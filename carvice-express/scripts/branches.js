/**
 * CarVice Express - Branches Page Interactive Controller
 */

document.addEventListener('DOMContentLoaded', () => {
  initBranchesNavbar();
  initBranchFiltering();
});

/* --------------------------------------------------------------------------
   1. Navbar & Mobile Drawer
   -------------------------------------------------------------------------- */
function initBranchesNavbar() {
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.mobile-toggle');
  const drawer = document.querySelector('.mobile-drawer');
  const overlay = document.querySelector('.mobile-drawer-overlay');

  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 40) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    }, { passive: true });
  }

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
}

/* --------------------------------------------------------------------------
   2. Branch Filtering & Search
   -------------------------------------------------------------------------- */
function initBranchFiltering() {
  const filterBtns = document.querySelectorAll('.branch-filter-btn');
  const searchInput = document.getElementById('branches-search');
  const branchCards = document.querySelectorAll('.branch-card');
  const emptyState = document.getElementById('branches-empty');

  let activeCity = 'all';
  let searchTerm = '';

  function filterCards() {
    let visibleCount = 0;

    branchCards.forEach(card => {
      const city = card.getAttribute('data-city') || '';
      const text = card.textContent.toLowerCase();

      const matchesCity = activeCity === 'all' || city === activeCity;
      const matchesSearch = !searchTerm || text.includes(searchTerm);

      if (matchesCity && matchesSearch) {
        card.style.display = 'grid';
        card.style.opacity = '0';
        setTimeout(() => {
          card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
          card.style.opacity = '1';
        }, 30);
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    if (emptyState) {
      if (visibleCount === 0) {
        emptyState.classList.add('is-visible');
      } else {
        emptyState.classList.remove('is-visible');
      }
    }
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeCity = btn.getAttribute('data-filter') || 'all';
      filterCards();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      searchTerm = e.target.value.trim().toLowerCase();
      filterCards();
    });
  }
}

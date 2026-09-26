/**
 * CarVice Express - Branches Page Controller
 */

document.addEventListener('DOMContentLoaded', () => {
  initBranchesNavbar();
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

// Sticky nav shadow on scroll
const nav = document.getElementById('fff-nav');
if (nav) {
  window.addEventListener('scroll', () => {
    nav.style.boxShadow = window.scrollY > 10
      ? '0 2px 12px rgba(0,0,0,0.08)'
      : 'none';
  }, { passive: true });
}

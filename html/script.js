const toggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');
const year = document.getElementById('year');
const themeButton = document.querySelector('.theme-toggle');
const themeLabel = document.querySelector('.theme-toggle-label');
const themeIcon = document.querySelector('.theme-toggle-icon');
const formStatus = document.getElementById('form-status');

const applyTheme = (theme) => {
  document.body.classList.toggle('light', theme === 'light');
  if (themeButton) {
    themeButton.setAttribute('aria-pressed', String(theme === 'light'));
  }
  if (themeLabel) {
    themeLabel.textContent = theme === 'light' ? 'Dark' : 'Light';
  }
  if (themeIcon) {
    themeIcon.textContent = theme === 'light' ? '🌙' : '☀️';
  }
  localStorage.setItem('portfolio-theme', theme);
};

const savedTheme = localStorage.getItem('portfolio-theme');
const preferredTheme = savedTheme || (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
applyTheme(preferredTheme);

if (year) {
  year.textContent = new Date().getFullYear();
}

if (themeButton) {
  themeButton.addEventListener('click', () => {
    const nextTheme = document.body.classList.contains('light') ? 'dark' : 'light';
    applyTheme(nextTheme);
  });
}

if (toggle && navLinks) {
  toggle.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('active');
    toggle.setAttribute('aria-expanded', String(isOpen));
  });

  navLinks.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('active');
      toggle.setAttribute('aria-expanded', 'false');
    });
  });
}

if (formStatus) {
  const params = new URLSearchParams(window.location.search);
  const sent = params.get('sent');

  if (sent === '1') {
    formStatus.textContent = 'Thanks for your message. I will be in touch soon.';
  }
}

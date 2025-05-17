function toggleTheme() {
  const htmlEl = document.documentElement;
  const toggleBtn = document.getElementById('toggle-theme-btn');
  const currentTheme = htmlEl.getAttribute('data-theme');
  const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

  htmlEl.setAttribute('data-theme', newTheme);
  localStorage.setItem('theme', newTheme);

  // Update toggle state
  if (toggleBtn) {
    toggleBtn.checked = newTheme === 'dark';
  }
}

// Apply saved theme and toggle state on page load
document.addEventListener('DOMContentLoaded', () => {
  const savedTheme = localStorage.getItem('theme') || 'light';
  document.documentElement.setAttribute('data-theme', savedTheme);

  const toggleBtn = document.getElementById('toggle-theme-btn');
  if (toggleBtn) {
    toggleBtn.checked = savedTheme === 'dark';
    toggleBtn.addEventListener('change', toggleTheme);
  }
});
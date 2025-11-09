  // Loader
  window.onload = () => {
    document.getElementById('loader').classList.add('hidden');
  };

  // Navbar toggle
  function toggleMenu() {
    document.getElementById('navLinks').classList.toggle('active');
  }

  // Scroll reveal
  const faders = document.querySelectorAll('.fadeInSection');
  const appearOptions = { threshold: 0.2 };
  const appearOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, appearOptions);

  faders.forEach(section => {
    appearOnScroll.observe(section);
  });
  
  function toggleDarkMode() {
  document.body.classList.toggle("dark");

}

// mobile menu toggle
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

// smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// header background on scroll
window.addEventListener('scroll', function() {
    const header = document.querySelector('nav');
    if (window.scrollY > 100) {
        header.classList.add('bg-light-cream/95');
    } else {
        header.classList.remove('bg-light-cream/95');
    }
});

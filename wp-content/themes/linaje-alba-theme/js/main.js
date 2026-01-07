// Header appearance on scroll
const header = document.querySelector('.header');
const utilityBar = document.querySelector('.utility-bar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
        header.style.boxShadow = 'var(--shadow)';
        header.style.transform = 'translateY(0)';
    } else {
        header.style.boxShadow = 'none';
    }
});

// Smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const target = document.querySelector(targetId);
        if (target) {
            const headerOffset = 70;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Advanced Scroll Observer for Reveal Effects
const observerOptions = {
    threshold: 0.15,
    rootMargin: '0px 0px -50px 0px'
};

const revealOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            revealOnScroll.unobserve(entry.target);
        }
    });
}, observerOptions);

// Initialize elements for reveal
document.querySelectorAll('.product-card, .section-title, .opportunity-content').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1)';
    revealOnScroll.observe(el);
});

// Inject "is-visible" styles dynamically if needed, or rely on JS
const style = document.createElement('style');
style.innerHTML = `
    .is-visible {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
`;
document.head.appendChild(style);



// Initialize Lucide icons
if (window.lucide) {
    lucide.createIcons();
}

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

// Carousel Navigation
const track = document.querySelector('.carousel-track');
const prevBtn = document.querySelector('.carousel-btn.prev');
const nextBtn = document.querySelector('.carousel-btn.next');

if (track && prevBtn && nextBtn) {
    nextBtn.addEventListener('click', () => {
        track.scrollBy({ left: 300, behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
        track.scrollBy({ left: -300, behavior: 'smooth' });
    });
}

// Registration Form Logic
document.addEventListener('DOMContentLoaded', () => {
    // 1. Populate Date of Birth Dropdowns
    const dobDay = document.getElementById('dobDay');
    const dobMonth = document.getElementById('dobMonth');
    const dobYear = document.getElementById('dobYear');

    if (dobDay && dobMonth && dobYear) {
        // Days 1-31
        for (let i = 1; i <= 31; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            dobDay.appendChild(option);
        }

        // Months
        const months = [
            "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
        ];
        months.forEach((month, index) => {
            const option = document.createElement('option');
            option.value = index + 1; // 1-12
            option.textContent = month;
            dobMonth.appendChild(option);
        });

        // Years (Last 100 years, ending 18 years ago to suggest adulthood, but allowing selection for validation)
        const currentYear = new Date().getFullYear();
        for (let i = currentYear; i >= currentYear - 100; i--) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            dobYear.appendChild(option);
        }
    }

    // 2. Form Validation
    const form = document.getElementById('registrationForm');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let errors = [];

            // A. Name: Letters only (Tu Nombre, Ref 1, Ref 2)
            const nameInputs = [
                { el: document.getElementById('regName'), name: "Tu Nombre" },
                { el: document.getElementById('ref1Name'), name: "Nombre de Referencia 1" },
                { el: document.getElementById('ref2Name'), name: "Nombre de Referencia 2" }
            ];

            // Allow letters, spaces, typical accents
            const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

            nameInputs.forEach(input => {
                if (input.el && input.el.value.trim() !== "") {
                    if (!nameRegex.test(input.el.value.trim())) {
                        errors.push(`Error en ${input.name}: Solo se permiten letras (sin números ni símbolos).`);
                    }
                }
            });

            // B. Phone: Exactly 10 digits (Tu Celular/Fijo, Ref 1/2 Celular)
            const phones = [
                { el: document.getElementById('regPhoneMobile'), name: "Tu Celular" },
                { el: document.getElementById('regPhoneFixed'), name: "Tu Teléfono Fijo" },
                { el: document.getElementById('ref1Mobile'), name: "Celular de Referencia 1" },
                { el: document.getElementById('ref2Mobile'), name: "Celular de Referencia 2" }
            ];

            phones.forEach(phone => {
                if (phone.el && phone.el.value.trim() !== "") {
                    const phoneRegex = /^\d{10}$/;
                    if (!phoneRegex.test(phone.el.value.trim())) {
                        errors.push(`Error en ${phone.name}: Debe tener exactamente 10 dígitos (ni más ni menos).`);
                    }
                }
            });

            // C. Postal Code: Max 6 digits
            const cpInput = document.getElementById('regCP');
            const cpRegex = /^\d{1,6}$/;
            if (cpInput && !cpRegex.test(cpInput.value.trim())) {
                errors.push("Error en Código Postal: Debe ser numérico y máximo 6 dígitos.");
            }

            // D. Email Validation (@ check)
            const emailInput = document.getElementById('regEmail');
            if (emailInput && emailInput.value.trim() !== "") {
                if (!emailInput.value.includes('@')) {
                    errors.push("Error en Tu Correo: Falta el símbolo '@'.");
                }
            }

            // E. Civil Status
            const civilStatus = document.getElementById('civilStatus');
            if (civilStatus && civilStatus.value === "") {
                // Optional check depending on if it is required. Assuming optional based on HTML, but good to validate if selected.
                // However, user asked to "add options", maybe implies requirement? 
                // HTML doesn't have 'required' on it. I will leave it as is unless value implies 'Seleccionar'.
            }

            // D. Age Calculation (>= 18 years exactly)
            const d = parseInt(dobDay.value);
            const m = parseInt(dobMonth.value);
            const y = parseInt(dobYear.value);

            if (!d || !m || !y) {
                errors.push("Por favor selecciona tu fecha de nacimiento completa.");
            } else {
                const birthDate = new Date(y, m - 1, d); // Month is 0-indexed
                const today = new Date();

                let age = today.getFullYear() - birthDate.getFullYear();
                const mDiff = today.getMonth() - birthDate.getMonth();

                // Adjust age if birthday hasn't happened yet this year
                if (mDiff < 0 || (mDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }

                if (age < 18) {
                    errors.push("Debes ser mayor de edad para registrarte (18 años cumplidos).");
                }
            }

            if (errors.length > 0) {
                alert(errors.join("\n"));
            } else {
                alert("¡Formulario validado correctamente! Enviando datos...");
                // form.submit(); // Uncomment to actually submit
            }
        });
    }
});

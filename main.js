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

    // 1.1 Populate State Dropdown
    const regState = document.getElementById('regState');
    if (regState) {
        const states = [
            "Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas",
            "Chihuahua", "Ciudad de México", "Coahuila", "Colima", "Durango", "Guanajuato",
            "Guerrero", "Hidalgo", "Jalisco", "México", "Michoacán", "Morelos", "Nayarit",
            "Nuevo León", "Oaxaca", "Puebla", "Querétaro", "Quintana Roo", "San Luis Potosí",
            "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas"
        ];
        states.forEach(state => {
            const option = document.createElement('option');
            option.value = state;
            option.textContent = state;
            regState.appendChild(option);
        });
    }

    // 2. Form Validation & Submission
    const form = document.getElementById('registrationForm');
    if (form) {
        // Helper to show inline error
        const showError = (input, message) => {
            const parent = input.parentElement;
            let errorMsg = parent.querySelector('.error-message');
            if (!errorMsg) {
                errorMsg = document.createElement('span');
                errorMsg.className = 'error-message';
                parent.appendChild(errorMsg);
            }
            errorMsg.style.color = '#dc3545';
            errorMsg.style.fontSize = '0.85rem';
            errorMsg.style.marginTop = '0.25rem';
            errorMsg.style.display = 'block';
            errorMsg.textContent = message;
            input.classList.add('input-error');
        };

        // Helper to clear error
        const clearError = (input) => {
            const errorEl = input.parentElement.querySelector('.error-message');
            if (errorEl) {
                errorEl.remove();
            }
            input.classList.remove('input-error');
        };

        // Clear errors on input
        form.querySelectorAll('input, select').forEach(el => {
            el.addEventListener('input', () => clearError(el));
            el.addEventListener('change', () => clearError(el));
        });

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            let isValid = true;

            // A. Name: Letters only (Tu Nombre, Ref 1, Ref 2)
            const nameInputs = [
                { el: document.getElementById('regName'), name: "Tu Nombre" },
                { el: document.getElementById('regPaName'), name: "Apellido Paterno" }, // Added Logic
                { el: document.getElementById('regMaName'), name: "Apellido Materno" }, // Added Logic
                { el: document.getElementById('ref1Name'), name: "Nombre de Referencia 1" },
                { el: document.getElementById('ref2Name'), name: "Nombre de Referencia 2" }
            ];

            const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

            nameInputs.forEach(input => {
                if (input.el && input.el.value.trim() !== "") {
                    // Check if required or just validation on filled
                    if (!nameRegex.test(input.el.value.trim())) {
                        showError(input.el, `Solo se permiten letras en ${input.name}.`);
                        isValid = false;
                    }
                } else if (input.el && input.el.hasAttribute('required') && input.el.value.trim() === "") {
                    showError(input.el, "Este campo es obligatorio.");
                    isValid = false;
                }
            });

            // B. Phone: Exactly 10 digits
            // Only validate 'regPhoneMobile' (WhatsApp) and References as mandatory. 
            // 'regPhoneFixed' is optional but if filled, must be 10 digits.
            const phones = [
                { el: document.getElementById('regPhoneWhatsApp'), name: "Tu WhatsApp", required: true },
                { el: document.getElementById('regPhoneFixed'), name: "Tu Teléfono Fijo", required: false },
                { el: document.getElementById('ref1Mobile'), name: "WhatsApp de Referencia 1", required: true },
                { el: document.getElementById('ref2Mobile'), name: "WhatsApp de Referencia 2", required: true }
            ];

            const phoneRegex = /^\d{10}$/;

            phones.forEach(phone => {
                const val = phone.el ? phone.el.value.trim() : "";
                if (phone.el) {
                    if (phone.required && !val) {
                        showError(phone.el, `Este campo es obligatorio.`);
                        isValid = false;
                    } else if (val !== "") {
                        if (!phoneRegex.test(val)) {
                            showError(phone.el, `El número debe tener 10 dígitos.`);
                            isValid = false;
                        }
                    }
                }
            });

            // C. Postal Code
            const cpInput = document.getElementById('regCP');
            const cpRegex = /^\d{1,6}$/;
            if (cpInput) {
                if (cpInput.value.trim() === "") {
                    showError(cpInput, "Código Postal obligatorio.");
                    isValid = false;
                } else if (!cpRegex.test(cpInput.value.trim())) {
                    showError(cpInput, "Máximo 6 dígitos numéricos.");
                    isValid = false;
                }
            }

            // D. Email
            const emailInput = document.getElementById('regEmail');
            if (emailInput) {
                const val = emailInput.value.trim();
                if (val === "") {
                    showError(emailInput, "El correo es obligatorio.");
                    isValid = false;
                } else if (!val.includes('@')) {
                    showError(emailInput, "El correo debe incluir un '@'.");
                    isValid = false;
                } else {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(val)) {
                        showError(emailInput, "Formato de correo no válido.");
                        isValid = false;
                    }
                }
            }

            // E. Date of Birth logic
            const d = parseInt(dobDay.value);
            const m = parseInt(dobMonth.value);
            const y = parseInt(dobYear.value);

            if (!d || !m || !y) {
                // Highlight all since it is a group
                if (!d) showError(dobDay, "Día?");
                if (!m) showError(dobMonth, "Mes?");
                if (!y) showError(dobYear, "Año?");
                isValid = false;
            } else {
                const birthDate = new Date(y, m - 1, d);
                const today = new Date();
                let age = today.getFullYear() - birthDate.getFullYear();
                const mDiff = today.getMonth() - birthDate.getMonth();
                if (mDiff < 0 || (mDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }

                if (age < 18) {
                    showError(dobYear, "Debes ser mayor de 18 años.");
                    isValid = false;
                }
            }

            if (isValid) {
                // Prepare Data
                const submitBtn = form.querySelector('.btn-submit');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Enviando...';
                submitBtn.disabled = true;

                const formData = {
                    name: document.getElementById('regName').value + ' ' + (document.getElementById('regPaName')?.value || '') + ' ' + (document.getElementById('regMaName')?.value || ''),
                    email: emailInput.value,
                    phone: document.getElementById('regPhoneWhatsApp').value,
                    cp: cpInput.value,
                };

                try {
                    const response = await fetch('linaje-alba-theme/procesar.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(formData)
                    });

                    const result = await response.json();

                    if (result.success) {
                        alert("¡Tu registro se ha enviado correctamente! Por favor, espera a que alguno de nuestros consultores te contacte.");
                        form.reset();
                    } else {
                        alert("Error: " + result.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert("Ocurrió un error al enviar el formulario. Intenta de nuevo.");
                } finally {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }
            }
        });
    }
});


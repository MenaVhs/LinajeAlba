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

    // 2. Form Validation
    const form = document.getElementById('registrationForm');
    if (form) {
        // Helper to show/clear errors
        const showError = (input, message) => {
            const parent = input.parentElement;
            // Remove existing error if any
            clearError(input);
            const errorMsg = document.createElement('span');
            errorMsg.className = 'error-message';
            errorMsg.style.color = '#dc3545'; // Bootstrap danger color or standard red
            errorMsg.style.fontSize = '0.85rem';
            errorMsg.style.marginTop = '0.25rem';
            errorMsg.style.display = 'block';
            errorMsg.textContent = message;
            parent.appendChild(errorMsg);
            input.classList.add('input-error'); // Optional: Add a class for border styling if you want
        };

        const clearError = (input) => {
            const parent = input.parentElement;
            const existing = parent.querySelector('.error-message');
            if (existing) {
                existing.remove();
            }
            input.classList.remove('input-error');
        };

        const clearAllErrors = () => {
            const errors = form.querySelectorAll('.error-message');
            errors.forEach(el => el.remove());
            const inputs = form.querySelectorAll('.input-error');
            inputs.forEach(el => el.classList.remove('input-error'));
        };

        // Validate generic fields
        const validateRequired = (input, fieldName) => {
            if (!input.value.trim()) {
                showError(input, `El campo ${fieldName} es obligatorio.`);
                return false;
            }
            return true;
        };

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            clearAllErrors();
            let isValid = true;

            // A. Name: Letters only (Tu Nombre, Ref 1, Ref 2)
            const nameInputs = [
                { el: document.getElementById('regName'), name: "Nombre" },
                { el: document.getElementById('regMaName'), name: "Apellido materno" },
                { el: document.getElementById('ref1Name'), name: "Nombre de Referencia 1" },
                { el: document.getElementById('ref2Name'), name: "Nombre de Referencia 2" }
            ];

            const nameRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

            nameInputs.forEach(item => {
                if (item.el) {
                    // Check required first if it's a required field in HTML (we can infer or hardcode)
                    // regName and regMaName are required. References might be optional in HTML? 
                    // Let's assume standard requirement if value is empty.
                    // But for references, if they are empty, maybe we skip if they are optional? 
                    // HTML says ids ref1Name/ref2Name don't have required attribute in snippet.
                    // But let's check values.

                    if (item.el.hasAttribute('required') && !item.el.value.trim()) {
                        showError(item.el, `El campo ${item.name} es obligatorio.`);
                        isValid = false;
                    } else if (item.el.value.trim() !== "") {
                        if (!nameRegex.test(item.el.value.trim())) {
                            showError(item.el, `Solo se permiten letras.`);
                            isValid = false;
                        }
                    }
                }
            });

            // B. Email Validation
            const emailInput = document.getElementById('regEmail');
            if (emailInput) {
                const val = emailInput.value.trim();
                if (!val) {
                    showError(emailInput, "El correo es obligatorio.");
                    isValid = false;
                } else if (!val.includes('@')) {
                    showError(emailInput, "El correo debe incluir un '@'.");
                    isValid = false;
                } else {
                    // Simple regex for format
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(val)) {
                        showError(emailInput, "Formato de correo no válido.");
                        isValid = false;
                    }
                }
            }

            // C. Phone: Exactly 10 digits
            // Note: User swapped labels in previous edit? 
            // regWhatsApp -> "Tu WhatsApp" (User Edit) / "Teléfono WhatsApp" (HTML)
            // regPhoneFixed -> "Tu Teléfono Fijo" (User Edit) / "Teléfono WhatsApp" (HTML)
            // We adhere to the user's latest JS definition or just treat all phones similarly: Optional vs Format.

            const phones = [
                { el: document.getElementById('regPhoneWhatsApp'), name: "Teléfono WhatsApp" },
                { el: document.getElementById('regPhoneFixed'), name: "Teléfono Fijo" },
                { el: document.getElementById('ref1Mobile'), name: "WhatsApp Ref 1" },
                { el: document.getElementById('ref2Mobile'), name: "WhatsApp Ref 2" }
            ];

            phones.forEach(phone => {
                const val = phone.el ? phone.el.value.trim() : "";
                if (phone.el) {
                    // 1. Mandatory requirement for specific fields
                    const isRequired = phone.el.hasAttribute('required') || phone.name === "Teléfono WhatsApp";

                    if (isRequired && !val) {
                        showError(phone.el, `El campo ${phone.name} es obligatorio.`);
                        isValid = false;
                    }
                    // 2. Format check if not empty
                    else if (val !== "") {
                        const phoneRegex = /^\d{10}$/;
                        if (!phoneRegex.test(val)) {
                            showError(phone.el, `El número debe tener 10 dígitos.`);
                            isValid = false;
                        }
                    }
                }
            });

            // D. Postal Code
            const cpInput = document.getElementById('regCP');
            if (cpInput) {
                if (!cpInput.value.trim()) {
                    showError(cpInput, "El Código Postal es obligatorio.");
                    isValid = false;
                } else {
                    const cpRegex = /^\d{1,6}$/;
                    if (!cpRegex.test(cpInput.value.trim())) {
                        showError(cpInput, "CP inválido (numérico, max 6 dígitos).");
                        isValid = false;
                    }
                }
            }

            // E. Date of Birth
            const dobDay = document.getElementById('dobDay');
            const dobMonth = document.getElementById('dobMonth');
            const dobYear = document.getElementById('dobYear');

            if (dobDay && dobMonth && dobYear) {
                if (!dobDay.value || !dobMonth.value || !dobYear.value) {
                    // Show error on the parent container or one of the selects?
                    // Let's show on the last one or create a special place.
                    // The parent is .dob-group.
                    const dobGroup = dobDay.parentElement;
                    // Custom error placement for group
                    const existing = dobGroup.parentElement.querySelector('.error-message');
                    if (existing) existing.remove();

                    const errorMsg = document.createElement('span');
                    errorMsg.className = 'error-message';
                    errorMsg.style.color = '#dc3545';
                    errorMsg.style.fontSize = '0.85rem';
                    errorMsg.textContent = "Fecha de nacimiento incompleta.";
                    errorMsg.style.display = 'block';
                    dobGroup.parentElement.appendChild(errorMsg);
                    isValid = false;
                } else {
                    // Age check
                    const d = parseInt(dobDay.value);
                    const m = parseInt(dobMonth.value);
                    const y = parseInt(dobYear.value);
                    const birthDate = new Date(y, m - 1, d);
                    const today = new Date();
                    let age = today.getFullYear() - birthDate.getFullYear();
                    const mDiff = today.getMonth() - birthDate.getMonth();
                    if (mDiff < 0 || (mDiff === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }

                    if (age < 18) {
                        const dobGroup = dobDay.parentElement;
                        const existing = dobGroup.parentElement.querySelector('.error-message');
                        if (existing) existing.remove();

                        const errorMsg = document.createElement('span');
                        errorMsg.className = 'error-message';
                        errorMsg.style.color = '#dc3545';
                        errorMsg.style.fontSize = '0.85rem';
                        errorMsg.textContent = "Debes ser mayor de 18 años.";
                        errorMsg.style.display = 'block';
                        dobGroup.parentElement.appendChild(errorMsg);
                        isValid = false;
                    } else {
                        // Clear error if valid
                        const dobGroup = dobDay.parentElement;
                        const existing = dobGroup.parentElement.querySelector('.error-message');
                        if (existing) existing.remove();
                    }
                }
            }

            if (isValid) {
                // Submit or Ajax
                // alert("¡Formulario validado correctamente! Enviando datos...");

                // Construct FormData or similar
                const formData = new FormData(form);

                // For now, let's simulate submission or call the real submit
                // If using PHP action:
                // form.submit();

                // If using AJAX (implied by previous context of procesar.php):
                const submitBtn = form.querySelector('.btn-submit');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Enviando...';
                submitBtn.disabled = true;

                fetch('procesar.php', { // Verify path
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('¡Registro exitoso! Gracias por unirte.');
                            form.reset();
                        } else {
                            alert('Error al enviar: ' + (data.message || 'Intente nuevamente.'));
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        alert('Hubo un error de conexión.');
                    })
                    .finally(() => {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    });
            }
        });
    }
});

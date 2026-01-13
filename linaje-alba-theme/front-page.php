<?php get_header(); ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-content">
                    <p class="brand-tag">LINAJE ALBA x JAFRA</p>
                    <h1>Tu Camino Real a la <span style="color: var(--jafra-purple);">Belleza</span></h1>
                    <p>Te saluda Luz del Alba, líder en LinajeAlba. Te acompaño a descubrir la ciencia de JAFRA y a
                        emprender con éxito en el mundo de la belleza.</p>
                    <div class="hero-btns">
                        <a href="#skincare" class="btn-regimen">Conoce más de mí</a>
                        <!-- <a href="#registration" class="btn-outline">Únete a mi Equipo</a> -->
                    </div>
                </div>
                <div class="hero-image personal-branded">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/girl.png" alt="Linaje Alba Lead Consultant" class="float-image">
                </div>
            </div>
        </section>

        <!-- Consultant Benefits Section -->
        <section class="consultant-section">
            <div class="container">
                <div class="benefits-header">
                    <h2>TU CAMINO DE<br>CONSULTOR(A) EMPIEZA AQUÍ</h2>
                    <p>COMIENZA A DISFRUTAR LOS BENEFICIOS:</p>
                </div>

                <div class="benefits-grid">
                    <!-- Benefit 1 -->
                    <div class="benefit-card">
                        <div class="benefit-number-badge">1</div>
                        <div class="benefit-text">
                            <strong>Crédito</strong> para emprender tu Negocio
                        </div>
                        <div class="benefit-icon">
                            <i data-lucide="credit-card" size="32"></i>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="benefit-card">
                        <div class="benefit-number-badge">2</div>
                        <div class="benefit-text">
                            Atractivo <strong>Margen de ganancia</strong> en cada producto.
                        </div>
                        <div class="benefit-icon">
                            <i data-lucide="percent" size="32"></i>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="benefit-card">
                        <div class="benefit-number-badge">3</div>
                        <div class="benefit-text">
                            <strong>Compra y Gana</strong>, promoción en la que recibes un incentivo en tu pedido.
                        </div>
                        <div class="benefit-icon">
                            <i data-lucide="shopping-bag" size="32"></i>
                        </div>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="benefit-card">
                        <div class="benefit-number-badge">4</div>
                        <div class="benefit-text">
                            Programa de <strong>Beneficios VIP</strong> que premia tu lealtad.
                        </div>
                        <div class="benefit-icon">
                            <i data-lucide="crown" size="32"></i>
                        </div>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="benefit-card">
                        <div class="benefit-number-badge">5</div>
                        <div class="benefit-text">
                            <strong>Invita y Gana</strong> ¡Cuando invitas a más personas, ellos ganan y tú ganas!
                        </div>
                        <div class="benefit-icon">
                            <i data-lucide="users" size="32"></i>
                        </div>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="benefit-card">
                        <div class="benefit-number-badge">6</div>
                        <div class="benefit-text">
                            <strong>JAFRA PUNTOS</strong> que puedes cambiar por los premios que tú elijas.
                        </div>
                        <div class="benefit-icon">
                            <i data-lucide="gift" size="32"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Highlights Section -->
        <section id="highlights" class="container">
            <div class="section-title"
                style="text-align: center; border-bottom: none; padding-bottom: 1rem; margin-bottom: 1rem;">
                <h2 style="color: var(--jafra-dark); font-size: 1.8rem;">PRODUCTOS PARA TODOS</h2>
                <p style="color: var(--text-muted); margin-top: 0.5rem;">Nuestros productos son los <strong
                        style="color: var(--text-main);">favoritos de los hogares mexicanos</strong>.</p>
            </div>

            <div class="highlights-grid">
                <!-- Card 1: Fragrances (Pink) -->
                <div class="highlight-card highlight-pink">
                    <div class="highlight-content">
                        <h3 style="font-size: 3.5rem; font-weight: 800;">#1</h3>
                        <p>En Venta Total de<br>Fragancias en México*</p>
                    </div>
                    <div class="highlight-img-placeholder">Foto Fragancias</div>
                </div>

                <!-- Card 2: Royal Jelly (Magenta) -->
                <div class="highlight-card highlight-magenta">
                    <div class="highlight-content">
                        <h3>PIONEROS EN ROYAL JELLY</h3>
                        <p>PARA EL CUIDADO DEL CUTIS</p>
                    </div>
                    <div class="highlight-img-placeholder">Foto Royal Jelly</div>
                </div>

                <!-- Card 3: Makeup (Purple) -->
                <div class="highlight-card highlight-purple">
                    <div class="highlight-content">
                        <h3>MAQUILLAJE SIEMPRE EN TENDENCIA</h3>
                    </div>
                    <div class="highlight-img-placeholder">Foto Maquillaje</div>
                </div>

                <!-- Card 4: Personal Care (Dark) -->
                <div class="highlight-card highlight-dark">
                    <div class="highlight-content">
                        <h3>EXPERTOS EN CUIDADO PERSONAL</h3>
                        <p>POR MÁS DE 6 DÉCADAS</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/personal_care.png" alt="Expertos en Cuidado Personal" class="highlight-img">
                </div>
            </div>
        </section>


        <!-- Monthly Catalog Section -->
        <section id="monthly-catalog" class="catalog-section">
            <div class="container catalog-container">
                <div class="catalog-text">
                    <h3>Catálogo de Negocio</h3>
                    <h2>OPORTUNIDADES <span class="highlight-text">ENERO 2026</span></h2>
                    <p>Descubre las promociones exclusivas y lanzamientos de este mes.</p>
                    <div class="catalog-actions">
                        <a href="<?php echo get_template_directory_uri(); ?>/media/Periodicos/CatalogoVigente.pdf" target="_blank" class="btn-catalog primary">
                            Ver Catálogo Digital <i data-lucide="book-open"></i>
                        </a>
                        <a href="<?php echo get_template_directory_uri(); ?>/media/Periodicos/CatalogoVigente.pdf" download class="btn-catalog secondary">
                            Descargar PDF <i data-lucide="download"></i>
                        </a>
                    </div>
                </div>
                <div class="catalog-preview">
                    <!-- Placeholder visual -->
                    <div class="catalog-cover-mockup">
                        <span>Catálogo<br>Vigente</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="vip-benefits" class="vip-section container">
            <h2 class="vip-header-title">Programa de Beneficios VIP</h2>

            <div class="vip-banner">
                <h3>Entre más constancia tienes, más beneficios obtienes</h3>
                <p>Premiamos la lealtad, constancia y productividad</p>
            </div>

            <div class="vip-rules">
                <h4>DIRIGIDO A: CONSULTORES, LÍDERES Y LÍDERES EMPRESARIALES</h4>
                <h3>¿CÓMO ME CONVIERTO EN VIP?</h3>
                <p style="font-size: 0.9rem; color: var(--text-main);">PARA SER VIP SE DEBEN CUMPLIR 2 REGLAS
                    PRINCIPALES:</p>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 0.5rem;">
                    1. Colocar pedido consecutivo cada mes.<br>
                    2. Pagar antes de vencimiento.
                </p>
            </div>

            <div class="vip-levels-grid">
                <!-- Morado -->
                <div class="vip-card vip-card-morado">
                    <div class="vip-badge">
                        <strong>VIP</strong>
                        <span>Morado</span>
                    </div>
                    <div class="vip-info">
                        <h4>3 Pedidos</h4>
                        <p>Consecutivos</p>
                    </div>
                </div>

                <!-- Oro -->
                <div class="vip-card vip-card-oro">
                    <div class="vip-badge" style="border-color: rgba(74, 59, 24, 0.3);">
                        <strong>VIP</strong>
                        <span>Oro</span>
                    </div>
                    <div class="vip-info">
                        <h4>6 Pedidos</h4>
                        <p>Consecutivos</p>
                    </div>
                </div>

                <!-- Diamante -->
                <div class="vip-card vip-card-diamante">
                    <div class="vip-badge" style="border-color: rgba(0,0,0,0.2);">
                        <strong>VIP</strong>
                        <span>Diamante</span>
                    </div>
                    <div class="vip-info">
                        <h4>12 Pedidos</h4>
                        <p>Consecutivos</p>
                    </div>
                </div>
            </div>

            <!-- Detail Panel -->
            <div class="vip-details-panel">
                <div style="flex: 1;">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.2rem;">¿Cómo me convierto en VIP Morado?</h3>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Colocando 3 pedidos consecutivos pagados antes de
                        vencimiento.</p>
                </div>
                <div class="detail-steps">
                    <div class="step-box">MES 1</div>
                    <div class="step-box">MES 2</div>
                    <div class="step-box" style="background: white; color: var(--jafra-purple);">MES 3</div>
                </div>
                <div style="flex: 1; text-align: right; font-size: 0.8rem; font-weight: 600;">
                    <p>A partir del tercer mes disfrutas beneficios VIP.</p>
                </div>
            </div>
            <div class="vip-download-container" style="text-align: center; margin: 3rem 0 2rem;">
                <a href="<?php echo get_template_directory_uri(); ?>/media/Periodicos/InfografíaVIP2026.pdf" download class="btn-vip-download">
                    Descargar Infografía VIP <i data-lucide="download" size="16"></i>
                </a>
            </div>
            <div class="vip-event-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/media/Periodicos/EventoFidelidad2026.jpeg" alt="Evento Fidelidad 2026"
                    class="vip-event-img">
            </div>
        </section>

        <!-- Jafra Points Section -->
        <section id="jafra-points" class="points-section">
            <div class="container">
                <div class="points-content">
                    <div class="points-header">
                        <h2>JAFRA PUNTOS</h2>
                        <p class="points-subtitle">Premios que tú elijas</p>
                    </div>
                    <div class="points-card">
                        <div class="points-info">
                            <h3>Nuevo Catálogo de Puntos 2026</h3>
                            <p>Consulta el folleto digital y descubre todos los regalos disponibles para ti.</p>
                            <div class="points-actions">
                                <a href="<?php echo get_template_directory_uri(); ?>/media/Periodicos/NuevoFolletodePuntos.pdf" target="_blank"
                                    class="btn-points-view">
                                    Ver Catálogo <i data-lucide="eye" size="18"></i>
                                </a>
                                <a href="<?php echo get_template_directory_uri(); ?>/media/Periodicos/NuevoFolletodePuntos.pdf" download
                                    class="btn-points-download">
                                    Descargar PDF <i data-lucide="download" size="18"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fragrances Shortcut -->
        <section id="fragrances" class="container">
            <div class="section-title">
                <h2>Fragancias Icónicas</h2>
            </div>
            <div class="carousel-wrapper">
                <button class="carousel-btn prev" aria-label="Anterior">
                    <i data-lucide="chevron-left"></i>
                </button>
                <div class="carousel-track">
                    <!-- Product 4: Double Nature Cool (User Image) -->
                    <div class="product-card" data-category="fragrance">
                        <div class="product-image">
                            <img src="https://jafra.com.mx/cdn/shop/files/SOLDADO_33.png?v=1767245021"
                                alt="Double Nature Cool">
                        </div>
                        <div class="product-info">
                            <div class="product-category">FRAGANCIAS</div>
                            <h3>Double Nature Cool</h3>
                            <p class="product-benefit">Agua de Tocador 100 ml</p>
                            <div class="product-footer">
                                <div class="price-group">
                                    <span class="original-price">$667 MXN</span>
                                    <span class="sale-price">$445 MXN</span>
                                </div>
                                <a href="#" class="btn-add">Añadir</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5: Double Nature Crazy -->
                    <div class="product-card" data-category="fragrance">
                        <div class="product-image">
                            <img src="https://jafra.com.mx/cdn/shop/files/SOLDADO_32.png?v=1767245090"
                                alt="Double Nature Crazy">
                        </div>
                        <div class="product-info">
                            <div class="product-category">FRAGANCIAS</div>
                            <h3>Double Nature Crazy</h3>
                            <p class="product-benefit">Agua de Tocador 100 ml</p>
                            <div class="product-footer">
                                <div class="price-group">
                                    <span class="original-price">$667 MXN</span>
                                    <span class="sale-price">$445 MXN</span>
                                </div>
                                <a href="#" class="btn-add">Añadir</a>
                            </div>
                        </div>
                    </div>

                    <!-- New Product: Double Nature Malevolent -->
                    <div class="product-card" data-category="fragrance">
                        <div class="product-image">
                            <img src="https://jafra.com.mx/cdn/shop/files/SOLDADO_28_550x.png?v=1767244776"
                                alt="Double Nature Malevolent">
                        </div>
                        <div class="product-info">
                            <div class="product-category">FRAGANCIAS</div>
                            <h3>Double Nature Malevolent</h3>
                            <p class="product-benefit">Agua de Tocador 50 ml</p>
                            <div class="product-footer">
                                <div class="price-group">
                                    <span class="original-price">$390 MXN</span>
                                    <span class="sale-price">$259 MXN</span>
                                </div>
                                <a href="#" class="btn-add">Añadir</a>
                            </div>
                        </div>
                    </div>

                    <!-- New Product: JF9 Red Intense -->
                    <div class="product-card" data-category="fragrance">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1594215750059-44d416f5c18a?auto=format&fit=crop&q=80&w=400"
                                alt="JF9 Red Intense">
                        </div>
                        <div class="product-info">
                            <div class="product-category">FRAGANCIAS HOMBRE</div>
                            <h3>JF9 Red Intense</h3>
                            <p class="product-benefit">Carácter & Intensidad</p>
                            <div class="product-footer">
                                <span class="price">$638 MXN</span>
                                <a href="#" class="btn-add">Añadir</a>
                            </div>
                        </div>
                    </div>

                    <!-- New Product: Sweetie Fantasy -->
                    <div class="product-card" data-category="fragrance">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1588619711674-c3639dfbb916?auto=format&fit=crop&q=80&w=400"
                                alt="Sweetie Fantasy">
                        </div>
                        <div class="product-info">
                            <div class="product-category">FRAGANCIAS MUJER</div>
                            <h3>Sweetie Fantasy</h3>
                            <p class="product-benefit">Dulce & Divertida</p>
                            <div class="product-footer">
                                <span class="price">$477 MXN</span>
                                <a href="#" class="btn-add">Añadir</a>
                            </div>
                        </div>
                    </div>

                    <!-- New Product: J-Sport Femme -->
                    <div class="product-card" data-category="fragrance">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1616949755610-8c973216c527?auto=format&fit=crop&q=80&w=400"
                                alt="J-Sport Femme">
                        </div>
                        <div class="product-info">
                            <div class="product-category">FRAGANCIAS MUJER</div>
                            <h3>J-Sport Femme</h3>
                            <p class="product-benefit">Dinámica & Floral</p>
                            <div class="product-footer">
                                <span class="price">$319 MXN</span>
                                <a href="#" class="btn-add">Añadir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-btn next" aria-label="Siguiente">
                    <i data-lucide="chevron-right"></i>
                </button>
            </div>
        </section>

        <section id="opportunity" class="opportunity">
            <div class="container opportunity-content">
                <h2>Emprende con <span style="color: var(--jafra-lime);">LinajeAlba</span></h2>
                <p>Únete a mi equipo y comienza tu propio negocio JAFRA hoy mismo. Te ofrezco acompañamiento
                    personalizado, las mejores herramientas de venta y el respaldo de una marca líder.</p>
                <a href="#registration" class="btn-join">Empieza Hoy Mismo</a>
            </div>
        </section>

        <!-- Requirements Section -->
        <section id="requirements" class="requirements-section-light">
            <div class="container">
                <div class="req-header">
                    <h4>Requisitos para ser Consultor(a) JAFRA</h4>
                    <h2>¿CÓMO SER CONSULTOR(A) JAFRA?</h2>
                </div>

                <div class="requirements-grid">
                    <!-- Column 1: Requirements -->
                    <div class="req-column">
                        <h3>Requisitos obligatorios para ser Consultor(a) Jafra:</h3>

                        <div class="req-card">
                            <div class="req-icon"><i data-lucide="file-text" size="24"
                                    style="color: var(--jafra-pink);"></i></div>
                            <div class="req-text">
                                <strong>Comprobante de Domicilio</strong> (Vigente no mayor a 3 meses)
                            </div>
                        </div>

                        <div class="req-card">
                            <div class="req-icon"><i data-lucide="id-card" size="24"
                                    style="color: var(--jafra-blue);"></i></div>
                            <div class="req-text">
                                <strong>Identificación oficial vigente</strong> (Del titular por ambos lados)
                            </div>
                        </div>

                        <div class="req-card">
                            <div class="req-icon"><i data-lucide="pen-tool" size="24"
                                    style="color: var(--jafra-teal);"></i></div>
                            <div class="req-text">
                                <strong>Solicitud de crédito y contrato</strong> (debidamente llenados y firmados)
                            </div>
                        </div>

                        <div class="req-note">
                            <strong>Importante:</strong> Para concluir correctamente tu registro, deberás seguir todos
                            los pasos y enviar toda la documentación necesaria para finalizar tu registro como
                            consultor(a) JAFRA.
                        </div>
                    </div>

                    <!-- Column 2: Steps -->
                    <div class="req-column">
                        <h3>Sigue las instrucciones para completar tu registro:</h3>

                        <div class="step-card">
                            <div class="step-title">Paso 1</div>
                            <h4>Envía tus datos y documentos</h4>
                            <p>Completa el formulario de este sitio con tus datos y envía tu documentación al WhatsApp
                                (INE y comprobante de domicilio).</p>
                        </div>

                        <div class="step-card">
                            <div class="step-title">Paso 2</div>
                            <h4>Llena, firma y envía tu solicitud de crédito y contrato</h4>
                            <p>Recibe las instrucciones para llenar, firmar y enviar tu solicitud de crédito y contrato
                                de registro a Jafra.</p>
                        </div>

                        <div class="step-card">
                            <div class="step-title">Paso 3</div>
                            <h4>Recibe asesoría para comenzar a vender</h4>
                            <p>Ofrece una consultoría de calidad a tus clientes y obtén ingresos cada ciclo de ventas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Section -->
        <section id="registration" class="registration-section">
            <div class="container">
                <div class="registration-container">
                    <div class="reg-header">
                        <h2>¡INICIA TU REGISTRO AQUÍ!</h2>
                        <p>Completa todos los campos que se te solicitan en el formulario. La información capturada será
                            utilizada para ayudarte a ingresar tu solicitud de crédito.</p>
                    </div>

                    <div class="reg-warning">
                        Por favor, regístrate con tu nombre completo tal como aparece en tu identificación oficial. De
                        lo contrario, no podremos completar tu registro.
                    </div>

                    <form id="registrationForm">
                        <div class="form-group full-width">
                            <label class="form-label">Nombre(s):</label>
                            <input type="text" class="form-input" id="regName" required>
                        </div>
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Apellido paterno:</label>
                                <input type="text" class="form-input" id="regPaName">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Apellido materno:</label>
                                <input type="text" class="form-input" id="regMaName" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-input" id="regEmail" required>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Fecha de nacimiento:</label>
                            <div class="dob-group">
                                <select class="form-select" id="dobMonth" required>
                                    <option value="">Mes</option>
                                </select>
                                <select class="form-select" id="dobDay" required>
                                    <option value="">Día</option>
                                </select>
                                <select class="form-select" id="dobYear" required>
                                    <option value="">Año</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Teléfono celular:</label>
                                <input type="tel" class="form-input" id="regPhoneFixed">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Teléfono fijo:</label>
                                <input type="tel" class="form-input" id="regPhoneMobile" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Calle y Número:</label>
                            <input type="text" class="form-input" required>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Colonia:</label>
                                <input type="text" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Código Postal:</label>
                                <input type="text" class="form-input" id="regCP" required>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Delegación / Municipio:</label>
                                <input type="text" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Estado:</label>
                                <input type="text" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Entre qué calles se encuentra su domicilio?</label>
                            <input type="text" class="form-input">
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Lugar de nacimiento:</label>
                                <input type="text" class="form-input">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Estado civil:</label>
                                <select class="form-select" id="civilStatus">
                                    <option value="">Seleccionar</option>
                                    <option value="Soltero(a)">Soltero(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Unión libre">Unión libre</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Escolaridad:</label>
                            <select class="form-select">
                                <option>Seleccionar</option>
                            </select>
                        </div>

                        <h4 style="margin: 1.5rem 0 1rem; color: var(--jafra-dark);">2 Referencias personales:</h4>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">1. Nombre completo:</label>
                                <input type="text" class="form-input" id="ref1Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Teléfono celular:</label>
                                <input type="tel" class="form-input" id="ref1Mobile">
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">2. Nombre completo:</label>
                                <input type="text" class="form-input" id="ref2Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Teléfono celular:</label>
                                <input type="tel" class="form-input" id="ref2Mobile">
                            </div>
                        </div>

                        <h4 style="margin: 1.5rem 0 1rem; color: var(--jafra-dark);">¿Por qué quieres ser consultor(a)?
                        </h4>

                        <div class="checkbox-group">
                            <input type="checkbox" id="reason1">
                            <label for="reason1">Quiero vender los productos y generar ganancias.</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="reason2">
                            <label for="reason2">Quiero los productos para uso personal.</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="reason3">
                            <label for="reason3">Tengo un año sin vender y quiero regresar a Jafra.</label>
                        </div>

                        <button type="submit" class="btn-submit">Enviar</button>
                        <a href="#" class="privacy-link">Aviso de privacidad</a>
                    </form>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the front page
 *
 * @package Linaje_Alba
 */

get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <p class="brand-tag">LINAJE ALBA x JAFRA</p>
                <h1>Tu Camino Real a la <span style="color: var(--jafra-purple);">Belleza</span></h1>
                <p>Te saluda Luz del Alba, líder en Linaje Alba. Te acompaño a descubrir la ciencia de JAFRA y a
                    emprender con éxito en el mundo de la belleza.</p>
                <div class="hero-btns">
                    <a href="#skincare" class="btn-regimen">Ver Productos</a>
                    <a href="#opportunity" class="btn-outline">Únete a mi Equipo</a>
                </div>
            </div>
            <div class="hero-image personal-branded">
                <img src="<?php echo get_template_directory_uri(); ?>/media/girl.png" alt="Linaje Alba Lead Consultant" class="float-image">
            </div>
        </div>
    </section>

    <!-- Dynamic Product Section -->
    <section id="skincare" class="container">
        <div class="section-title">
            <h2>Cuidado de la Piel</h2>
        </div>

        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card" data-category="glow">
                <div class="product-image">
                    <span class="product-tag">Más Vendido</span>
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&q=80&w=400"
                        alt="Revitalize Serum">
                </div>
                <div class="product-info">
                    <div class="product-category">JAFRA ROYAL REVITALIZE</div>
                    <h3>Serum Longevity</h3>
                    <p class="product-benefit">Efecto Lifting & Luminosidad</p>
                    <div class="product-footer">
                        <span class="price">$890 MXN</span>
                        <a href="#" class="btn-add">Añadir</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card" data-category="hydration">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&q=80&w=400"
                        alt="Defy Moisturizer">
                </div>
                <div class="product-info">
                    <div class="product-category">JAFRA DEFY</div>
                    <h3>Crema Hidratante</h3>
                    <p class="product-benefit">Restauración de la Barrera Cutánea</p>
                    <div class="product-footer">
                        <span class="price">$1,200 MXN</span>
                        <a href="#" class="btn-add">Añadir</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card" data-category="purifying">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?auto=format&fit=crop&q=80&w=400"
                        alt="Clear Smart Cleaner">
                </div>
                <div class="product-info">
                    <div class="product-category">CLEAR SMART</div>
                    <h3>Limpiador en Gel Exfoliante</h3>
                    <p class="product-benefit">Ácido Salicílico + Jalea Real</p>
                    <div class="product-footer">
                        <span class="price">$450 MXN</span>
                        <a href="#" class="btn-add">Añadir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Opportunity Section -->
    <section id="opportunity" class="opportunity">
        <div class="container opportunity-content">
            <h2>Emprende con <span style="color: var(--jafra-lime);">Linaje Alba</span></h2>
            <p>Únete a mi equipo y comienza tu propio negocio JAFRA hoy mismo. Te ofrezco acompañamiento
                personalizado, las mejores herramientas de venta y el respaldo de una marca líder.</p>
            <a href="#" class="btn-join">Empieza Hoy Mismo</a>
        </div>
    </section>

    <!-- Fragrances Shortcut -->
    <section id="fragrances" class="container">
        <div class="section-title">
            <h2>Fragancias Icónicas</h2>
        </div>
        <div class="product-grid">
            <!-- Product 4 -->
            <div class="product-card" data-category="fragrance">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?auto=format&fit=crop&q=80&w=400"
                        alt="Adorisse Fragrance">
                </div>
                <div class="product-info">
                    <div class="product-category">FRAGANCIAS MUJER</div>
                    <h3>Adorisse</h3>
                    <p class="product-benefit">Floral & Sofisticada</p>
                    <div class="product-footer">
                        <span class="price">$720 MXN</span>
                        <a href="#" class="btn-add">Añadir</a>
                    </div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="product-card" data-category="fragrance">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1523293182086-7651a899d37f?auto=format&fit=crop&q=80&w=400"
                        alt="Navigo Fragrance">
                </div>
                <div class="product-info">
                    <div class="product-category">FRAGANCIAS HOMBRE</div>
                    <h3>Navigo Ocean</h3>
                    <p class="product-benefit">Frescura Marina Revitalizante</p>
                    <div class="product-footer">
                        <span class="price">$650 MXN</span>
                        <a href="#" class="btn-add">Añadir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();

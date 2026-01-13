    <footer class="footer-main">
        <div class="container footer-grid">
            <div class="footer-col">
                <a href="<?php echo home_url(); ?>" class="logo-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/logo.png" alt="LinajeAlba Logo" style="height: 40px; margin-bottom: 0.5rem;">
                    <br>
                    <span>LinajeAlba</span>
                </a>
                <p style="margin-top: 1rem; color: var(--text-muted);">Innovación en belleza y libertad financiera para
                    miles de consultores en todo el mundo.</p>
            </div>
            <div class="footer-col">
                <h4>Empresa</h4>
                <ul>
                    <li><a href="#">Sobre JAFRA</a></li>
                    <li><a href="#">Sustentabilidad</a></li>
                    <li><a href="#">Ética y Calidad</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Oportunidad</h4>
                <ul>
                    <li><a href="#">Ser Consultor(a)</a></li>
                    <li><a href="#">Plan de Compensación</a></li>
                    <li><a href="#">Historias de Éxito</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Ayuda</h4>
                <ul>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Preguntas Frecuentes</a></li>
                    <li><a href="#">Políticas de Envío</a></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>&copy; 2026 JAFRA México. Todos los derechos reservados.</p>
            <div style="display: flex; gap: 1rem;">
                <a href="#">Privacidad</a>
                <a href="#">Términos</a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script>
        // Initialize Lucide icons after they are loaded
        if (window.lucide) {
            lucide.createIcons();
        }
    </script>
</body>
</html>

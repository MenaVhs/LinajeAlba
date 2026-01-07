<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="utility-bar">
        Únete hoy y obtén un 30% de descuento en tu primer pedido como Consultora
    </div>

    <header class="header">
        <nav class="container nav-main">
            <a href="<?php echo home_url(); ?>" class="logo-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Linaje Alba Logo" style="height: 50px;">
                <span>Linaje Alba</span>
            </a>
            <ul class="nav-links">
                <li><a href="#skincare">Cuidado de la Piel</a></li>
                <li><a href="#fragrances">Fragancias</a></li>
                <li><a href="#makeup">Maquillaje</a></li>
                <li><a href="#personal-care">Cuidado Personal</a></li>
            </ul>
            <div class="nav-actions">
                <a href="#registration" class="btn-regimen">Únete Ahora</a>
                <i data-lucide="search"></i>
                <i data-lucide="user"></i>
            </div>
        </nav>
    </header>

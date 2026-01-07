<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="utility-bar">
        Únete hoy y obtén un 30% de descuento en tu primer pedido como Consultora
    </div>

    <header class="header">
        <nav class="container nav-main">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-img">
                <img src="<?php echo get_template_directory_uri(); ?>/media/logo.png" alt="Linaje Alba Logo" style="height: 50px;">
                <span><?php bloginfo( 'name' ); ?></span>
            </a>
            
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'nav-links',
                )
            );
            ?>

            <div class="nav-actions">
                <a href="#opportunity" class="btn-regimen">Únete Ahora</a>
                <i data-lucide="search"></i>
                <i data-lucide="user"></i>
            </div>
        </nav>
    </header>

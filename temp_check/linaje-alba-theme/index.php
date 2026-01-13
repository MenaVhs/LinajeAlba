<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 */

get_header();
?>

<main class="container" style="padding: 4rem 2rem; min-height: 50vh;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( ! is_front_page() ) : ?>
                    <header class="entry-header" style="margin-bottom: 2rem;">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'linaje-alba' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>
            </article>
            <?php
        endwhile;

    else :
        ?>
        <div class="no-results">
            <h2>No se encontró contenido</h2>
            <p>Parece que no hay nada aquí.</p>
        </div>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();

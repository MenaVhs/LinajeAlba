<?php
/**
 * The main template file
 *
 * @package Linaje_Alba
 */

get_header();
?>

<main class="container" style="padding: 4rem 2rem;">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();

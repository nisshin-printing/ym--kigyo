<?php
/**
 * Read up on the WP Template Hierarchy for
 * when this file is used
 *
 */
?>
<?php get_header(); ?>

<main id="js-main" class="layout-lp">

<?php
	while( have_posts() ) : the_post();
		if ( '6' == $post->ID ) {
			get_template_part( 'templates/lp/komon' );
		}
	endwhile;
?>

</main>

<?php get_footer(); ?>

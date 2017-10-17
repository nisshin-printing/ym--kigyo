<?php
/**
 * Read up on the WP Template Hierarchy for
 * when this file is used
 *
 */
?>
<?php get_header(); ?>

<main id="js-main">

<?php
	if ( is_front_page() || is_home() ) {
		get_template_part( 'elements/header-front' );
		get_template_part( 'templates/front' );
	} elseif ( is_page() ) {
		while( have_posts() ) : the_post();
			get_template_part( 'elements/header-copy' );
			get_template_part( 'templates/page' );
		endwhile;
	}
?>

</main>

<?php get_footer(); ?>

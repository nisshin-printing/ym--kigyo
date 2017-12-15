<?php
if ( is_archive() || is_single() || is_home() ) {
	$title = 'お知らせ';
} else {
	$title = get_the_title();
}

	get_header();
?>
<main>
	<header class="pageheader">
		<div class="row">
			<div class="column">
				<h1 class="pageheader--title"><?php echo $title; ?></h1>
			</div>
		</div>
	</header>
	<?php NID_Crumbs::crumbs(); ?>
	<div class="row contents--wrap">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column contents">
			<?php
				if ( have_posts() ) {
					if ( is_page( 'service' ) ) {
						get_template_part( 'templates/page--service' );


					} else if ( is_page( 'cases' ) || is_page( 'voice' ) ) {
						$is_type = ( is_page( 'cases' ) ) ? 'cases' : 'voice';
						$show_cat = ( is_page( 'cases' ) ) ? '93' : '126';
						include locate_template( './templates/page--cases-voice.php' );

					} else if ( is_page( 'members' ) ) {
						get_template_part( './templates/page--members' );

					} else if ( is_page( 'access' ) ) {
						$page_id = '281';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'firm' ) ) {
						$page_id = '151';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'seminar' ) ) {
						$page_id = '3599';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'kairo' ) ) {
						get_template_part( './templates/page--kairo' );

					} else if ( is_page( 'succession' ) ) {
						$page_id = '4618';
						include locate_template( './templates/page.php' );

					} else if ( is_singular( 'dtdsh-lp' ) ) {
						if ( is_single( 'komon' ) ) {
							get_template_part( './templates/lp/komon' );
						}

					} else if ( is_page() ) {
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;


					} else {
						while ( have_posts() ) : the_post();
							get_template_part( './templates/content' );
						endwhile;
					}

				} else {
					echo '<h2 class="text-center">記事がありません。</h2>';
				}
			?>
		</div>
		<div class="column small-12"><?php NID_Pagination::pagination(); ?></div>
	</div>
</main>
<?php
	get_footer();

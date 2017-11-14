<?php

if ( is_post_type_archive( 'cases' ) || is_singular( 'cases' ) ) {
	$title = '解決事例';
} else if ( is_tax( 'cases-cat' ) ) {
	$title = single_cat_title( '解決事例カテゴリ：', false );
} else if ( is_post_type_archive( 'voice' ) || is_singular( 'voice' ) || is_tax( 'voice-cat' ) ) {
	$title = 'お客様の声';
} else if ( is_tax( 'voice-cat' ) ) {
	$title = single_cat_title( 'お客様の声カテゴリ：', false );
} else if ( is_post_type_archive( 'members' ) || is_singular( 'members' ) ) {
	$title = '弁護士等紹介';
} else if ( is_tax( 'members-cat' ) ) {
	$title = single_cat_title( 'メンバーカテゴリ：', false );
} else if ( is_archive() || is_single() || is_home() ) {
	$title = 'トピックス';
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
	<div class="row">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column contents">
			<?php
				if ( have_posts() ) {
					if ( is_archive() || is_home() ) {
						while ( have_posts() ) : the_post();
							get_template_part( './templates/content' );
						endwhile;

					} else if ( is_page( 'service' ) ) {
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

					} else if ( is_page( 'consulting' ) ) {
						$page_id = '4618';
						include locate_template( './templates/page.php' );

					} else if ( is_page() || is_single() ) {
						while ( have_posts() ) : the_post();
							the_content();
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

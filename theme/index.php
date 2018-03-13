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

					} else if ( is_page( 'keizai-report' ) ) {
						$page_id = '5501';
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
						if ( is_category( 'backnumber' ) ) {
							echo '<p class="text-center"><img src="', get_template_directory_uri(), '/assets/img/merumaga.png" alt="年3回発行していた「KAIRO for Business」がメルマガになりました。毎月第2水曜配信。企業法務に関する情報が紙面版より早く届きます。"></p><p><a href="#form" class="button">購読はコチラから</a></p>';
						}
						while ( have_posts() ) : the_post();
							get_template_part( './templates/content' );
						endwhile;

						if ( is_category( 'backnumber' ) || in_category( 'backnumber' ) ) {
							echo '<h2 id="form">メールマガジン購読</h2>';

							if ( in_category( 'backnumber' ) ) {
								echo '<p class="text-center"><img src="', get_template_directory_uri(), '/assets/img/merumaga.png" alt="年3回発行していた「KAIRO for Business」がメルマガになりました。毎月第2水曜配信。企業法務に関する情報が紙面版より早く届きます。"></p>';
							}

							echo do_shortcode( '[contact-form-7 id="1165" title="メールマガジン購読"]' );
						}
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

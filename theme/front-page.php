<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
<main>
	<?php get_template_part( './elements/fp-topheader' ); ?>



	<?php get_template_part( './elements/fp-welcome-mess' ); ?>



	<?php get_template_part( 'elements/cta--kigyo-regal' ); ?>



	<div class="row">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column small-12 large-8 contents --mt0 --pt0">
			<section class="contents--section contents--section__service">
				<h2 id="front--service">取扱業務ピックアップ</h2>
				<div class="row small-up-1 medium-up-2">
					
					<?php
						include( get_template_directory() . '/config/service--draft.php' );
						for ( $i = 0; $i < 4; $i++ ) :
					?>
					<article class="article--category column">
						<header class="article--category_header">
							<h3 class="article--category_title"><a href="<?php echo get_page_link( $service[$i]['id'] ); ?>"><span class="article--category_icon"><?php NID_SVG::icon( $service[$i]['icon'], array(), get_the_title( $service[$i]['id'] ) . 'のアイコン' ) ?></span><?php echo get_the_title( $service[$i]['id'] ); ?></a></h3>
							<p class="article--category_desc"><?php echo $service[$i]['desc']; ?></p>
						</header>
						<div class="article--category_content">
							<ol>
							<?php
								foreach ( $service[$i]['children'] as $child ) {
									if ( ! is_array( $child ) ) {
										echo '<li><a href="', get_page_link( $child ), '">', get_the_title( $child ), '</a></li>';
									} else {
										echo '<ul>';
										foreach ( $child as $grandson ) {
											if ( ! is_array( $grandson ) ) {
												echo '<li><a href="', get_page_link( $grandson ), '">', get_the_title( $grandson ), '</a></li>';
											} else {
												echo '<ul>';
												foreach ( $grandson as $great ) {
													if ( ! is_array( $great ) ) {
														echo '<li><a href="', get_page_link( $great ), '">', get_the_title( $great ), '</a></li>';
													} else {
														echo '<ul>';
														foreach ( $grandson as $great ) {
																echo '<li><a href="', get_page_link( $great ), '">', get_the_title( $great ), '</a></li>';
														}
														echo '</ul>';
													}
												}
												echo '</ul>';
											}
										}
										echo '</ul>';
									}
								}
							?>
							</ol>
							<p class="text-center contents--section_button"><a href="<?php echo get_page_link( $service[$i]['id'] ); ?>" class="button secondary"><?php NID_SVG::icon( 'list', array() ); ?>詳しく見る</a></p>
						</div>
					</article>
					<?php
						endfor;
					?>

				</div>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '5481' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>取扱業務の一覧を見る</a></p>
			</section>

<!--

			<div class="contents--section">
				<h2><a href="">Q&A<span class="badge">></span></a></h2>
				<div class="row">
					<dl class="qa column small-12 medium-6">
						<dt class="qa--icon"><a href="">これはテストですか？</a></dt>
						<dd class="qa--icon">これはテストです。<p class="qa--more"><a href=""><span>></span>詳しく見る</a></p></dd>
					</dl>
					<dl class="qa column small-12 medium-6">
						<dt class="qa--icon"><a href="">これは長文質問のテストですか？これは長文質問のテストですか？</a></dt>
						<dd class="qa--icon">これは長文質問のテストです。<p class="qa--more"><a href=""><span>></span>詳しく見る</a></p></dd>
					</dl>
					<dl class="qa column small-12 medium-6">
						<dt class="qa--icon"><a href="">これは長文質問のテストですか？これは長文質問のテストですか？これは長文質問のテストですか？これは長文質問のテストですか？</a></dt>
						<dd class="qa--icon">これは長文質問のテストです。これは長文質問のテストです。これは長文質問のテストです。<p class="qa--more"><a href=""><span>></span>詳しく見る</a></p></dd>
					</dl>
					<dl class="qa column small-12 medium-6">
						<dt class="qa--icon"><a href="">これはテストですか？</a></dt>
						<dd class="qa--icon">これはテストです。<p class="qa--more"><a href=""><span>></span>詳しく見る</a></p></dd>
					</dl>
				</div>
			</div>

			<section class="contents--section">
				<h2>○○サイトに初めて訪れた方へオススメしたい記事</h2>
				<div class="row small-up-1 medium-up-2">
					<article class="article--loop column">
						<figure class="article--loop_thumbnail text-center">
							<a href="" rel="nofollow"><img src="//placehold.jp/400x250.png" alt=""></a>
						</figure>
						<header class="article--loop_header">
							<h3 class="article--loop_title"><a href="">これはテストです。</a></h3>
						</header>
					</article>
					<article class="article--loop column">
						<figure class="article--loop_thumbnail text-center">
							<a href="" rel="nofollow"><img src="//placehold.jp/400x250.png" alt=""></a>
						</figure>
						<header class="article--loop_header">
							<h3 class="article--loop_title"><a href="">これは長文タイトルのテストです。これは長文タイトルのテストです。</a></h3>
						</header>
					</article>
					<article class="article--loop column">
						<figure class="article--loop_thumbnail text-center">
							<a href="" rel="nofollow"><img src="//placehold.jp/400x250.png" alt=""></a>
						</figure>
						<header class="article--loop_header">
							<h3 class="article--loop_title"><a href="">これは長文タイトルのテストです。これは長文タイトルのテストです。これは長文タイトルのテストです。これは長文タイトルのテストです。</a></h3>
						</header>
					</article>
					<article class="article--loop column">
						<figure class="article--loop_thumbnail text-center">
							<a href="" rel="nofollow"><img src="//placehold.jp/400x250.png" alt=""></a>
						</figure>
						<header class="article--loop_header">
							<h3 class="article--loop_title"><a href="">これはテストです。</a></h3>
						</header>
					</article>
				</div>
			</section>

-->

			<?php
				$args = array(
					'order' => 'DESC',
					'orderby' => 'modified',
					'posts_per_page' => 4,
					'post_status'    => 'publish'
				);
				$news = new WP_Query( $args );
				if ( $news->have_posts() ) :
			?>
			<div class="contents--section">
				<h2><a href="<?php echo get_page_link( '5749' ); ?>">最新情報<span class="badge">　></span></a></h2>
				<?php
					while ( $news->have_posts() ) : $news->the_post();
				?>
				<dl>
					<dt><span class="label secondary"><?php the_modified_date( 'Y-m-d' ); ?></span>　<?php the_category( '　' ); ?></dt>
					<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
				</dl>
				<?php
					endwhile;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="<?php echo get_page_link( '5749' ); ?>" class="button large"><?php NID_SVG::icon( 'list', array() ); ?>お知らせ一覧</a></p>
			</div>
				<?php endif; ?>


			<div class="contents--section">
				<h2><a href="https://www.law-yamashita.com/topics" target="_blank">事務所の最新情報<span class="badge">　></span></a></h2>
				<?php
					$url = 'https://www.law-yamashita.com/feed';
					$url = sprintf( esc_html( "%s" ), $url );
					add_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					include_once( ABSPATH . WPINC . '/feed.php' );
					$feed = fetch_feed( $url );
					remove_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
					$maxitems = 3;
					if ( ! is_wp_error( $feed ) ) {
						$maxitems = $feed->get_item_quantity( $maxitems );
						$rss_items = $feed->get_items( 0, $maxitems );
					}
					$site_title = $feed->get_title();
					$site_url = $feed->get_permalink();

					$output = '';
					date_default_timezone_set( 'Asia/Tokyo' );
					foreach ( $rss_items as $item ) {
						$f_link = esc_url( $item->get_permalink() );
						$f_date = $item->get_date( 'Y-m-d' );
						$f_title = esc_html( $item->get_title() );
						$f_category = '';
						foreach ( $item->get_categories() as $category ) {
							$f_category .= $category->get_label();
						}
						$output .= <<< EOM
<dl>
	<dt><span class="label secondary">{$f_date}</span>　<span class="label">{$f_category}</span></dt>
	<dd><a href="{$f_link}" target="_blank">{$f_title}</a></dd>
</dl>
EOM;
					}
					echo $output;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="https://www.law-yamashita.com/topics" class="button large" target="_blank"><?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧<br><br><span style="font-size:0.8em">※メインサイトへ移行します。</span></a></p>
			</div>
			
		</div>
	</div>
</main>
<?php get_footer(); ?>

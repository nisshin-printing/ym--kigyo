<?php
	/**
	 * Template Name: フロントページ
	 */

	get_header();
?>
<main>
	<div class="pageheader -front">
		<h1>山下江法律事務所<br>企業法務サイト</h1>
		<div class="row">
			<div class="service--item column small-12 large-6">
				<p class="service--item_photo"><?php NID_SVG::icon( 'sheet', array( 'class' => 'sheet' ), 'sheet' ); ?></p>
				<h2 class="service--item_title">契約書</h2>
				<p class="service--item_desc"><u>契約書のひな型は当事者双方にとって中立的な立場</u>から作成されていますので、当事者の力関係を正確に反映できていない場合があります。<br>弁護士に契約書の作成・確認を依頼した場合には特殊事情を反映させたり適切な修正をしたりと、<u>より実態に沿った契約書を作成</u>できます。
				<p class="service--item_desc"><strong class="underline">弁護士による契約書作成・確認で将来の法的トラブルを回避しましょう</strong>。</p>
				<p class="service--item_button"><a href="<?php echo home_url(), '/service/keiyaku/'; ?>" class="button expanded round">詳しくはこちら</a></p>
			</div>
			<div class="service--item column small-12 large-6">
				<p class="service--item_photo"><?php NID_SVG::icon( 'people', array( 'class' => 'people' ), 'people' ); ?></p>
				<h2 class="service--item_title">顧問弁護士</h2>
				<p class="service--item_desc"><u>何かトラブルが発生した後で弁護士に相談すればよい</u>とお考えではないでしょうか。<br>企業経営においては社外・社内あらゆるところにリスクや法律問題が潜んでおり、いったん予期せぬ法的トラブルが発生してしまうと、その解決のために多大な時間、費用や労力がかかってしまいます。</p>
				<p class="service--item_desc"><strong class="underline">法的トラブルを未然に防ぐための備え（予防法務）が非常に大切です。</strong></p>
				<p class="service--item_button"><a href="<?php echo home_url(), '/service/komon'; ?>" class="button expanded round">詳しくはこちら</a></p>
			</div>
		</div>
	</div>



	<?php get_template_part( 'elements/cta--kigyo-regal' ); ?>



	<div class="row">
		<div class="column large-3 sidebar--wrap"><?php get_sidebar(); ?></div>
		<div class="sidenav--overlay js--sidenav--button"></div>
		<div class="column small-12 large-8 contents --mt0 --pt0">
			<div class="contents--section">
				<h2 class="contents--title"><a href="">セミナー情報<span class="badge">></span></a></h2>
				<div class="contents--box">
					<span class="label contents--box_alert">無料参加特典付！</span>
					<h3 class="label secondary">第○回企業法務セミナー</h3>
					<h4 class="contents--box_title">「セミナータイトル」</h4>
					<div class="contents--box_desc">
						<dl>
							<dt class="label">日時</dt>
							<dd>平成29年6月6日</dd>
						</dl>
						<dl>
							<dt class="label">講師</dt>
							<dd><a href="">山下江（弁護士法人山下江法律事務所　代表/弁護士）</a></dd>
						</dl>
					</div>
					<p class="contents--box_button"><a href="" class="button round">詳しくはこちら</a></p>
				</div>
			</div>


			
			<section class="contents--section contents--section__service">
				<h2 class="contents--title">取扱業務ピックアップ</h2>
				<div class="row small-up-1 medium-up-2">
					
					<?php
						include( get_template_directory() . '/config/service.php' );
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
										echo '<li><a href="', get_page_link( $child ), '">', get_the_title( $child ), '</a></li>';
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
				<h2 class="contents--title"><a href="">Q&A<span class="badge">></span></a></h2>
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
				<h2 class="contents--title">○○サイトに初めて訪れた方へオススメしたい記事</h2>
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
				<h2 class="contents--title"><a href="<?php echo get_page_link( '5749' ); ?>">最新情報<span class="badge">></span></a></h2>
				<?php
					while ( $news->have_posts() ) : $news->the_post();
				?>
				<article <?php post_class( 'post post--topic' ); ?> itemscope itemtype="http://schema.org/Article" itemref="author-prof">
					<meta itemprop="description" content="<?php the_excerpt(); ?>">
					<ul class="post--meta menu">
						<li class="published" itemprop="datePublished dateCreated" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"></li>
						<li class="updated" itemprop="dateModified" datetime="<?php echo get_the_modified_time( 'Y-m-d' ); ?>"></li>
						<li class="author hide" itemprop="author copyrightHolder editor" itemscope itemtype="http://schema.org/Person"><span class="author" itemprop="name"><?php bloginfo( 'name' ); ?></span></li>
					</ul>
					<div class="row align-middle">
						<?php
							if ( has_post_thumbnail() ) :
						?>
						<div class="column small-4"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
						<div class="column small-8">
						<?php
							else :
						?>
							<div class="column small-12">
						<?php
							endif;
						?>
							<h3 itemprop="about headline" class="entry-title post--title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
									<span class="title--small title--block"><?php echo $job = ( get_post_meta ( $post->ID, 'subtitle', true ) ) ? get_post_meta ( $post->ID, 'subtitle', true )  : '' ?></span>
								</a>
							</h3>
						</div>
					</div>
					<?php
						$categories = get_the_category( $post->ID );
					?>
					<div class="post--label">
					<?php
						foreach ( $categories as $category ) :
					?>
						<a href="<?php echo get_category_link( $category->cat_ID ); ?>" class="label secondary"><?php echo $category->name; ?></a>
					<?php
							endforeach;
					?>
					</div>
				</article>
				<?php
					endwhile;
				?>
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="https://www.law-yamashita.com/column" class="button large" target="_blank"><?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧</a></p>
			</div>
				<?php endif; ?>


			<div class="contents--section">
				<h2 class="contents--title"><a href="https://www.law-yamashita.com/column" target="_blank">事務所の最新情報<span class="badge">></span></a></h2>
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
				<p class="text-center contents--section_button" style="margin-top: 2rem"><a href="https://www.law-yamashita.com/column" class="button large" target="_blank"><?php NID_SVG::icon( 'list', array() ); ?>メインサイトのお知らせ一覧</a></p>
			</div>
			
		</div>
	</div>
</main>
<?php get_footer(); ?>

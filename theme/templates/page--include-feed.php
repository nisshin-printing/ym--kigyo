<?php
	$url = sprintf( esc_html( "%s" ), $url );
	add_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
	include_once( ABSPATH . WPINC . '/feed.php' );
	$feed = fetch_feed( $url );
	remove_filter( 'wp_feed_cache_transient_lifetime', function() { return 1800; } );
	$maxitems = 20;
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
		$f_content = $item->get_content();
?>
<article class="post post--show" itemscope itemtype="http://schema.org/Article" itemref="author-prof">
	<ul class="post--meta menu">
		<li class="published" itemprop="datePublished dateCreated" datetime="<?php echo $f_date; ?>"></li>
		<li class="updated" itemprop="dateModified" datetime="<?php echo $f_date; ?>"></li>
	</ul>
	<h2 itemprop="about headline" class="entry-title post--title"><?php echo $f_title; ?></h2>
	<div class="content-post content-cases"><?php echo $f_content; ?></div>
</article>

<?php
	}

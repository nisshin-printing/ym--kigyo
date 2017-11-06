<?php
	$url = 'https://www.law-yamashita.com/feed';
	$category = 'corporation';
	if ( is_page( 'cases' ) ) {
		$name = '解決事例';
		$slug = 'cases';
	} else if ( is_page( 'voice' ) ) {
		$name = 'お客様の声';
		$slug = 'voice';
	} else {
		$name = 'お知らせ';
		$slug = 'column';
	}
	$url = 'https://www.law-yamashita.com/feed?post_type=cases&cases-cat=corporation';
	echo $url;
	$button = `<p class="text-center">メインサイトに多数の{$name}を掲載しています。<br><a href="https://www.law-yamashita.com/{$slug}-category/{$category}" target="_blank" class="button large">{$name}をもっと見る</a></p>`;
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
		$output .= <<< EOM
<dl>
<dt><a href="{$f_link}" target="_blank">{$f_title}</a></dt>
<dd>{$f_content}</dd>
</dl>
EOM;
	}
	echo $output, $button;
?>

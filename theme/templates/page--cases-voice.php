<?php
	$url = "https://www.law-yamashita.com/wp-json/wp/v2/{$is_type}?_embed&per_page=20&order=desc&orderby=date&{$is_type}-category={$show_cat}";
	$json = file_get_contents( $url );
	$arr_json = json_decode( $json, true );

	foreach ( $arr_json as $json ) :
		$date = $json['date'];
		$title = $json['title']['rendered'];
		$content = $json['content']['rendered'];
?>
<article class="post post--show" itemscope itemtype="http://schema.org/Article" itemref="author-prof">
	<ul class="post--meta menu">
		<li class="published" itemprop="datePublished dateCreated" datetime="<?php echo $date; ?>"></li>
		<li class="updated" itemprop="dateModified" datetime="<?php echo $date; ?>"></li>
	</ul>
	<h2 itemprop="about headline" class="entry-title post--title"><?php echo $title; ?></h2>
	<div class="content-post content-cases"><?php echo $content; ?></div>
</article>
<?php
	endforeach;
	$headerArray = get_headers( $url, 1 );
	if ( 20 <= $headerArray['X-WP-Total'] ) {
		echo '<p class="text-center"><a href="https://www.law-yamashita.com/', $is_type, '" class="button large" target="_blank">もっと見る<br><span style="font-size:0.8em">※メインサイトへ移行します。</span></a></p>';
	}
?>

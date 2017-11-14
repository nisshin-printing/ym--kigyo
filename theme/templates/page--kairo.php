<?php
	$url = 'https://www.law-yamashita.com/wp-json/wp/v2/posts?_embed&per_page=100&categories=52';
	$json = file_get_contents( $url );
	$arr_json = json_decode( $json, true );

	echo '<ul>';
	foreach ( $arr_json as $json ) :
		$title = str_replace( '発刊', '', $json['title']['rendered'] );
		$content = $json['content']['rendered'];
?>
<article class="post post--show" itemscope itemtype="http://schema.org/Article" itemref="author-prof">
	<h2 itemprop="about headline" class="entry-title post--title"><?php echo $title; ?></h2>
	<div class="content-post content-cases"><?php echo $content; ?></div>
</article>
<?php
	endforeach;

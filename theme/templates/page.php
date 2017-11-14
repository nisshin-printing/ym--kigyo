<?php
	$url = "https://www.law-yamashita.com/wp-json/wp/v2/pages/{$page_id}";
	$json = file_get_contents( $url );
	$json = json_decode( $json, true );

	$content = $json['content']['rendered'];
	echo $content;

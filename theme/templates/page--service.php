<div class="row small-up-1 medium-up-2">
	
	<?php
		include( get_template_directory() . '/config/service.php' );
		foreach ( $service as $item ) :
	?>
	<article class="article--category column">
		<header class="article--category_header">
			<h3 class="article--category_title"><a href="<?php echo get_page_link( $item['id'] ); ?>"><span class="article--category_icon"><?php NID_SVG::icon( $item['icon'], array(), get_the_title( $item['id'] ) . 'のアイコン' ) ?></span><?php echo get_the_title( $item['id'] ); ?></a></h3>
			<p class="article--category_desc"><?php echo $item['desc']; ?></p>
		</header>
		<div class="article--category_content">
			<ol>
				<?php
					foreach ( $item['children'] as $child ) {
						echo '<li><a href="', get_page_link( $child ), '">', get_the_title( $child ), '</a></li>';
					}
				?>
			</ol>
			<p class="text-center contents--section_button"><a href="<?php echo get_page_link( $item['id'] ); ?>" class="button secondary"><?php NID_SVG::icon( 'list', array() ); ?>詳しく見る</a></p>
		</div>
	</article>
	<?php
		endforeach;
	?>

</div>

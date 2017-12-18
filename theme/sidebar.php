<?php
	$news_pages = array( '5641', '5644', '5648' );
?>
<aside id="js--sidebar" class="sidebar">
<button class="sidenav--trigger__wrap">
	<a href="#" class="js--sidenav--button sidenav--trigger">
		<span></span>
		<span></span>
		<span></span>
	</a>
</button>
<?php if ( is_archive() || is_home() || is_front_page() || is_single() || is_page( $news_pages ) ) : ?>
<div class="sidebar--item">
	<h5 class="sidebar--title">お知らせ</h5>
	<ul class="menu vertical" role="menu">
		<ul class="menu">
	<?php
		$categoryies = get_categories( array(
			'order' => 'DESC',
			'orderby' => 'count'
		) );
		foreach ( $categoryies as $category ) {
			echo '<li class="menu--item"><a href="', get_category_link( $category->term_id ), '" class="menu--link">', $category->name, '</a></li>';
		}
		echo '</ul>';
		
		foreach ( $news_pages as $page ) {
			echo '<li class="menu--item"><a href="', get_page_link( $page ), '" class="menu--link">', get_the_title( $page ), '</a></li>';
		}
	?>
	</ul>
</div>
<?php endif; ?>
<div class="sidebar--item">
	<h5 class="sidebar--title">相談予約</h5>
	<p class="free-call"><a href="tel:0120783409"><?php NID_SVG::icon( 'phone', array( 'class' => 'free-call--icon' ), '電話する' ); ?>0120-7834-09</a></p>
	<p class="free-call--hours">平日9時～18時<br>土曜10時～17時</p>
	<p class="free-call--button"><a href="https://www.law-yamashita.com/contact" class="button large">お問い合わせ</a></p>
</div>
<?php /*
<div class="sidebar--item sidebar--banner">
	<nav>
		<ul class="menu vertical">
			<li><img src="//www.law-yamashita.com/wp-content/themes/law-yamashita/assets/img/front-page/sites_jiko.png" alt="テスト用の画像"></li>
			<li><img src="//www.law-yamashita.com/wp-content/themes/law-yamashita/assets/img/front-page/sites_jiko.png" alt="テスト用の画像"></li>
			<li><img src="//www.law-yamashita.com/wp-content/themes/law-yamashita/assets/img/front-page/sites_jiko.png" alt="テスト用の画像"></li>
			<li><img src="//www.law-yamashita.com/wp-content/themes/law-yamashita/assets/img/front-page/sites_jiko.png" alt="テスト用の画像"></li>
		</ul>
	</nav>
</div>
*/ ?>
<div class="sidebar--item">
<h5 class="sidebar--title">メインメニュー</h5>
	<?php
		NID_Menu::nav_menu( 'primary', array(
			'container_class' => 'menu--side__wrap',
			'menu_direction' => 'vertical',
			'show_level_class' => true
		) );
	?>
</div>
</aside>

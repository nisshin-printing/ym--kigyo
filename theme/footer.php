<?php
/**
 * Footer file common to all
 * templates
 *
 */
?>


<?php // common footer content goes here ?>
<footer class="footer--main">
	<div class="social-link">
		<a href="" class="social-link--facebook"><?php NID_SVG::icon( 'facebook', array(), 'Facebook' ); ?></a>
		<a href="" class="social-link--google-plus"><?php NID_SVG::icon( 'google-plus', array(), 'Google+' ); ?></a>
		<a href="" class="social-link--youtube"><?php NID_SVG::icon( 'youtube', array(), 'Youtube' ); ?></a>
	</div>
	<div class="row">

		<div class="column show-for-large">
			<h3 class="nav--footer_title">カテゴリ</h3>
			<ul class="nav--footer menu vertical">
				<li><a href="">カテゴリ01</a></li>
				<li><a href="">カテゴリ02</a></li>
				<li><a href="">カテゴリ03</a></li>
				<li><a href="">カテゴリ04</a></li>
				<li><a href="">カテゴリ05</a></li>
			</ul>
		</div>

		<div class="column show-for-large">
			<h3 class="nav--footer_title">特設ページ</h3>
			<ul class="nav--footer menu vertical">
				<li><a href="">全記事一覧</a></li>
				<li><a href="">お客様の声</a></li>
				<li><a href="">解決事例</a></li>
				<li><a href="">無料ダウンロード</a></li>
			</ul>
		</div>

		<div class="column show-for-large">
			<h3 class="nav--footer_title">事務所概要</h3>
			<ul class="nav--footer menu vertical">
				<li><a href="">事務所概要</a></li>
				<li><a href="">交通事故の料金表</a></li>
				<li><a href="">弁護士等紹介</a></li>
				<li><a href="">ご相談の流れ</a></li>
			</ul>
		</div>
	</div>

	<p class="footer--main_copyright">©<?php echo date( 'Y' ); ?> 山下江法律事務所[広島弁護士会所属]</p>
</footer>

<?php wp_footer(); ?>
<?php // </body> opens in header.php ?>
</body>
</html>

<?php
/**
 * Header file common to all
 * templates
 *
 */
?>
<!doctype html>
<html class="site no-js" <?php language_attributes(); ?>>
<head>
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php // Google Tag Manager ?>

	<?php // replace the no-js class with js on the html element ?>
	<script>document.documentElement.className=document.documentElement.className.replace(/\bno-js\b/,'js')</script>

	<?php // load the core js polyfills ?>
	<script async defer src="<?php echo get_template_directory_uri(), '/assets/js/core.js'; ?>"></script>

	<?php // Theming ?>
	<meta name="theme-color" content="#FFFFFF">

	<?php /*
	<?php // load the reCAPTCHA API ?>
	<script async defer src="//www.google.com/recaptcha/api.js"></script>
	*/ ?>
	<?php wp_head(); ?>
</head>
<body id="js-body" <?php body_class( 'o-main u-background is-loading' ); ?>>
<?php // <body> closes in footer.php ?>



<?php // common header content goes here ?>
	<header>
		<div class="top-bar">
			<div class="column small-10 large-6">
				<p class="top-bar--title"><img src="//www.law-yamashita.com/wp-content/uploads/2016/04/title-logo-1.png" alt="広島最大級の弁護士事務所、山下江法律事務所のロゴ"></p>
				<p class="top-bar--desc">広島最大級の弁護士事務所へご相談ください。</p>
			</div>
			<div class="top-bar--button column large-6 show-for-large">
				<p class="free-call"><a href="tel:0120783409"><span>TEL</span>0120-7834-09</a></p>
				<p class="free-call_button button hollow secondary ">相談予約</p>
			</div>
		</div>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'container_id' => 'js-nav-main',
				'container_class' => 'nav--main_wrap',
				'menu_class' => 'nav--main menu',
				'items_wrap' => '<ul class="%2$s" role="menu">%3$s</ul>',
				'walker' => new NID_Walker_Nav_Menu
			) );
		?>
	</header>

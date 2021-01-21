<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thecodebytes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Monofett&family=Open+Sans:wght@300;400;600;700;800&family=Press+Start+2P&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!-- Javascript scripts link is in the footer -->
	<script data-ad-client="ca-pub-3304193651719804" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php
    wp_head(); ?>
		<!--Auto ADS -->
<script data-ad-client="ca-pub-3304193651719804" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script></head>

<body <?php body_class(); ?>>
<!--<p style="font-size:20px">here<?php echo get_template_directory_uri() ?> </p> -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row header__top-bar align-items-center">
				<?php
                the_custom_logo();
                ?>
				<div class="site-branding">
					<?php
                    if (is_front_page() && is_home()) :
                        ?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
                    else :
                        ?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
                    endif;
                    $the_code_bytes_description = get_bloginfo('description', 'display');
                    if ($the_code_bytes_description || is_customize_preview()) :
                        ?>
						<p class="site-description"><?php echo $the_code_bytes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			<?php if (is_active_sidebar('header-widget')) : ?>
		    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
		    <?php dynamic_sidebar('header-widget'); ?>
		    </div>
			<?php endif; ?>
			<div class="header__icons">
				<a href="https://medium.com/@developer_13376" class="header__icon" id="header__icon1" target="_blank"></a>
				<a href="https://www.grantdarling.com/" class="header__icon" id="header__icon2" target="_blank"></a>
				<a href="https://www.grantdarling.com/contact" class="header__icon" id="header__icon3" target="_blank"></a>
			</div>
			</div>
			<div class="header__navbar-banner-container">
			<div class="row align-items-center header__nav-bar" id="header__nav-bar-id">
				<button aria-expanded="false" class="" id="header__mobile-menu" onclick="toggle('primary-menu', 'primary-menu')"><?php esc_html_e('menu', 'the-code-bytes'); ?></button>
				<?php
                wp_nav_menu(
                            array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'row align-items-center',
                    )
                        );
                ?>
			</div>
			<div class="row header__banner-bar row align-items-center">
			<?php
            wp_nav_menu(array(
                'menu' => 'banner-menu',
                'menu_class' => "header__banner-menu row", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
            ));
            ?>
			<button id="banner__close">X</button>
			</div>
			</div>
		</div>
		<script>
		// POSITION STICKY
		var header = document.querySelector('.header__banner-bar');
		var origOffsetY = (header.offsetTop) + 28;

		function onScroll(e) {
			//if (localStorage.getItem("banner") !== "true") {
				if (window.scrollY >= origOffsetY) {
					header.classList.add('sticky');
					header.classList.remove('close-sticky');
				} else {
						header.classList.add('close-sticky');
						header.classList.remove('sticky');
				  }
				//}
			}
		document.addEventListener('scroll', onScroll);
		</script>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Code_Bytes_2021
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-code-bytes-2021' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="header-container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$the_code_bytes_2021_description = get_bloginfo( 'description', 'display' );
				if ( $the_code_bytes_2021_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $the_code_bytes_2021_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="main-navigation">
				<div class="navigation-header">
				<h1 id="mobile-title" aria-controls="primary-menu">THE CODE BYTES</h1>
				<button class="menu-toggle" aria-expanded="false">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</button>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				// Search bar 
				get_search_form();
				?>
			</nav><!-- #site-navigation -->
		</div>
		<script>
		const toggleMenu = document.querySelector('.menu-toggle')

		// Disable scroll 
		const disableScroll = () => {
			const toggleMenuOpen = toggleMenu.getAttribute('aria-expanded');

			if(toggleMenuOpen == 'false') {
				return document.body.style.overflow="hidden"
			} 
			
			return document.body.style.overflow="visible"
		}

		toggleMenu.addEventListener("click", disableScroll);


			
		// Check for active link
		const currentURL = window.location.href;
		let navChildren = document.querySelectorAll('.menu-item');
		
		const displayActiveLink = () => {

			navChildren.forEach((navChild) => {
				let navChildURL = navChild.firstElementChild;
				let parentNode = navChild.parentElement;

				if (navChildURL == currentURL) { 
					navChild.classList.add('active');

					// Transverse up from menuitem anchor tag
					while(parentNode.tagName != 'NAV' || parentNode.tagName != 'BODY') {
						if(parentNode.tagName == 'LI') { parentNode.classList.add('active'); }
						parentNode = parentNode.parentElement
					}
				}
			});
		};

		displayActiveLink();
		</script>
	</header>
	<div class="masthead-shim"></div>
	<!-- #masthead -->

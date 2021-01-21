<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thecodebytes
 */
?>
	<footer id="colophon" class="site-footer">
		<div class="footer__main row align-items-center text-align width-100">
			<?php if (is_active_sidebar('footer-widget')) : ?>
				<div id="footer-widget-area" class="chw-widget-area widget-area col-sm-12 col-md-4" role="complementary">
				<?php dynamic_sidebar('footer-widget'); ?>
				</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-4">
				<img class="footer__logo" src="https://thecodebytes.com/wp-content/uploads/2020/05/thecodebytes-1.svg" alt="the-code-bytes-logo">
			</div>
			<div class="col-sm-12 col-md-4">
				<h3 class="footer__disclaimer-h1">Disclaimer</h3>
				<p class="footer__disclaimer-p">Please note that The Code Bytes has financial relationships with the certain affiliate program, merchants and companies. Links pointing towards these affiliates may be used for the purpose of earning a commission. While it is attempted to present correct information, it may not be appropriate given your specific circumstances and/or the information may become outdated.</p>
			</div>
		</div>
		<div class="footer__site-info row align-items-center text-align width-100">
			<div class="col-sm-4">
				<!-- Insert additional info here -->
			</div>
				<div class="col-sm-4 footer__copyright">
					<a target="_blank" href="<?php echo esc_url(__('https://grantdarling.com/', 'the-code-bytes')); ?>">
					<?php
                    printf(esc_html__('creator and developer: Grant Darling'));
                    ?>
					</a>
					<span class="sep"> | </span>
					<?php
                    printf(esc_html__('copyright © 2020'), 'the-code-bytes', '');
                    ?>
					<a href="<?php echo esc_url(__('https://thecodebytes.com/privacy-policy/', 'the-code-bytes')); ?>">
					<?php
                    printf(esc_html__('privacy policy'));
                    ?>
					</a>
				</div>
				<div class="col-sm-4 footer__icons">
					<a href="https://medium.com/@developer_13376" class="header__icon footer__icon" id="header__icon1" target="_blank"></a>
					<a href="https://www.grantdarling.com/" class="header__icon footer__icon" id="header__icon2" target="_blank"></a>
					<a href="https://www.grantdarling.com/" class="header__icon footer__icon" id="header__icon3" target="_blank"></a>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>

<!-- #page -->
	<script type="text/javascript" src="js/scripts.js"></script>
<?php
wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
wp_footer();
?>
</body>
</html>

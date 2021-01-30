<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Code_Bytes_2021
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="main">
			<div id="footer-section-1">
				<aside class="newsletter">
					<h2> The Code Bytes Newsletter </h2>
					<p> Keep up to date. </p>
					<?php newsletter() ?>
				</aside>
			</div>
			<div id="footer-section-2">
				<img src="http://thecodebytes2021.local/wp-content/uploads/2021/01/cropped-the-code-bytes-logo-small.png" alt="The Code Bytes Logo">
			</div>
			<div id="footer-section-3">
				<h2 class="footer__disclaimer-h1">Disclaimer</h2>
				<p class="footer__disclaimer-p">Please note that The Code Bytes has financial relationships with the certain affiliate program, merchants and companies. Links pointing towards these affiliates may be used for the purpose of earning a commission. While it is attempted to present correct information, it may not be appropriate given your specific circumstances and/or the information may become outdated.</p>
			</div>
		</section>
		<section class="bottom">COPYRIGHT © 2021 THE CODE BYTES | Developer: Grant Darling</section>
	</footer>
	<script type="text/javascript" src="js/scripts.js"></script>
<?php
wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
wp_footer();
?>


</body>
</html>

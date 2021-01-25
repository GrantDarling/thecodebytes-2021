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
		<section class="footer-sections">
		<div id="footer-section-1">Div 1</div>
		<div id="footer-section-2">Div 2</div>
		<div id="footer-section-3">Div 3</div>
		</section>
		<section class="footer-bottom">Copyright : Developer</section>
	</footer>
	<script type="text/javascript" src="js/scripts.js"></script>
<?php
wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
wp_footer();
?>


</body>
</html>

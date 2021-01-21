<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package thecodebytes
 */

get_header();

?>

<!-- Disable Sticky Headers -->
<style>
.sticky {
	display: none;
}
.close-sticky {
	display: none;
}
</style>

<!-- Automatically skip the header to view 404 -->
<script type="text/javascript">
	window.location.href = '#primary';
</script>

	<main id="primary" class="site-main">
		<section class="container four04__main">
			<div class="row justify-content-center">
				<img class="animate" src="https://thecodebytes.com/wp-content/uploads/2020/05/thecodebytes-1.svg" alt="the-code-bytes-404-error">
			<header class="page-header col-12">
				<h1 class="page-title"><?php esc_html_e('404.', 'the-code-bytes'); ?></h1>
			</header>
			<!-- .page-header -->
			<div class="col-12">
				<p><?php esc_html_e('Uh-oh. Looks like this link doesn\'t exist.', 'the-code-bytes');
                    ?></p>
			</div>
			<?php
            echo "<div row justify-content-center class='four04__return col-2'>";
            ?>
			<a style="display: inline" href="/">
			<button type="button" name="button">Home</button>
			</a>
			<?php
            echo "</div>";
            ?>
			<?php
            echo "<div class='four04__search col-2'>";
            get_search_form();
            echo "</div>";
             ?>
		</section>

			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();

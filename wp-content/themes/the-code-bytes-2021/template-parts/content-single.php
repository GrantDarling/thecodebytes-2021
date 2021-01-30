<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Code_Bytes_2021
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<?php echo get_the_post_thumbnail() ?>
		<?php echo get_the_title() ?> <br><br>
		<?php echo get_the_date()?> <br><br>
		<?php echo get_the_author() ?>
		<?php echo get_avatar(get_the_author()) ?>
		<?php echo get_the_content() ?>
	</header>		

<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
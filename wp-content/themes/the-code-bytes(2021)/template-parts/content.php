<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thecodebytes
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single__header">
		<!-- Grab the background image url of current post -->
		<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
		<!-- Our header div with the feature image as our background -->
			<div class="single__post" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;background-size: cover;background-position: center;">
				<!-- Skip to content link -->
				 <!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to Content', 'the-code-bytes'); ?></a> -->
				<!-- Skip to content link -->
			<a id="article">
				<header class="single__header">
					 <div class="tv"></div>
					 <h1 class="single__title"><?php the_title(); ?></h1>
					 <div class="single__entry-meta">
						<?php
                        echo '<p class="single__posted_on">';
                            the_code_bytes_posted_on();
                        echo '</p>';
                        echo '<p class="single__meta_title">';
                        the_title();
                        echo '</p>';
                        echo '<p class="single__posted_by">';
                            the_code_bytes_posted_by();
                        echo '</p>';
                        ?>
					 </div><!-- .entry-meta -->
				</header>
			</a>
				 </div>
			</div>
	 <?php //get_sidebar(); ?>
	<div class="entry-content container">
		<?php
        the_content(
                            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'the-code-bytes'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            )
                        );
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'the-code-bytes'),
                'after'  => '</div>',
            )
        );
        ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php the_code_bytes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

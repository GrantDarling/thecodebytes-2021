<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thecodebytes
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php if (have_posts()) : ?>
			<header class="page-header home__post-section container">
				<?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
			</header>
			<!-- .page-header -->
			<?php
                echo '<div style="text-align: center;margin-bottom: 75px; display: flex; flex-wrap: wrap;" class="col-lg-9 justify-content-between container">';
                while (have_posts()) :
                    the_post();
                    echo '<div style="" class="justify-content-between blog-post col-sm-12 col-md-8 col-lg-4">';
            												echo '<h2 class="blog-title screen-reader-text">' . the_title() . '</h2>';
                                    echo get_the_post_thumbnail();
                                    echo '<p class="blog-excerpt">' . get_the_excerpt() . '</p>';
                    echo '</div>';
            endwhile;
      echo '</div>';
            the_posts_navigation();
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
	</main>
	<!-- #main -->
<?php
get_footer();

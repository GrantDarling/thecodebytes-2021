<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package thecodebytes
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php if (have_posts()) : ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Search Results for: %s', 'the-code-bytes'), '<span>' . get_search_query() . '</span>');
                    ?>
				</h1>
			</header><!-- .page-header -->
			<?php
            echo '<div style="text-align: center;margin-bottom: 75px; display: flex; flex-wrap: wrap;" class="col-lg-9 justify-content-between container">';
            /* Start the Loop */
            while (have_posts()) :
                the_post();
                echo '<div style="" class="justify-content-between blog-post col-sm-12 col-md-8 col-lg-4">';
                                echo '<h2 class="blog-title screen-reader-text">' . the_title() . '</h2>';
                                echo get_the_post_thumbnail();
                                echo '<p class="blog-excerpt">' . get_the_excerpt() . '</p>';
                echo '</div>';
                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                #get_template_part( 'template-parts/content', 'search' );
            endwhile;
            echo '</div>';
            the_posts_navigation();
            else :
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
	</main><!-- #main -->
<?php
get_footer();

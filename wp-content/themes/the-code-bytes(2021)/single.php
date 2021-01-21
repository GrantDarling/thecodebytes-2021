<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thecodebytes
 */

get_header();
 ?>

<style media="screen">
  body {
    background: white;
    overflow-x: hidden;
  }

  main {
    max-width: 99999999999999999px; /* allows full screen for article header */
  }

  .entry-content {
    max-width: 1200px;
  }
</style>
<!-- Bring us to the hero image and not the header-->
<script type="text/javascript">
	window.location.href = '#article';
</script>
		<?php
        $the_cat = get_the_category();
        $category_name = $the_cat[0]->cat_name;
        $category_link = get_category_link($the_cat[0]->cat_ID);
        ?>
	<main id="primary" class="site-main">
		<!-- Displays current category -->
		<?php
        while (have_posts()) :
            echo '<div class="">';
            the_post();
            get_template_part('template-parts/content', get_post_type());
            echo '</div>';
            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__('<<  ', 'the-code-bytes') . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__('', 'the-code-bytes') . '</span> <span class="nav-title">%title' . ' >></span>',
                )
            );
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile; // End of the loop.
        ?>
	</main><!-- #main -->

<?php
get_footer();

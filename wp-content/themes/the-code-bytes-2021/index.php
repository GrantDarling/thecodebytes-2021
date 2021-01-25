<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Code_Bytes_2021
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- Above The Fold -->
		<section class="home__landing">
			<div class="tagline">Keeping Code Cool <span>Since 2020.</span></div>
			<div class="social-container">
				<img src="" alt="Email" />
				<img src="" alt="Medium" />
			</div>
			<div class="landing__container">
			<h1 class="title-desktop">The Code Bytes</h1>
			<!-- smooth scroll: https://www.w3schools.com/howto/howto_css_smooth_scroll.asp#section2 -->
			<button>Top Articles</button>
			<button>Code Resources</button>
			<a href="#">What Is The Code Bytes?</a>
			</div>
		</section>

		<div style="font-size: 30px;padding-top:150px;">HELLO WORLD. Add 'homepage' tags to thecodebytes.com</div>

		<section class="home__section-2">
			<div class="content-layout__container">
				<!-- Move me to functions and use later -->
				<?php 
				echo'WHATS UP';
				global $wpdb;
				// this adds the prefix which is set by the user upon instillation of wordpress
				//$table_name = $wpdb->prefix . "wp_posts";
				// this will get the data from your table
        		$retrieve_data = $wpdb->get_results( "SELECT * FROM wp_posts LIMIT 10");
				?>
				<ul>
				<?php foreach ($retrieve_data as $retrieved_data){ ?>
				<a href=<?php echo $retrieved_data->guid;?>>click me</a>
				<div><?php echo $retrieved_data->post_content;?></div>
				<?php 
				}
				?>
				</ul>
				<?php

				// Move to functions.php?
				function functionName($tagName) {
					// Maybe leave the amount of posts open and have the promotional link follow. Have all other links show on load
					// Make style background image inside html
						$args = array(
							'posts_per_page'  => 3,
							'post_status' => 'publish',
							'tag_slug__in' => $tagName,
							'orderby' => 'meta_value_num',
							'order' => 'ASC'
						);
						$the_query = new WP_Query($args); //http://codex.wordpress.org/Class_Reference/WP_Query

						//the loop
						if($the_query->have_posts()) {
							while ( $the_query->have_posts() ){
								$the_query->the_post();
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

								echo '<a href="' . get_permalink() . '"><div style="background-image: url( ' . $featured_img_url . ');">' . get_the_title() . '</div></a>';
							}
						}

					}
				functionName('homepage');
				functionName('');
				?>

			</div>
			<div class="promotional__container">
					Promotional Content here
			</div>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

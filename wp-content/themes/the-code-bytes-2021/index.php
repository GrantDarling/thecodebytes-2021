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
			<div class="landing__banner">
				<div class="tagline">Keeping Code Cool <span>Since 2020.</span></div>
				<div class="social-container">
					<a target="_blank" href="mailto:grantcarterdarling@gmail.com?subject=The Code Bytes Inquiry"><img src="https://thecodebytes.com/wp-content/uploads/2021/01/email-me.svg" alt="Medium" /></a>
					<a target="_blank" href="https://developer-13376.medium.com/"><img src="https://thecodebytes.com/wp-content/uploads/2021/01/Medium-Logo.svg" alt="Email" /></a>
				</div>
			</div>
			<div class="landing__container">
			<h1 class="landing__title-desktop">THE CODE BYTES</h1>
			<div class="landing__buttons">
				<a class="scroll" href="#top-articles"> <button id="landing__button--1">
					<svg width="180px" height="60px" preserveAspectRatio="none" class="border">
					<polyline points="150,1 150,44.6 1,44.6 1,1 150,1" preserveAspectRatio="none" class="bg-line" />
					<polyline points="150,1 150,44.6 1,44.6 1,1 150,1" preserveAspectRatio="none" class="hl-line" />
					</svg>
					<span>Top Articles</span>
				</button></a>
				<a class="scroll" href="#code-resources"><button id="landing__button--2">
					<svg width="5080px" height="60px" preserveAspectRatio="none" class="border">
					<polyline points="150,1 150,44.6 1,44.6 1,1 150,1" preserveAspectRatio="none" class="bg-line" />
					<polyline points="150,1 150,44.6 1,44.6 1,1 150,1"  preserveAspectRatio="none"class="hl-line" />
					</svg>
					<span>Code Resources</span>
				</button></a>
			</div>
			<a class="landing__about" href="#">What is The Code Bytes?</a>
			</div>
		</section>

		<!-- Top Articles -->
		<section class="home__section-article" id="top-articles">
			<h1>Top Articles</h1>
			<div class="home__articles-container">
				<?php getArticlesByTag('homepage', 5, "top"); ?>
				<div class="home__buttons--section">
					<button data-article='top' class="browse-more">Browse More</button>
					<a href="/category/archive/"><button>All Articles</button></a>
				</div>
			</div>
			<div class="promotional__container">
					Good old wholesome promotional content
			</div>
		</section>

		<!-- Latest Articles -->
		<section class="home__section-article" id="top-articles">
			<h1>Latest Articles</h1>
			<div class="home__articles-container">
				<?php getArticlesByTag('', 5, "latest"); ?>
				<div class="home__buttons--section">
					<button data-article='latest' class="browse-more">Browse More</button>
					<a href="/category/archive/"><button>All Articles</button></a>
				</div>
			</div>
			<div class="promotional__container">
					Good old wholesome promotional content
			</div>
		</section>
		<div>
		</div>
		<section id="code-resources"></section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

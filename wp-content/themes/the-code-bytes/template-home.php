
<?php
/**
 * Template Name: Home
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main home__post-section" role="main">
      <!-- LATEST POSTS -->
      <h2 class="home__header-titles">Latest Posts</h2>
      <?php
      $cat = 'tech talk';
      ?>
      <?php
      // set the "paged" parameter (use 'page' if the query is on a static front page)
     $paged = (get_query_var('page')) ? get_query_var('page') : '1';
     $args = array(
             'nopaging'               => false,
             'paged'                  => $paged,
             'posts_per_page'         => '3',
             'post_type'              => 'post',
     );
     // The Query
     $query = new WP_Query($args);
     // The Loop
     if ($query->have_posts()) {
         //previous_posts_link( '« Newer Entries' );
         echo '<div class="">'; //remove inline style
         echo '<div class="row justify-content-around">';
         while ($query->have_posts()) {
             $query->the_post();
             echo '<div class="blog-post col-sm-12 col-md-12 col-lg-2">';
             echo '<h2 class="blog-title screen-reader-text">' . the_title() . '</h2>';
             echo get_the_post_thumbnail();
             echo '<p class="blog-excerpt">' . get_the_excerpt() . '</p>';
             echo '</div>';
         }
         //next_posts_link( 'Older Entries »', $query->max_num_pages );
         echo '</div>';
         echo '</div>';
     } else {
         // no posts found
         echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
     }
     // Restore original Post Data
     wp_reset_postdata();
     ?>
     <button class="row home__blog-link">
       <a href="https://thecodebytes.com/category/archive">browse full archive</a>
     </button>
     <!-- MAKE MONEY CODING -->
     <h2 class="home__header-titles">Make Money Coding</h2>
     <?php
     $cat = 'make money coding';
     ?>
     <?php
     // set the "paged" parameter (use 'page' if the query is on a static front page)
    $paged = (get_query_var('page')) ? get_query_var('page') : '1';
    $args = array(
        'nopaging'               => false,
        'paged'                  => $paged,
        'posts_per_page'         => '3',
        'post_type'              => 'post',
        'category_name'          => $cat,
    );
    // The Query
    $query = new WP_Query($args);
    // The Loop
    if ($query->have_posts()) {
        //previous_posts_link( '« Newer Entries' );
        echo '<div class="">'; //remove inline style
        echo '<div class="row justify-content-around">';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<div class="blog-post col-sm-12 col-md-12 col-lg-2">';
            echo '<h2 class="blog-title screen-reader-text">' . the_title() . '</h2>';
            echo get_the_post_thumbnail();
            echo '<p class="blog-excerpt">' . get_the_excerpt() . '</p>';
            echo '</div>';
        }
        //next_posts_link( 'Older Entries »', $query->max_num_pages );
        echo '</div>';
        echo '</div>';
    } else {
        // no posts found
        echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
    }
    // Restore original Post Data
    wp_reset_postdata();
    ?>
    <div class="row home__blog-link">
      <a href="https://thecodebytes.com/category/make-money-coding">browse make money coding</a>
    </div>
    <!-- TECH TALK -->
    <h2 class="home__header-titles">Tech Talk</h2>
    <?php
    $cat = 'tech talk';
    ?>
    <?php
    // set the "paged" parameter (use 'page' if the query is on a static front page)
   $paged = (get_query_var('page')) ? get_query_var('page') : '1';
   $args = array(
       'nopaging'               => false,
       'paged'                  => $paged,
       'posts_per_page'         => '3',
       'post_type'              => 'post',
       'category_name'          => $cat,
   );
   // The Query
   $query = new WP_Query($args);
   // The Loop
   if ($query->have_posts()) {
       //previous_posts_link( '« Newer Entries' );
       echo '<div class="">'; //remove inline style
       echo '<div class="row justify-content-around">';
       while ($query->have_posts()) {
           $query->the_post();
           echo '<div class="blog-post col-sm-12 col-md-12 col-lg-2">';
           echo '<h2 class="blog-title screen-reader-text">' . the_title() . '</h2>';
           echo get_the_post_thumbnail();
           echo '<p class="blog-excerpt">' . get_the_excerpt() . '</p>';
           echo '</div>';
       }
       //next_posts_link( 'Older Entries »', $query->max_num_pages );
       echo '</div>';
       echo '</div>';
   } else {
       // no posts found
       echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
   }
   // Restore original Post Data
   wp_reset_postdata();
   ?>
   <div class="row home__blog-link">
     <a href="https://thecodebytes.com/category/tech-talk">browse tech talk</a>
   </div>
   <!-- BECOME A DEVELOPER -->
   <h2 class="home__header-titles">Learn Development</h2>
   <?php
   $cat = 'learn development';
   ?>
   <?php
   // set the "paged" parameter (use 'page' if the query is on a static front page)
  $paged = (get_query_var('page')) ? get_query_var('page') : '1';
  $args = array(
      'nopaging'               => false,
      'paged'                  => $paged,
      'posts_per_page'         => '3',
      'post_type'              => 'post',
      'category_name'          => $cat,
  );
  // The Query
  $query = new WP_Query($args);
  // The Loop
  if ($query->have_posts()) {
      //previous_posts_link( '« Newer Entries' );
      echo '<div class="">'; //remove inline style
      echo '<div class="row justify-content-around">';
      while ($query->have_posts()) {
          $query->the_post();
          echo '<div class="blog-post col-sm-12 col-md-12 col-lg-2">';
          echo '<h2 class="blog-title screen-reader-text">' . the_title() . '</h2>';
          echo get_the_post_thumbnail();
          echo '<p class="blog-excerpt">' . get_the_excerpt() . '</p>';
          echo '</div>';
      }
      //next_posts_link( 'Older Entries »', $query->max_num_pages );
      echo '</div>';
      echo '</div>';
  } else {
      // no posts found
      echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
  }
  // Restore original Post Data
  wp_reset_postdata();
  ?>

  <div class="row home__blog-link">
    <a href="https://thecodebytes.com/category/learn-development">browse learn development</a>
  </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php

get_footer(); ?>

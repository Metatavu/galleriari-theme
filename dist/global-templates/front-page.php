<?php
/**
 * The template for displaying the hero in main page.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<?php 
get_template_part( 'global-templates/custom-template-parts/custom-template-hero' );

get_template_part( 'global-templates/custom-template-parts/custom-template-article' );

get_template_part( 'global-templates/custom-template-parts/custom-template-recent' );

get_template_part( 'global-templates/custom-template-parts/custom-template-poster' );
?>

<main class="site-main" id="main" style="background-color: #fff;">
  <div class="custom-front-page wrapper"> 
    <?php
      while ( have_posts() ) {
        the_post();
        get_template_part( 'loop-templates/content', 'page' );
      }
    ?>
  </div>
</main><!-- #main -->
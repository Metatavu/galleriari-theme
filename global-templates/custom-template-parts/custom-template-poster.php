<?php
/**
 * The template for displaying the poster in main page.
 *
 * Shows title and custom excerpt text
 * 
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="wrapper" id="wrapper-hero">

    <div class="hero-image-container" style="z-index: 0;">
    <div class="hero-video">
    </div>


        <?php
            $the_query = new WP_Query( array( 
                'orderby' => 'date',
                'category_name' => 'nayttely', //name of category by slug
                'posts_per_page' => '1'
            )); // how many posts to show

            // Put into the loop
            while ( $the_query->have_posts() ) :

                $the_query->the_post();

                echo '<img class="video" src="'. get_the_post_thumbnail_url() .'" alt="" style="">';
                echo '<div class="hero-banner-content-container">';
                echo '<h1 class="hero-banner-title">'. get_the_title() .' </h1>';
                echo '<h2 class="hero-banner-subtitle">'. nl2br(($post->post_excerpt)) .' </h2>';
                echo '<div class="hero-banner-button"><a href="'.get_permalink($post->ID).'"  class="btn btn-light hero-banner-button btn-light" >'. $heroBtn1Text .'</a>';

            endwhile;

            // Restore original Post Data if needed
            wp_reset_postdata();
            ?>

            </div>
        </div>
    </div>
</div>
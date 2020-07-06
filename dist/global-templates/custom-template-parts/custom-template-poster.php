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
$poster_title = get_theme_mod( 'poster_setting' );
$poster_text = get_theme_mod( 'poster_text_setting' );
$posterImg = get_theme_mod( 'poster_bgimage_setting' );
$posterUrl = get_theme_mod( 'poster_url_setting' );
$custom_read_more = "Lue lisää";
?>

<div class="wrapper" id="wrapper-hero">

    <div class="hero-image-container" style="z-index: 0;">
        <?php
            $the_query = new WP_Query( array( 
                'orderby' => 'date',
                'category_name' => 'nayttely', //name of category by slug
                'posts_per_page' => '1'
            )); // how many posts to show

            // Put into the loop
            while ( $the_query->have_posts() ) :

                $the_query->the_post();

                echo '<img class="video" src="'. $posterImg .'" alt="" style="">';
                echo '<div class="poster-wrapper">';
                echo '<div class="poster-banner-content-container">';
                echo '<h2 class="poster-banner-title">'. $poster_title.' </h2>';
                echo '<h2 class="poster-banner-subtitle">'. $poster_text.' </h2>';
                echo '<div class="hero-banner-button"><a href="'.$posterUrl.'"  class="btn btn-light hero-banner-button" >'. $custom_read_more .'</a>';

            endwhile;

            // Restore original Post Data if needed
            wp_reset_postdata();
            ?>
            </div>
            </div>
        </div>
    </div>
</div>
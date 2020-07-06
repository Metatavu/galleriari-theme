<?php
/**
 * The template for displaying the articles in main page.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bgimage = get_theme_mod( 'bgimage_setting' );
$custom_more_button = "Lue lisää"
?>

<!-- AJANKOHTAISTA -->


<div class="wrapper" id="article-wrapper" style="background-image: url( <?php echo esc_attr( $bgimage ); ?> );">
	<div class="container container-maxwidth" id="content" tabindex="-1">
		<!-- "" => text-center"" -->
		<div class="row text-center justify-content-center">
			<!-- Do the left sidebar check -->
            <div class="col-md content-area">
                        <div class="entry-content">

                            <?php
                                $the_query = new WP_Query( array( 
                                    'orderby' => 'date',
                                    'category_name' => 'artikkeli', //name of category by slug
                                    'posts_per_page' => '2'
                                )); // how many posts to show
                                $i = true;
                                // Put into the loop
                                while ( $the_query->have_posts() ) :

                                    $the_query->the_post();


                                    if ($i) {
                                        echo '<div class="row mt-5 align-items-center"><div class="col-12 order-md-1 col-md-6 article-img"><img src="'. get_the_post_thumbnail_url() .'" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""></div>';
                                        echo '<div class="col-12 order-md-2 col-md-6"><div class="article-content-right text-left-md"> <h2>' . get_the_title() . ' </h2>' ;
                                        echo wp_trim_words( get_the_content(), 20 ) .'</div>';
                                        echo '<div class="hero-banner-button article-content-right text-left-md"><a href="'.get_permalink($post->ID).'" class="btn btn-red hero-banner-button" > '.$custom_more_button.' </a></div></div>';
                                        echo '</div>';
                                        $i = false;
                                    }
                                    else {
                                        echo '<div class="row mt-5 align-items-center"><div class="col-12 order-md-4 col-md-6 article-img"><img src="'. get_the_post_thumbnail_url() .'" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""></div>';
                                        echo '<div class="col-12 order-md-3 col-md-6"><div class="article-content-left text-right-md"> <h2>' . get_the_title() . ' </h2>';
                                        echo wp_trim_words( get_the_content(), 20 ) .'</div>';
                                        echo '<div class="hero-banner-button article-content-left text-right-md"><a href="'.get_permalink($post->ID).'" class="btn btn-red hero-banner-button" > '.$custom_more_button.' </a></div></div>';
                                        echo '</div>';
                                        $i = true;
                                    }   

                                endwhile;

                                // Restore original Post Data if needed
                                wp_reset_postdata();
                            ?>

	                    </div><!-- .entry-content -->

            </div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

		</div><!-- .row -->

	</div><!-- #content -->

</div>
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
	<div class="container" id="content" tabindex="-1">
		<!-- "" => text-center"" -->
		<div class="row text-center">
			<!-- Do the left sidebar check -->
            <div class="col-md content-area" id="primary">
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
                                        echo '<div class="row"><div class="col-md-6 article-img"><img width="150" height="150" src="'. get_the_post_thumbnail_url() .'" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""></div>';
                                        echo '<div class="col-md-6 article-content"> <h2>' . get_the_title() . ' </h2>' ;
                                        echo get_the_content();
                                        echo '<div class="hero-banner-button"><a href="'.get_permalink($post->ID).'"  class="btn btn-light hero-banner-button btn-light" > '.$custom_more_button.' </a></div></div>';
                                        echo '</div>';
                                        $i = false;
                                    }
                                    else {
                                        echo '<div class="row"><div class="col-md-6 article-content"> <h2>' . get_the_title() . ' </h2>';
                                        echo get_the_content();
                                        echo '<div class="hero-banner-button"><a href="'.get_permalink($post->ID).'"  class="btn btn-light hero-banner-button btn-light" > '.$custom_more_button.' </a></div></div>';
                                        echo '<div class="col-md-6 article-img"><img width="150" height="150" src="'. get_the_post_thumbnail_url() .'" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""></div>';
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
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

$secondaryTitle = get_theme_mod( 'secondary_title_setting' );
$custom_more_recent = "Lisää ajankohtaisia"

?>

<!-- AJANKOHTAISTA -->


<div class="wrapper" id="page-wrapper">
	<div class="container container-maxwidth" id="content" tabindex="-1">
		<!-- "" => text-center"" -->
		<div class="row text-center justify-content-center">
			<!-- Do the left sidebar check -->
            <div class="col-md content-area" id="primary">
			    <main class="site-main" id="main">
                    <article class="post-14 page type-page status-publish hentry" id="post-14">
                        <header class="entry-header">

                        </header><!-- .entry-header -->
                        <div class="entry-content">

                            <h2 class="has-text-align-center">
                                <?php echo esc_attr( $secondaryTitle ); ?>
                            </h2>

                            <ul class="wp-block-latest-posts wp-block-latest-posts__list is-grid">

                            <?php
                                $the_query = new WP_Query( array( 
                                    'orderby' => 'date',
                                    'category_name' => 'ajankohtaista', //name of category by slug
                                    'posts_per_page' => '3'
                                )); // how many posts to show

                                // Put into the loop
                                while ( $the_query->have_posts() ) :

                                    $the_query->the_post();

                                    $thumbnail_url = get_the_post_thumbnail_url();

                                    echo '<li class="col-md-12 col-lg-4">';
                                    echo '<a href="' . get_permalink($post->ID) . '"><div class="d-inline-block wp-block-latest-posts__featured-image recent-custom-image" style="background-image: url('. get_the_post_thumbnail_url(null) .'")"></div><div class= "recent_title">' . get_the_title() . '</div></a></li>';

                                endwhile;

                                // Restore original Post Data if needed
                                wp_reset_postdata();
                            ?>
                            </ul>


                            <div class="row aling-items-middle">
                                <?php echo '<div class="hero-banner-button col-md-12"><a href="'.get_permalink($post->ID).'" class="btn btn-red hero-banner-button" > '.$custom_more_recent.' </a></div>'; ?>
                            </div>

	                    </div><!-- .entry-content -->

                    </article><!-- #post-## -->

			    </main><!-- #main -->
			<!-- Do the right sidebar check -->	

            </div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

		</div><!-- .row -->

	</div><!-- #content -->

</div>
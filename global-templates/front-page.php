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

$container = get_theme_mod( 'understrap_container_type' );
$heroImg = get_theme_mod( 'galleriari_hero_image_setting' );
$heroVid = get_theme_mod( 'galleriari_hero_video_setting' );
$heroTitle = get_theme_mod( 'galleriari_hero_title' );
$heroText = get_theme_mod( 'galleriari_hero_text_setting' );
$heroBtn1Text = get_theme_mod( 'galleriari_hero_button1_text_setting' );
$heroBtn1Url = get_theme_mod( 'galleriari_hero_button1_url_setting' );
$secondaryTitle = get_theme_mod( 'secondary_title_setting' );
?>

<div class="wrapper" id="wrapper-hero">
    <div class="hero-image-container" style="z-index: 0;">
    <div class="hero-video">
        <video id="video" playsinline="playsinline" autoplay="autoplay" muted="muted" poster="<?php echo esc_attr( $heroImg ); ?>" style="width:100%; height:100%;">
            <source src="<?php echo esc_attr( $heroVid ); ?>" type="video/mp4">
        </video>
    </div>

        <div class="hero-banner-content-container">
            <h1 class="hero-banner-title">
                <?php echo esc_attr( $heroTitle ); ?>
            </h1>
            <h2 class="hero-banner-subtitle">
                <?php echo esc_attr( $heroText ); ?>
            </h2>
            <div class="hero-banner-button">
                <a href="<?php echo esc_attr( $heroBtn1Url ); ?>"  class="btn btn-light hero-banner-button btn-light" >
					<?php echo esc_attr( $heroBtn1Text ); ?>
				</a>
            </div>
        </div>
    </div>
</div>

<!-- HERO wrapper end -->

<div class="wrapper" id="page">
	<div class="container" id="content" tabindex="-1">
		<!-- "" => text-center"" -->
		<div class="row text-center">
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

                            <ul class="wp-block-latest-posts wp-block-latest-posts__list is-grid columns-3">

                            <?php
                                $the_query = new WP_Query( array( 
                                    'orderby' => 'date',
                                    'category_name' => 'ajankohtaista', //name of category by slug
                                    'posts_per_page' => '3'
                                )); // how many posts to show

                                // Put into the loop
                                while ( $the_query->have_posts() ) :

                                    $the_query->the_post();

                                    echo '<li><div class="wp-block-latest-posts__featured-image"><img width="150" height="150" src="'. get_the_post_thumbnail_url() .'" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""></div>';
                                    echo '<a href="' . get_permalink($post->ID) . '">' . get_the_title() . '</a></li>';

                                endwhile;

                                // Restore original Post Data if needed
                                wp_reset_postdata();
                            ?>
                            </ul>
                            <p></p>

	                    </div><!-- .entry-content -->
	                <footer class="entry-footer">
	                </footer><!-- .entry-footer -->

                    </article><!-- #post-## -->

			    </main><!-- #main -->
			<!-- Do the right sidebar check -->	

            </div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

		</div><!-- .row -->

	</div><!-- #content -->

</div>

<!-- AJANKOHTAISTA -->


<div class="wrapper" id="page-wrapper">
	<div class="container" id="content" tabindex="-1">
		<!-- "" => text-center"" -->
		<div class="row text-center">
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

                            <ul class="wp-block-latest-posts wp-block-latest-posts__list is-grid columns-3">

                            <?php
                                $the_query = new WP_Query( array( 
                                    'orderby' => 'date',
                                    'category_name' => 'ajankohtaista', //name of category by slug
                                    'posts_per_page' => '3'
                                )); // how many posts to show

                                // Put into the loop
                                while ( $the_query->have_posts() ) :

                                    $the_query->the_post();

                                    echo '<li><div class="wp-block-latest-posts__featured-image"><img width="150" height="150" src="'. get_the_post_thumbnail_url() .'" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""></div>';
                                    echo '<a href="' . get_permalink($post->ID) . '">' . get_the_title() . '</a></li>';

                                endwhile;

                                // Restore original Post Data if needed
                                wp_reset_postdata();
                            ?>
                            </ul>
                            <p></p>

	                    </div><!-- .entry-content -->
	                <footer class="entry-footer">
	                </footer><!-- .entry-footer -->

                    </article><!-- #post-## -->

			    </main><!-- #main -->
			<!-- Do the right sidebar check -->	

            </div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

		</div><!-- .row -->

	</div><!-- #content -->

</div>

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
                echo '<h2 class="hero-banner-subtitle">'. nl2br(get_excerpt('excerpt_more')) .' </h2>';
                echo '<div class="hero-banner-button"><a href="'.get_permalink($post->ID).'"  class="btn btn-light hero-banner-button btn-light" >'. $heroBtn1Text .'</a>';

            endwhile;

            // Restore original Post Data if needed
            wp_reset_postdata();
            ?>

            </div>
        </div>
    </div>
</div>
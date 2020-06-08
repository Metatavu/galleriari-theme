<?php
/**
 * Template Name: Nayttely-page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<!-- "" => text-center"" -->
		<div class="row text-center">

			<main class="site-main nayttely" id="main">
				

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );


					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

				<!--Custom div for displaying posts in nayttely-page-->
				<div class="">
					<?php
						$the_query = new WP_Query( array( 
							'orderby' => 'date',
							'category_name' => 'nayttely', //name of category by slug
							'posts_per_page' => '2'
						)); // how many posts to show
						// Put into the loop
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							echo '<div class = "entry-content">';
							echo '<div class = "wp-block-columns">';
								echo '<div class="wp-block-column">';
								echo '<figure class="wp-block-image size-large"><img class="wp-image-167" sizes="(max-width: 606px) 100vw, 606px" src="'. get_the_post_thumbnail_url() .'"</figure>';
								echo '</div>';
								echo '<div class="wp-block-column">';
								echo '<h3>' . get_the_title() . '</h3>';
								echo '<p>'. get_the_content() .'</p>';
							echo '</div></div>';

							

						endwhile;
						// Restore original Post Data if needed
						wp_reset_postdata();
					?>
				</div>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();

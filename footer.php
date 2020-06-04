<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

				<div class="col-md-1">

				</div>
				<div class="col-md-2">
				<div class="site-info">
						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-2">
				<div class="site-info">	

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-2">
					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-2">
					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-2">
					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-1">
				</div>

		</div><!-- row end -->

		<div class="row">
			<div class="col-md-5">
			</div>
			<div class="col-md-2">
				IKONIT
			</div>
			<div class="col-md-5">
			</div>
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


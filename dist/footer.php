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


$footerText1 = get_theme_mod( 'galleriari_footer1_text_setting' );
$footerText2 = get_theme_mod( 'galleriari_footer2_text_setting' );
$footerText3 = get_theme_mod( 'galleriari_footer3_text_setting' );
$footerText4 = get_theme_mod( 'galleriari_footer4_text_setting' );
$footerText5 = get_theme_mod( 'galleriari_footer5_text_setting' );
$footerIcons = get_theme_mod( 'galleriari_footer_icon_setting' );

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row justify-content-between">
 
				<div class="col-md-2 col-lg-2">
					<div class="site-info">

						<?php echo nl2br( $footerText1); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-3 col-lg-2">
					<div class="site-info">

						<?php echo nl2br( $footerText2 ); ?>

					</div><!-- .site-info -->
				</div>	
				<div class="col-md-2 col-lg-2">
					<div class="site-info">

						<?php echo nl2br( $footerText3 ); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-3 col-lg-2">
					<div class="site-info">

						<?php echo nl2br( $footerText4 ); ?>

					</div><!-- .site-info -->
				</div>
				<div class="col-md-2 col-lg-2">
					<div class="site-info">

						<?php echo nl2br( $footerText5 ); ?>

					</div><!-- .site-info -->
				</div>

		</div><!-- row end -->

		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4 pt-4 text-center">
				<?php echo nl2br( $footerIcons ); ?>
			</div>
			<div class="col-md-4">
			</div>
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

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

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

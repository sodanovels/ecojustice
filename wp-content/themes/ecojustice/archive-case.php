<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section>
	<div class="wrapper">

		<section class="grid">
			<?php 
				$args = array(
					'post_type'			=> 'case',
					'posts_per_page'	=> 20,
				);
				$wp_query = new WP_Query( $args );
			?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
			<a href="<?php echo get_permalink($post->ID); ?>" class="item">
				<div>
					<div class="media"
						<?php Starkers_Utilities::get_template_parts( array('parts/backgrounds/inline-style') ); ?>
					</div>
					<div class="meta">
						<?php Starkers_Utilities::get_template_parts( array('parts/elements/category') ); ?>
						<br><?php the_time('F j, Y'); ?>
					</div>
					<div class="desc">
						<p><?php Starkers_Utilities::get_template_parts( array('parts/elements/title') ); ?></p>
					</div>
				</div>
			</a>
			<?php endwhile; ?>
		</section>

	</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
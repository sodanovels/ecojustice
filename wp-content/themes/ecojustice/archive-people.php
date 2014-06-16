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

<section class="tiles">
	<?php 
		$args = array(
			'post_type'			=> 'people',
			'posts_per_page'	=> 6,
			'orderby'			=> 'rand'
		);
		$wp_query = new WP_Query( $args );
		$ids = array();
	?>
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
		// track which people are already displayed
		$ids[] = get_the_ID();
	?>
	<?php Starkers_Utilities::get_template_parts( array('parts/elements/tile') ); ?>		
	<?php endwhile; ?>
	<?php 
		$args = array(
			'post_type'			=> 'people',
			'posts_per_page'	=> 6,
			'orderby'			=> 'rand',
			'post__not_in' 		=> $ids
		);
		$wp_query = new WP_Query( $args );
	?>
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
		// track which people are already displayed
		$ids[] = get_the_ID();
	?>
	<?php Starkers_Utilities::get_template_parts( array('parts/elements/tile') ); ?>
	<?php endwhile; ?>
	<?php 
		$args = array(
			'post_type'			=> 'people',
			'posts_per_page'	=> 6,
			'orderby'			=> 'rand',
			'post__not_in' 		=> $ids
		);
		$wp_query = new WP_Query( $args );
	?>
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
		// track which people are already displayed
		$ids[] = get_the_ID();
	?>
	<?php Starkers_Utilities::get_template_parts( array('parts/elements/tile') ); ?>
	<?php endwhile; ?>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
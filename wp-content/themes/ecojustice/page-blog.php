	<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<section class="hero alt closer" style="background-image:url(<?=$image[0]?>); margin-bottom: 44px;">
	<div class="wrapper">
		<div class="row">
			<div class="col">
				
				<h1><?php the_title(); ?></h1>
				<h2><?php the_content(); ?></h2>
			</div>
<?php endwhile; ?>
			<div class="col">
				<div class="carousel slider">
					<div class="slides">
						<div>
						<?php 
							$sticky = get_option( 'sticky_posts' );
							$args = array(
								'posts_per_page' => 5,
								'post__in'  => $sticky,
								'ignore_sticky_posts' => 1
							);
							$wp_query = new WP_Query( $args );
							
						?>
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
							<div class="pane" style="background-image: url(
								<?php if (has_post_thumbnail( $post->ID )) : ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>			
									<?=$image[0]?>
								<?php endif; ?>
							);">
								<div>
									<div class="flag">Featured Post</div>
									<div class="desc">
										<h4><?php the_title(); ?></h4>
										<a href="<?php echo get_permalink($post->ID); ?>">Read Story</a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="wrapper">
		<div class="row tri">
			<div class="col wide">
				<hr>
					<?php 
						$args = array(
							'posts_per_page'	=> 15,
							'post__not_in' => get_option( 'sticky_posts' ) 
						);
						$wp_query = new WP_Query( $args );
					?>
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<?php if (has_post_thumbnail( $post->ID )) : ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>			
						<img src="<?=$image[0]?>" alt="">
					<?php endif; ?>
					<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h2>
					<div class="meta"><?php the_time('F j, Y'); ?></div>
					<p><?php the_excerpt(); ?></p>
					
				<?php endwhile; ?>
				
			</div>
			<div class="col">
				<h4>Most Popular</h4>
				
			</div>
		</div>
	</div>
</section>
		

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
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
		
		<?php if (has_post_thumbnail( $post->ID )) : ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<section class="hero" style="background-image:url(<?=$image[0]?>)">

			</section>
		<?php endif; ?>
		
		<section>
			<div class="wrapper">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php #comments_template( '', true ); ?>
			</div>
		</section>
		
		<section class="hero alt closer" style="background-image: url(<?=$image[0]?>); background-position: 50% 50%">
			<div class="wrapper">
				
				<div class="row">
					<div class="col">
						<h1>How You Can Help</h1>
						<h2>It's your efforts & donations that run Ecojustice</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
						<a href="" class="button">Get Involved</a> <a href="" class="button">Donate</a>
					</div>
				</div>
			</div>
		</section>
		
	<?php endwhile; ?>
		

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
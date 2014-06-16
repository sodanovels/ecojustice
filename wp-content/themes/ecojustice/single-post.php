<?php
/**
 * The Template for displaying all single posts
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
<section class="hero ambient" style="background-image:url(<?=$image[0]?>);"></section>

<article>
	<div class="wrapper">
		
		<h1><?php the_title(); ?></h1>
		<hr>
		<div class="row quad">
			<div class="col wider">	
				<small style="float: right; text-transform: uppercase; margin-top: 14px;"><a href=""><span class="icon-facebook"></span><span class="icon-twitter"></span> Share</a></small>
				<hr>
				
				<?php the_content(); ?>			
	
			</div>
			<div class="col hide-phone">
			<h3>Show Posts Related To:</h3>
			
		</div>
	</div>
</article>

<?php endwhile; ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
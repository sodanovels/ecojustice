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
<section class="cluster" style="margin-bottom: 44px">
	<div class="panel e" 	
	<?php if ( get_field('image') ) : ?>
		style="background-image:url(<?php the_field('image'); ?>);">
	<?php else : ?>
		style="background-image:url(<?php echo (get_stylesheet_directory_uri() . "/images/placeholder.01.jpg"); ?>);">
	<?php endif; ?>
	</div>
	<div class="panel e" 
	<?php if ( get_field('image_funny') ) : ?>
		style="background-image:url(<?php the_field('image_funny'); ?>);">
	<?php else : ?>
		style="background-image:url(<?php echo (get_stylesheet_directory_uri() . "/images/placeholder.01.jpg"); ?>);">
	<?php endif; ?>
	</div>

	<div class="panel f">
		<div>
			<h1><?php the_field('name'); ?></h1>
			<h2>Ecojustice, <?php the_field('role'); ?></h2>
			<hr>
			<?php if ( get_field('twitter') ) : ?>
				<h5><span class="icon-twitter"></span> <a href="https://twitter.com/<?php the_field('twitter'); ?>"><?php the_field('twitter'); ?></a></h5>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="primary">
	<div class="wrapper">
		<div class="row">
			<div class="col">	
				<h3><?php the_excerpt(); ?> </h3>
				<blockquote><?php the_field('title_quote'); ?></blockquote>
				<?php the_field('description'); ?>
				<hr>
				<a href="" class="button"><span class="icon-facebook"></span><span class="icon-twitter"></span> Share</a>&nbsp;&nbsp;
				<small>Last updated: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small>
			</div>
		</div>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
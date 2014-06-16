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

<section class="hero ambient"
	<?php Starkers_Utilities::get_template_parts( array('parts/backgrounds/inline-style') ); ?>
</section>

<article>
	<div class="wrapper">
		
		<h1><?php the_title(); ?></h1>
		<h3><?php the_field('client_name'); ?> vs. <?php the_field('plaintiff_name'); ?></h3>
		<hr>
		<div class="row quad">
			<div class="col wider">	
				<small style="float: right; text-transform: uppercase; margin-top: 14px;"><a href=""><span class="icon-facebook"></span><span class="icon-twitter"></span> Share</a></small>
				<h3>Case Summary</h3>
				<hr>
				
				<?php the_content(); ?>			
	
			</div>
			<div class="col hide-phone">
			<h3>Team</h3>
			<hr>
			<div class="row team">
				<div class="col">
					<img src="https://s3.amazonaws.com/uifaces/faces/twitter/leemunroe/128.jpg">
					<a href="">Joe Smith</a><br>
					Lawyer
				</div>
				<div class="col">
					<img src="https://s3.amazonaws.com/uifaces/faces/twitter/leemunroe/128.jpg">
					<a href="">Joe Smith</a><br>
					Lawyer
				</div>
			</div>
		</div>
	</div>
</article>

<?php endwhile; ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
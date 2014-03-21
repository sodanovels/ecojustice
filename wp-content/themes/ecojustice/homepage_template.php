<?php
/*
Template Name: Home Page Template
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

			
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<?php if (has_post_thumbnail( $post->ID )) : ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			
		<?php endif; ?>
		
		<section>
			<div class="wrapper">
				<section class="hero alt closer" style="background-image: url(<?=$image[0]?>); background-position: 50% 50%">
					<div class="wrapper">
						
						<div class="row">
							<div class="col">
								<h1>Canada's leading charity using the law to protect and restore the environment.</h1>
								<h2>We deliver justice for the environment by enforcing and strengthening existing laws.</h2>
								<hr>
								<h1>Donate Today</h1>
								<h3>Your donations make a difference.</h3>
								<a href="" class="button">Monthly Donation</a>
								<a href="" class="button">One-Time Donation</a>
								<br><br>
								<h5><a href="">Learn more about supporting us</a></h5>
							</div>
						</div>
					</div>
				</section>
				
								<div class="row quad">
					<div class="col wider">	
						<?php the_content(); ?>
					
					</div>
					<div class="col">
						<h4>Hi! I am a sidebar.</h4>
					</div>
				</div>
			</div>
		</section>
		
		
		
	<?php endwhile; ?>
		

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
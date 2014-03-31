<?php
/*
Template Name: Issues Main Template
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

			
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<?php if (has_post_thumbnail( $post->ID )) : ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			
		<?php endif; ?>
		
		<section class="hero alt closer" style="background-image: url(<?=$image[0]?>);margin-bottom: 44px;">
	<div class="wrapper">
		
		<div class="row">
			<div class="col">	
			<?php 
			$people = get_post_custom_values('Wildlife');
			echo $people[0];
			
			?>
			</div>
			<div class="col">
				<div class="carousel slider">
					<div class="slides">
						<div>
					<?php $recent = new WP_Query("cat=11&showposts=3"); while($recent->have_posts()) : $recent->the_post(); //Change the cat arg to whatever ID makes sense...
					if (has_post_thumbnail( $post->ID )) : //This keeps posts without a featured image from showing up in the slider
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						
							<div class="pane" style="background-image: url(<?=$image[0]?>);">
								<div>
									<div class="flag">Related News</div>
									<div class="desc">
										<h4><?php the_title(); ?> <?php the_excerpt(); ?></h4>
										<a href="<?php the_permalink(); ?>">Read Story</a>
									</div>
								</div>
							</div>
						
						<?php
						endif;
						endwhile;
						wp_reset_postdata();
						?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="wrapper">
	<div class="row">
		<div class="col wider">	
			<?php 
			$people = get_post_custom_values('People');
			echo $people[0];
			
			?>
			
		</div>
		<div class="col">	
			<?php 
			$climate = get_post_custom_values('Climate');
			echo $climate[0];
			?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<hr>
			<h3>Related News</h3>
			<ul class="options alt">
				<!--Replace all of this with the same catagory grabbing title and links. Proably a people/climate cat for each section...?-->
				<li><a href="">It's up to us. Go green with your music, urges Canadian musician</a></li>
				<li><a href="">Excepteur sint occaecat cupidatat non proiden.</a></li>
				<li><a href="">Occaecat cupidatat non proiden sint ecxpetuer laboris nisi ut alquip.</a></li>
				<li><a href="">It's up to us. Go green with your music, urges Canadian musician</a></li>
				<li><a href="">Occaecat cupidatat non proiden sint ecxpetuer laboris nisi ut alquip.</a></li>
			</ul>
		</div>
		<div class="col">
			<hr>
			<h3>Related News</h3>
			
			<ul class="options alt">
				<li><a href="">It's up to us. Go green with your music, urges Canadian musician</a></li>
				<li><a href="">Excepteur sint occaecat cupidatat non proiden.</a></li>
				<li><a href="">Occaecat cupidatat non proiden sint ecxpetuer laboris nisi ut alquip.</a></li>
				<li><a href="">It's up to us. Go green with your music, urges Canadian musician</a></li>
				<li><a href="">Occaecat cupidatat non proiden sint ecxpetuer laboris nisi ut alquip.</a></li>
			</ul>
		</div>
	</div>
</div>		
		
		
	<?php endwhile; ?>
		

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
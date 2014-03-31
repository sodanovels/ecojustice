<?php
/*
Template Name: Issues Interior Template
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
			$headerText = get_post_custom_values('Header');
			echo $headerText[0];
			?>
			</div>
			
		</div>
	</div>
</section>
<section>
	<div class="wrapper">
		<h1>Our Victories</h1>
		<div class="row">
			<?php the_content(); ?>
		</div>
		<hr>
		<div class="grid">
			
			<?php
			$recent = new WP_Query("cat=13&showposts=3"); while($recent->have_posts()) : $recent->the_post(); //Change the cat arg to whatever ID makes sense...	
			if (has_post_thumbnail( $post->ID )) : //This keeps posts without a featured image from showing up in the slider
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<div class="item">		
				<div class="flag">
				<?php 
				$flagStatus = get_post_custom_values('Status');
				echo $flagStatus[0];
				?>
				</div>
				<div>
					<a href="<?php the_permalink(); ?>"><div class="media" style="background-image: url(<?=$image[0]?>);"></div></a>
					
					<div class="meta"><?php $category = get_the_category(); 
echo $category[0]->cat_name;?></div>
					
					<div class="desc">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php the_excerpt(); ?></a>
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
</section>
		
		
	<?php endwhile; ?>
		

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
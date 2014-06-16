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
	<section class="hero alt" style="background-image: url(<?=$image[0]?>);">
		<div class="wrapper">
			<div class="row quad">
				<div class="col wider">
					<h1>Canada’s leading charity using the law to protect and restore the environment.</h1>
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
	
<?php endwhile; ?>
<div class="wrapper">
	<section class="ix">
		<ul>
			<li class="on"><a href=""><span class="icon-doc-text-inv"></span> Blog</a></li>
			<li><a href=""><span class="icon-box"></span> Cases</a></li>
			<li><a href=""><span class="icon-hammer"></span> Action</a></li>
		</ul>
	</section>
	<section class="grid">
		<?php 
			$sticky = get_option( 'sticky_posts' );
			$args = array(
				'posts_per_page' => 5,
				'post__in'  => $sticky,
				'ignore_sticky_posts' => 1
			);
			$wp_query = new WP_Query( $args );
			
		?>
		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
		<a href="<?php echo get_permalink($post->ID); ?>" class="item">
			<div>
				<div class="flag">Featured</div>
				<div class="media" style="background-image: url(
					<?php if (has_post_thumbnail( $post->ID )) : ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>			
						<?=$image[0]?>
					<?php endif; ?>
				);"></div>
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
		<?php 
			$args = array(
				'posts_per_page'	=> 15,
				'post__not_in' => get_option( 'sticky_posts' ) 
			);
			$wp_query = new WP_Query( $args );
		?>
		<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
		<a href="<?php echo get_permalink($post->ID); ?>" class="item">
			<div>
				<div class="media" style="background-image: url(
					<?php if (has_post_thumbnail( $post->ID )) : ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>			
						<?=$image[0]?>
					<?php endif; ?>
				);"></div>
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
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
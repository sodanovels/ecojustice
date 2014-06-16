<a href="<?php echo get_permalink($post->ID); ?>" class="tile"
	<?php Starkers_Utilities::get_template_parts( array('parts/backgrounds/inline-style') ); ?>
	
	<div><div class="desc"><h5><?php the_field('name'); ?><br><span><?php the_field('role'); ?></span></h5></div></div>
	<ol data-ref="#modal" class="modal-trigger"><li><span data-ref="#modal" class="toggler">quick view</span></li><li><span>full bio</span></li></ol>
</a>	
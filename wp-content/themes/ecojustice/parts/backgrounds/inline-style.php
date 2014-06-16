<?php if ( get_field('image') ) : ?>
	style="background-image:url(<?php the_field('image'); ?>);">
<?php else : ?>
	style="background-image:url(<?php echo (get_stylesheet_directory_uri() . "/images/placeholder.01.jpg"); ?>);">
<?php endif; ?>
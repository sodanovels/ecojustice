<?php
	if (get_field('title')) :
		the_field('title');
	else :
		the_title();
	endif;
?>
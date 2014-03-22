<?php	
/**
 * Ecojustice
 * clean HTML menu
 *
 */
$defaults = array(
	'theme_location'  => '',
	'menu'            => 'action',
	'container'       => false,
	'container_class' => false,
	'container_id'    => false,
	'menu_class'      => 'action',
	'menu_id'         => false,
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="action">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
?>
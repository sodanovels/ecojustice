<?php	
/**
 * Ecojustice
 * clean HTML menu
 *
 */
$defaults = array(
	'theme_location'  => '',
	'menu'            => 'footer-major',
	'container'       => 'nav',
	'container_class' => false,
	'container_id'    => false,
	'menu_class'      => 'major',
	'menu_id'         => false,
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="major">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
?>
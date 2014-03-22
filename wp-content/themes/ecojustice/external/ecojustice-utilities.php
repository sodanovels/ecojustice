<?php
	/**
	 * Ecojustice_Utilities
	 * @jessekorzan
	 *
	 * v.0.1
	 *
	 * functions specific to Ecojustice theme & site features
	 * built ontop of the Starkers theme
	 * https://github.com/viewportindustries/starkers
	 *
	 */
	
	nocache_headers();
	
	/* ========================================================================================================================
	
	Ecojustice Breadcrumb
	@jessekorzan
	
	clean HTML breadcrumb (simple list, match CSS classname "breadcrumb")
	
	======================================================================================================================== */
	
	function ecojustice_breadcrumb() {
	    global $post;
	    /* our breadcrumb class ul */
	    echo '<ul class="breadcrumb">';
	    if (!is_home()) {
	        echo '<li><a href="'.get_option('home').'">Home</a></li>';
	        if (is_category() || is_single()) {
	            echo '<li>';
	            the_category(' </li><li> ');
	            if (is_single()) {
	                echo '</li><li>';
	                the_title();
	                echo '</li>';
	            }
	        } elseif (is_page()) {
	            if($post->post_parent){
	                $anc = get_post_ancestors( $post->ID );
	                $title = get_the_title();
	                foreach ( $anc as $ancestor ) {
	                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>' .$output;
	                }
	                echo $output;
	                echo '<li><a href="' .get_permalink($post->ID). '">'.$title.'</a></li>';
	            } else {
	                echo '<li><a href="' .get_permalink($post->ID). '">';
	                echo the_title();
	                echo '</a></li>';
	            }
	        }
	    }
	    /* we're going to need these? formatting needs to change to match CSS */
	    
	    /* 
		    elseif (is_tag()) {single_tag_title();}
		    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
		    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
		    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
		    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
		    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
		    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	    */
	    echo '</ul>';
	}
?>
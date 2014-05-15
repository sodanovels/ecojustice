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
	
	/*
	 *	Phase should equal "1","2","3" or it will return the default (blank) dashboard
	 *	Status is a string for the little tooltip on the dashboard.
	 *	Example syntax in wordpress post: [case_status phase="3" status="Victory!!"]
	 *	Todo: Currently I'm using an inline style overwrite, but it would be good if a/b/c classes could be status classes and not structure/styling (or split into two diffrent classes)
	 *	Also... should the tooltip move over as well on the diffrent statuses?
	 */
	function case_status_dashboard( $atts ) {
	extract( shortcode_atts( array(
		'phase' => '',
		'status' => '',
	), $atts ) );
	echo '<div class="dashboard">
	    <div class="status"><h2><span>Status</span>'.$status.'</h2></div>';
	
	switch($phase){
	    case '1':
		echo '<div class="stage a">In Progress</div>
	    <div class="stage b">Victory</div>
	    <div class="stage c">Closed</div>';
	    break;
	
	    case '2':
		echo '<div class="stage a">In Progress</div>
	    <div class="stage b" style="background-color:#bad80a">Victory</div>
	    <div class="stage c">Closed</div>';
	    break;
	
	    case '3':
		echo '<div class="stage a">In Progress</div>
	    <div class="stage b" style="background-color:#bad80a">Victory</div>
	    <div class="stage c" style="background-color:#bad80a">Closed</div>';
	    break;
		
	    default:
		echo 'Shit went wrong, nothing to see here';
		
	}
	
	echo '<a href="#ref" data-ref="#ref" class="toggler trigger"></a>
	</div>';  

	echo '<div id="ref" class="togglee">
			<div class="row">
				<div class="col">
					<h4>Status Note</h4>
					<p>	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				</div>
				<div class="col">
					<h4>Progress Levels Description</h4>
					<p>	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				</div>
			</div>
		</div>';
	}// End of case_status_dashboard
?>
	<div class="viewport">
		<a href="#menu" class="menu" data-use="nvp">menu</a>
		<nav id="menu" role="navigation">
			<div class="wrapper">
				<div class="logo hide-phone"><a href="<!-- @path home/index.html -->">Ecojustice</a></div>
				
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
				
				<ul class="action">
					<li><a href=""><span class="icon-search"></span></a>
						<?php #get_search_form(); ?>
					</li>
					<li class="cta"><a href="">Subscribe</a></li>
					<li class="cta"><a href="">Get Involved</a></li>
					<li class="cta"><a href="<!-- @path donate/index.html -->">Donate</a></li>
				</ul>
			</div>
		</nav>		
		<div class="main">
			<div class="masthead show-phone">
				<div class="logo show-phone"><a href="<!-- @path home/index.html -->">Ecojustice</a></div>
			</div>
			<section class="title">
				<div class="wrapper">
					
					<?php if(function_exists('bcn_display'))
					{
					    bcn_display();
					}?>	
					
				</div>
			</section>
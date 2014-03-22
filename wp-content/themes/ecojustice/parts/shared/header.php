	<div class="viewport">
		<a href="#menu" class="menu" data-use="nvp">menu</a>
		<nav id="menu" role="navigation">
			<div class="wrapper">
				<div class="logo hide-phone"><a href="<?php echo get_option('home') ?>">Ecojustice</a></div>
					<?php Starkers_Utilities::get_template_parts( array( 'parts/menus/header-global', 'parts/menus/header-action' ) ); ?>
					<!--
<li><a href=""><span class="icon-search"></span></a>
						<?php #get_search_form(); ?>
					</li>
-->

			</div>
		</nav>		
		<div class="main">
			<div class="masthead show-phone">
				<div class="logo show-phone"><a href="<?php echo get_option('home') ?>">Ecojustice</a></div>
			</div>
			<section class="title">
				<div class="wrapper">
					<?php ecojustice_breadcrumb(); ?>
				</div>
			</section>
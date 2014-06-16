	<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
			
<section class="hero alt" style="background-image: url(<!-- @path Twigingrass.jpg -->);">
	<div class="wrapper">
		<div class="row">
			<div class="col">
				<h1>Who We Are</h1>
				<h2>We are passionate lawyers and scientists using the power of the law to protect and restore Canada's environment.</h2>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
			</div>
			<div class="col">
				<div class="flex-video widescreen vimeo">
					<iframe src="//player.vimeo.com/video/56128627?badge=0&amp;byline=0&amp;portrait=0&amp;title=0&amp;color=BAD80A&amp;loop=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cluster" style="margin-bottom: 0px">
	<div class="pane">
		<div class="panel donate a" style="background-image: url();">
			<div><h1>What We Do</h1>
			<h2>Delor regisil et delitor ad emphaticus.</h2>

			</div>
		</div>
	</div>
	<div class="pane">
		<div class="panel c hide-phone" style="background-image: url(<!-- @path 10578164144_d75633b1b6_b.jpg -->);">
			<div>
				<div class="flag">People &amp; Health</div>
			</div>
		</div>
		<div class="panel c hide-phone" style="background-image: url(<!-- @path 3173253027_f713941660_b.jpg -->);">
			<div>
				<div class="flag">Climate &amp; Energy</div>
			</div>
		</div>
		<div class="panel b donate">
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
	<div class="pane full">
		<div class="panel hide-phone" style="background-image: url(<!-- @path Groundhog.JPG -->);">
			<div>
				<div class="flag">Wilderness &amp; Wildlife</div>
			</div>
		</div>
		
	</div>
</section>
<section class="hero" style="margin-top: 44px;">
	<div class="wrapper">
		
		<div class="row quad">
			<div class="col wide">
				<h1>How We Do It</h1>
				<h2>Ecojustice provides legal services free-of-charge to charities and citizens on the front lines of the environmental movement, helping ensure equitable access to environmental justice nationwide.</h2>
			</div>
			<div class="col">
				<img src="<!-- @path 4431597154_88d3cfaba2_b.jpg -->">
				<p>We advocate for effective laws, use the courts to make sure they are implemented and enforced, and give a voice to Canadians in decisions that affect the air, water and land we all depend on.</p>
			</div>
			<div class="col">
				<img src="<!-- @path 3937879256_320d90bc1a_b.jpg -->">
				<p>We advocate for effective laws, use the courts to make sure they are implemented and enforced, and give a voice to Canadians in decisions that affect the air, water and land we all depend on.</p>
			</div>
		</div>
	</div>
</section>
<hr>
<section class="hero">
	<div class="wrapper">
		<h1>How We're Winning</h1>
		<h2>Delor regisil et delitor ad emphaticus.</h2>
		<div class="row quad">
			<div class="col wider">
				
				<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
			</div>
			<div class="col">
				<a href="" class="button">See Our Victories</a>
			</div>
		</div>
		<hr>
		<div class="grid">
			<div class="item">
				<div class="flag">victory</div>
				<div>
					<div class="media" style="background-image: url(<!-- @path 493522694_3055509313_o.jpg -->);"></div>
					<div class="meta">People &amp; Health</div>
					<div class="desc">
						Say no to Enbridge's Line 9B pipeline and yes to a healthy, renewable energy future for Canada
					</div>
				</div>
			</div>
			<div class="item">
				<div class="flag">victory</div>
				<div>
					<div class="media" style="background-image: url(<!-- @path o-HIGHEST-PAID-CEOS-CANADA-facebook.jpg -->);"></div>
					<div class="meta">CLIMATE & ENERGY</div>
					<div class="desc">
						Say no to Enbridge's Line 9B pipeline and yes to a healthy, renewable energy future for Canada
					</div>
				</div>
			</div>
			<div class="item">
				<div class="flag">victory</div>
				<div>
					<div class="media" style="background-image: url(<!-- @path Lakeandmarsh3.jpg -->);"></div>
					<div class="meta">WILDLIFE & WILDERNESS</div>
					<div class="desc">
						Say no to Enbridge's Line 9B pipeline and yes to a healthy, renewable energy future for Canada
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="hero alt closer" style="background-image: url(<!-- @path Streakingsky.jpg -->); background-position: 50% 5    0%">
	<div class="wrapper">
		
		<div class="row">
			<div class="col">
				<h1>How You Can Help</h1>
				<h2>It's your efforts & donations that run Ecojustice</h2>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
				<a href="" class="button">Get Involved</a> <a href="" class="button">Donate</a>
			</div>
		</div>
	</div>
</section>
		

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
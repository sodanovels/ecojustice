<?php
/*
Template Name: Donate Template
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

			
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<?php if (has_post_thumbnail( $post->ID )) : ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			
		<?php endif; ?>
<section class="hero alt closer" style="background-image: url(<?=$image[0]?>);margin-bottom: 44px;">
	<div class="wrapper">
		<div class="row quad">
			<div class="col wider">
				<?php 
				$headerText = get_post_custom_values('Header');
				echo $headerText[0];
				?>
			</div>
		</div>
		
		<div class="row">
			<div class="col">
				<hr>
				<h5>Monthly Membership</h5>
				<h2>Become a Defenders Club Member</h2>
				
				<div class="box">
					<h3>Select your monthly donation to help support our programs:</h3>
					<form class="alt" style="margin-top:22px">
						<input type="radio" name="donate" id="donation1">
							<label for="donation1">$10</label>
						<input type="radio" name="donate" id="donation2">
							<label for="donation2">$15</label>
						<input type="radio" name="donate" id="donation3">
							<label for="donation3">$20</label>
						<input type="radio" name="donate" id="donation4">
							<label for="donation4">$42</label>
						<input type="radio" name="donate" id="donation5">
							<label for="donation5">$50</label>
						<input type="radio" name="donate" id="donation6">
							<label for="donation6">$83</label>
						
						<h4 style="margin-top: 22px; clear: both; float: left;">Other: <input type="text" placeholder="$" style="width: 100px;"></h4>
						<hr>
						<a href="" class="button">Dontate Now</a>
					</form>
				</div>
			</div>
			<div class="col">
				<hr>
				<h5>Donate Now</h5>
				<h2>Make a One-Time Gift Donation</h2>
				<div class="box">
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</h3>
					<form class="alt" style="margin-top:22px">
						<input type="radio" name="donate" id="donation2-1">
							<label for="donation2-1">$50</label>
						<input type="radio" name="donate" id="donation2-2">
							<label for="donation2-2">$100</label>
						<input type="radio" name="donate" id="donation2-3">
							<label for="donation2-3">$250</label>
						<input type="radio" name="donate" id="donation2-4">
							<label for="donation2-4">$500</label>
						<input type="radio" name="donate" id="donation2-5">
							<label for="donation2-5">$1,000</label>
						<input type="radio" name="donate" id="donation2-6">
							<label for="donation2-6">$2,500</label>
						
						<h4 style="margin-top: 22px; clear: both; float: left;">Other: <input type="text" placeholder="$" style="width: 100px;"></h4>
						<hr>
						<a href="" class="button">Dontate Now</a>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="wrapper">
		<div class="grid">
			<div class="col wider">
				<?php the_content(); ?>	
				
				<hr>
				<div class="row">
					<div class="col">
						<h1><span class="icon-doc-text-inv"></span></h1>
						<?php 
						$benefit_1 = get_post_custom_values('Benefit-1');
						echo $benefit_1[0];
						?>
						
					</div>
					<div class="col">
						<h1><span class="icon-box"></span></h1>
						<?php 
						$benefit_2 = get_post_custom_values('Benefit-2');
						echo $benefit_2[0];
						?>
					</div>	
					<div class="col">
						<h1><span class="icon-hammer"></span></h1>
						<?php 
						$benefit_3 = get_post_custom_values('Benefit-3');
						echo $benefit_3[0];
						?>
					</div>	
				</div>
				<hr>
				<h4><a href="">Contact us</a> about becoming a Defenders Club Member</h4>
			</div>
			<div class="item">
				<!-- This whole section should populate from a "people/staff" catagory listing, should proably be a random person? If it's not, we can hard code the value for them and still pull it in dynamicly -->
				<div class="flag">Defenders Club Member</div>
				<div>
					<div class="media" style="background-image: url(../_common/assets/images/fpo/3937879256_320d90bc1a_b.jpg);"></div>
					<div class="meta">Joe Smith, Supporter</div>
					<div class="desc">
						This whole section should populate from a "people/staff" catagory listing, should proably be a random person? If it's not, we can hard code the value for them and still pull it in dynamicly Lorem ipsum dolor sit amet, consectetur adipisicing."
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr>
<section>
	
	<div class="wrapper">
		<div class="row tri">
			<div class="col wide">
				<h2>Need help with donor related questions?</h2>
				<hr>
				<div class="row quad">
					<div class="col team">
						<div class="col">
						<img src="../_common/assets/images/headshots/240-bizwoman.jpg">
						<a href="">Cathy Acuna</a><br>
						Staff
						</div>
					</div>
					<div class="col wider">
						<h3><a href="">Cathy Acuna</a><br>
						Donor Relations Coordinator</h3>
						<h5>1-800-926-7744 Ext. 249</h5>
						<p>This one might need to be selectable, maybe from a dropdown of staff, incase it needs to be regularly changed? If not, we can treat it the same the above one.</p>
					</div>
				</div>
				<hr>
				<h3>Mail Donations</h3>
				<h5>Payable to: Ecojustice<br>
				214-131 Water Street<br>
				Vancouver, B.C.<br>
				V6B 4M3</h5>
			</div>
			<div class="col">
				
			
			</div>
			<div class="col">
				
				<div class="supplements">
				<h3>Other Ways You Can Support Ecojustice</h3>
				<hr>
				<ul class="options">
					<li><a href="">Tribute Giving</a></li>
					<li><a href="">Legacy Giving</a></li>
					<li><a href="">Stocks &amp; Securities</a></li>
					<li><a href="">Workplace Matching</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
</section>
		

	
		
	<?php endwhile; ?>
		

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
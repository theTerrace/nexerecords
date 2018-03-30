<?php
	use Roots\Sage\Titles;
 ?>
<div class="row">
	<!-- Slider main container -->
	<!-- TO DO -->
 	<div id="sq" style="width: 100px; height: 100px; background-color: red"></div>
</div>

<div class="row">
	
	<div class="archive col-12">
		
		<h1><?= Titles\title(); ?></h1>

		<?php if(have_posts()): ?>
			
			<div class="row">							

				<?php while(have_posts()): the_post(); ?>
				
					<div class="col-md-4">

						<?php get_template_part('templates/content') ?>
				
					</div>

				<?php endwhile; ?> 
			
			</div>

		<?php endif; ?>
	</div>

</div>
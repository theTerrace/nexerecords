<?php 
	
	$collection = new WP_Query(array(
		'posts_per_page' => 4,
		'order' => 'DESC'
	));

	$postsThree = $collection->posts; 

 ?>
<div class="row">
	<!-- Slider main container -->
	<!-- TO DO -->
 
</div>

<div class="row">
	
	<div class="archive col-md-12">
		
		<?php if(have_posts()): ?>
			
			<div class="row">
				
				<?php while(have_posts()): the_post(); ?>
				
					<div class="col-md-4 col-sm-6 col-xs-12">

						<?php get_template_part('templates/content') ?>
				
					</div>

				<?php endwhile; ?> 
			
			</div>

		<?php endif; ?>
	</div>

</div>
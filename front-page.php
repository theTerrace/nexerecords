<?php 
	
	$collection = new WP_Query(array(
		'posts_per_page' => 4,
		'order' => 'DESC'
	));

	$postsThree = $collection->posts; 

 ?>
<div class="row">
	<!-- Slider main container -->
	<div class="swiper-container">
		<!-- Additional required wrapper -->
		<?php if( $postsThree ): ?>

			<div class="swiper-wrapper">
				<!-- Slides -->
				<?php foreach( $postsThree as $postThree ): ?>

					<div class="swiper-slide">
						
						<a class="inner-swiper" href="<?php echo get_the_permalink($postThree->ID)?>"
						style="background-image: url(<?php echo get_the_post_thumbnail_url($postThree->ID); ?>);">
						
						</a>
					
					</div>

				<?php endforeach; ?>

			</div>

		<?php endif; ?>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

	</div>
 
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
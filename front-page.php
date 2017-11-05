<?php 
	
	$collection = new WP_Query(array(
		'posts_per_page' => 3,
		'order' => 'DESC'
	));

	$postsThree = $collection->posts; 

 ?>
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <?php if( $postsThree ): ?>
	    <div class="swiper-wrapper">
	        <!-- Slides -->
	        <?php foreach( $postsThree as $postThree ): ?>

		        <div class="swiper-slide">
		        	<a href="<?php echo get_the_permalink($postThree->ID)?>">
		        	<?php echo get_the_post_thumbnail( $postThree->ID, 'medium') ?>
		        	</a>
		        </div>
		        
	        <?php endforeach; ?>
	    </div>
	<?php endif; ?>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>


<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
	<?php get_template_part('templates/content') ?>

<?php endwhile;endif; ?>
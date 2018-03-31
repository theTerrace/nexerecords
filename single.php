<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php get_template_part('templates/content-single', get_post_type()); ?>

<?php endwhile; endif; ?>

<!-- TO DO NEXT PREV -->
<div class="container">
<section class="row prev-next-container 
	<?php if(! $prev_post = get_previous_post()): echo 'its-first'; else: '' ; endif; ?> ">
	
	<?php if($prev_post = get_previous_post()): ?>

		<div class="col-6 prev-next-wrapper">
			
			
			
				<div class="post-navigator its-prev">
							
					<p class="title-prev">
					<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
					< <?php echo esc_attr( $prev_post->post_title ); ?>
					</a>
					</p>					
							
				</div>
			
			
		
		</div>
	
	<?php endif; ?>
	
	<?php if($next_post = get_next_post()): ?>

		<div class="col-6 prev-next-wrapper">
			
			
			
				<div class="post-navigator its-next">
																	
					<p class="title-next">
						
					<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"> <?php echo esc_attr( $next_post->post_title ); ?> ></a>
					
</p>
				
				</div>
			
			
		
		</div>

	<?php endif; ?>
	    	
</section>
</div>
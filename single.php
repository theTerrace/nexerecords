<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php get_template_part('templates/content-single', get_post_type()); ?>

<?php endwhile; endif; ?>

<!-- TO DO NEXT PREV -->

<section class="row mt-5 prev-next-container 
	<?php if(! $prev_post = get_previous_post()): echo 'its-first'; else: '' ; endif; ?> mb-5">
	
	<?php if($prev_post = get_previous_post()): ?>

		<div class="col-6 prev-next-wrapper">
			
			<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
			
				<div class="post-navigator its-prev">
							
					<span class="title-prev">
						
						<h4><?php echo esc_attr( $prev_post->post_title ); ?></h4>

					</span>					
							
				</div>
			
			</a>
		
		</div>
	
	<?php endif; ?>
	
	<?php if($next_post = get_next_post()): ?>

		<div class="col-6 prev-next-wrapper">
			
			<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
			
				<div class="post-navigator its-next">
																	
					<span class="title-next">
						
						<h4><?php echo esc_attr( $next_post->post_title ); ?></h4>
					
					</span>
				
				</div>
			
			</a>
		
		</div>

	<?php endif; ?>
	    	
</section>

<div class="archive">

	<?php if (have_posts()): //Going through the collection of Artists ?>

	<div class="row">

		<?php while(have_posts()): the_post(); ?>			
		
		<div style="background-color: yellow;" class="mx-1 my-1 col-12 col-md-3">
						
			<?php get_template_part( 'templates/content-archive') ?>
		
		</div>
		
		<?php endwhile; else: ?>	
		
			<h2>No posts found</h2>

	</div>
	
	<?php endif; ?> 

</div>
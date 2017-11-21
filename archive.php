<?php use Roots\Sage\Titles; ?>

<div class="archive col-md-12">

	<h1><?= Titles\title(); //esta funcion es de sage y la he editado para que no me muestre esto "Archive: Title" ?></h1> 

	<?php if (have_posts()): //Going through the collection of Artists ?>

	<div class="row">

		<?php while(have_posts()): the_post(); ?>			
		
		<div class="col-md-4 col-12">
						
			<?php get_template_part( 'templates/content-archive') ?>
		
		</div>
		
		<?php endwhile; else: ?>	
		
			<h2>No posts found</h2>

	</div>
	
	<?php endif; ?> 

</div>
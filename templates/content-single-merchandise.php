<section id="post-artist-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="col-md-6">		
		<h1 class="merchandise-name">
			<?php the_title(); ?>	
		</h1>

		<div class="image-wrapper">
			<?php the_post_thumbnail('', array('class'=>'image-single')) ?>
		</div>
	</div>

	<div class="col-md-6">
		<div class="info-single">
			<?php the_content(); ?>
		</div>
	</div>
</section>

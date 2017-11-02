<div class="row">
	<div class="col-12">	
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content-single', get_post_type()); ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<article <?php post_class()?>>		

	<a href="<?php the_permalink(); ?>">
		<div class="thumbnail cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		<h3 class="box-title"><?php the_title(); ?></h3>
		</div>

		
	</a>
</article>



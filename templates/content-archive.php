<article <?php post_class()?>>		

	<a href="<?php the_permalink(); ?>">
		<div class="thumbnail">

			<?php the_post_thumbnail('thumbnail'); ?>
			
		</div>

		<h2><?php the_title(); ?></h2>
	</a>
</article>



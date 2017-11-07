<article <?php post_class()?>>		

	<a href="<?php the_permalink(); ?>">
		
		<div class="thumbnail cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			
			<h3 class="box-title"><?php the_title(); ?></h3>
			
			<?php if (is_post_type_archive( 'release' )) : ?>				
				<?php //TODO -> Edgar ?>
			<?php endif; ?>
		</div>	
	
	</a>
</article>



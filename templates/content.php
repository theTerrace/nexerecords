<article <?php post_class(); ?>>
		
	<a href="<?php the_field('link_noticia'); ?>"  target="_blank"><?php //aqui esta el problema en news. ?>
		
		<div class="thumbnail cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			
			<div class="inner-info">
		
				<a class="inner-info-title" href="<?php the_permalink(); ?>">
					
					<h3><?php the_title(); ?></h3>
				
				</a>
		
			</div>

		</div>					

	</a>

</article>
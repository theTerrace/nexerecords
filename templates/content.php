<article <?php post_class(); ?>>
		
		<div class="thumbnail cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			
			<div class="inner-info">
		
				<a class="inner-info-title" href="<?php (get_field("new")=="ext"? the_field("link_noticia"):the_permalink() ) ?>" target="<?php echo (get_field("new")=="ext"? "_blank" : "_self")?>">
					
					<h3><?php the_title(); ?></h3>
				
				</a>
		
			</div>

		</div>

</article>
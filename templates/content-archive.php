<article <?php post_class()?>>				

	<div class="thumbnail cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		
		<div class="inner-info">
		
			<a class="inner-info-title" href="<?php the_permalink(); ?>">
			
				<h3 class="<?php if (is_post_type_archive('release')) echo 'upper-info-title';?>" ><?php the_title(); ?></h3>
			
			</a>

			<?php if (is_post_type_archive('release')) : ?>	

				<hr class="separator"/>

				<div class="info-top-link-wrapper">

				<?php 
					
					$artists = get_field('artists');

					foreach( $artists as $artist ): // variable must be called $post (IMPORTANT) ?>			    				 			        	
						<a class="info-top-link" href="<?= get_the_permalink($artist->ID); ?>">

							<?= get_the_title($artist->ID) ?>

						</a>

					<?php endforeach; ?>

					<?php wp_reset_postdata();?>

				</div>

			<?php endif; ?>
		
		</div>
	
	</div>		

</article>

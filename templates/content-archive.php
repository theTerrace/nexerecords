<article <?php post_class()?>>		

	
		
		<div class="thumbnail cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			<a href="<?php the_permalink(); ?>">
				<h3 class="box-title"><?php the_title(); ?></h3>
			</a>
			<?php if (is_post_type_archive('release')) : ?>	
			    <ul>
				    <?php setup_postdata($post); ?>
				    <?php foreach( get_field('artists') as $post): // variable must be called $post (IMPORTANT) ?>
			        <li>
			            <a href="<?= get_post_field(the_permalink(), get_the_id()); ?>"><?php the_title(); ?></a>
			        </li>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata();?>
			    </ul>

			<?php endif; ?>
		</div>	
	
</article>



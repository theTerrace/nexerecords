<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<a href="<?php the_permalink(); ?>">
		
		<h2><?php the_title() ?></h2>
		
	</a>
<?php endwhile;endif; ?>
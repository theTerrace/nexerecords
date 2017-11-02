<article id="post-artist-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		
		<h2><?php the_title(); ?></h2>
	</div>
	<div>
		<h4>The content</h4>
		<?php the_content(); ?>
	</div>
</article>


<h2 class="mt-5">Releases</h2>

<article>
	
	<?php 	
		
		//v2

		$args = array(
			'post_type' => 'release',
			'meta_query' => array(
				array(
					'key' => 'artists',
					'value' => '"'. get_the_id() .'"',
					'compare' => 'LIKE'
				),
			),
		);

		$collection = new WP_Query( $args ); //collection of data
		$releases = $collection->posts; //get posts from this collection of data
	
	?>
	

	<?php if( $releases ): ?>
		
		<ul>
		
		<?php foreach( $releases as $release ): ?>

			<li>
				<a href="<?php echo get_permalink( $release->ID ); ?>">					
					<?php echo get_the_title( $release->ID ); ?>
					<?php echo get_the_post_thumbnail( $release->ID, 'medium') ?>
				</a>
			</li>
		
		<?php  endforeach; ?>
	
		</ul>
	
	<?php endif; ?>



</article>
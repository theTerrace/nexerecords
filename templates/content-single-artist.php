<article id="post-artist-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
		
		<h2><?php the_title(); ?></h2>
	</div>
	<div>
		<h4>The content</h4>
		<?php the_content(); ?>
	</div>
</article>


<h3 class="mt-5">Releases</h3>

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
		
		<div class="archive col-md-12">

			<div class="row">
				
				<?php foreach( $releases as $release ): ?>
					<div class="col-md-4 col-sm-6 col-xs-12">

						<article <?php post_class()?>>		

							<a href="<?php echo get_permalink( $release->ID ); ?>">
								<div class="thumbnail cover" style="background-image: url(<?php echo get_the_post_thumbnail_url( $release->ID,'') ; ?>);">
								<h3 class="box-title"><?php echo get_the_title( $release->ID ); ?></h3>
								</div>	
							</a>
						</article>
					</div>
				
				<?php  endforeach; ?>
	
			</div>
		</div>
	
	<?php endif; ?>



</article>
<?php use Roots\Sage\Extras; ?>

<section id="post-artist-<?php the_ID(); ?>" <?php post_class('row'); ?>>					
	<div class="col-12">

		<h1 class="artist-name">
				
				<?php the_title() ?>

		</h1>

		<div class="artist-photo-wrapper">					
			
			<?php the_post_thumbnail('', array('class'=>'artist-cover-image')); ?>

		</div>

		<div class="social">
					
			<a class="fb" href="<?php the_field('link_fb'); ?>" target="_blank">
				
				<img
				src="http://nexerecords.dev/app/uploads/2017/11/Facebook.svg" />
			
			</a>	
		
			<a class="sc" href="<?php the_field('link_sc'); ?>" target="_blank">
				
				<img				
				src="http://nexerecords.dev/app/uploads/2017/11/Soundcloud.svg" />
			
			</a>	
			
			<a class="bc" href="<?php the_field('link_bc'); ?>" target="_blank">
				
				<img				
				src="http://nexerecords.dev/app/uploads/2017/11/Bandcamp.svg" />
				
			</a>	

		</div>

	</div>		

</section>

<section class="mt-5 row">

		<div class="bio-artist col-12">

			<?php the_content(); ?>

		</div>

</section>
	
	<br class="hidden-md-down">
	<hr class="hidden-md-up">

	<?php 	

		/*
		 *	GET RELEASES AND RELATED NEWS
		 */
		
		$releases = Extras\get_releases_by_artist(); //get the releases
		$relatedNews = Extras\get_related_news_by_artist(); //get the related news
	?>	
	
<?php if($releases || $relatedNews): ?>
		
	<h2><?php the_title(); ?>'s Stuff </h2>	

	<div class="row">
	
		<?php if($releases): ?>
		
			<div class="releases col-md-6 col-12">							
				
				<h4 class="text-left">Releases</h4>

				<hr>

				<section class="text-left">		

					<?php foreach( $releases as $release ): ?>										

						<a class="link" href="<?= get_the_permalink($release->ID); ?>">

							<p><?= get_the_title( $release->ID ); ?></p>
							
						</a>							
							
					<?php  endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</section>

			</div>
		
		<?php endif; ?>

		<?php  if($relatedNews): ?>
		
			<div class="relatedNews col-md-6 col-12">
				
				<h4 class="text-left">Related News</h4>

				<hr>

				<section class="text-left">

				<?php foreach( $relatedNews as $relatedNew ): ?>																				
					<a class="link" href="<?= get_the_permalink($relatedNew->ID); ?>">
							
						<p><?=get_the_title($relatedNew->ID); ?></p>
							
					</a>
				
				<?php  endforeach; ?>

				<?php wp_reset_postdata(); ?>

				</section>

			</div>	

		<?php endif; ?>
	</div>

<?php endif; ?>







				
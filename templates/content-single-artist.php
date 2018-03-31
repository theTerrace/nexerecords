<?php use Roots\Sage\Extras; 
	  use Roots\Sage\Assets;
?>
<div class="container">
	
<section class="row" id="post-artist-<?php the_ID(); ?>" >					
	<div class="col-12">

		<h1 class="artist-name">
				
				<?php the_title() ?>

		</h1>

		<div class="artist-photo-wrapper" style="background-image:url(<?php the_post_thumbnail_url(array(1110, 546)); ?>); background-repeat:no-repeat;background-size:cover">					
			

		</div>

		<div class="social">
					
			<a class="fb" href="<?php the_field('link_fb'); ?>" target="_blank">
				
			<i class="fa fa-facebook fa-2x fb-nexe" aria-hidden="true"></i>
			<p class="small">Facebook</p>
			
			</a>	
		
			<a class="sc" href="<?php the_field('link_sc'); ?>" target="_blank">
				
			<i class="fa fa-soundcloud fa-2x sc-nexe" aria-hidden="true"></i>
			<p class="small">Sound Cloud</p>
			</a>
			
			<a class="bc" href="<?php the_field('link_bc'); ?>" target="_blank">
				
			<i class="fa fa-bandcamp fa-2x bc-nexe" aria-hidden="true"></i>
			<p class="small">BandCamp</p>
			</a>	

		</div>

	</div>		

</section>

<section class="mt-5 row">
		<div class="col-md-6 bio"><h3>Biography</h3></div>
		<div class="bio-artist col-12">

			<?php the_field('bio'); ?>

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

							<i class="fa fa-bomb" aria-hidden="true"></i>
							<span><?= get_the_title( $release->ID ); ?></span>
							
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
						
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>	
						<span><?=get_the_title($relatedNew->ID); ?></span>
							
					</a>
				
				<?php  endforeach; ?>

				<?php wp_reset_postdata(); ?>

				</section>

			</div>	

		<?php endif; ?>
	</div>

<?php endif; ?>


</div>




				
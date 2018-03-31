
<?php 
use Roots\Sage\Titles;
use Roots\Sage\Extras;
$news = Extras\get_archive_news(); 
 ?>

<div class="container">
<div class="row">
	
	<div class="col-12">

		<?php if ( $news->have_posts() ) : ?>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php while ( $news->have_posts() ) : $news->the_post(); ?>
						<div class="swiper-slide">
						<article <?php post_class(); ?>>
							<a href="<?php the_field('link_noticia'); ?>"  target="_blank"><?php //aqui esta el problema en news. ?>
								<div class="thumbnail cover" style="height: 340px; background-image: url(<?php the_post_thumbnail_url(); ?>);">
									<div class="inner-info" style="width: 347px !important;">
										<a class="inner-info-title" href="<?php the_permalink(); ?>">
											<h3><?php the_title(); ?></h3>
										</a>
									</div>
								</div>					
							</a>
						</article>
						</div>			
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>

			</div>
		<?php else : ?>
			<p><?php __('No News'); ?></p>
		<?php endif; ?>	
	
	</div>

</div>
</div>
<div class="container">
<div class="row">
	
	<div class="archive col-12">
		
		<h1><?= Titles\title(); ?></h1>

		<?php if($news->have_posts()): ?>
			
			<div class="row">							

				<?php while($news->have_posts()): $news-> the_post(); ?>
				
					<div class="col-md-4">

						<?php get_template_part('templates/content') ?>
				
					</div>

				<?php endwhile; ?> 
			
			</div>

		<?php endif; 
		wp_reset_postdata();  // Restore global post data stomped by the_post().
		?>
	</div>

</div>
</div>
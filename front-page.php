
<?php 
	use Roots\Sage\Titles;
	use Roots\Sage\Extras;
	$news = Extras\get_archive_news();
	$news_swiper = Extras\get_archive_news_swiper();

	///NEXT AND PREV LABEL (FONTAWESOME):
    $next_pagination_link_label = '<span>Next page <i class="fa fa-angle-right" aria-hidden="true">
    </i></span>';
    $prev_pagination_link_label = '<span><i class="fa fa-angle-left" aria-hidden="true">
    </i> Prev page</span>'; 
?>



<div class="container">
<div class="row">
	
	<div class="col-12">

		<?php if ( $news_swiper->have_posts() ) : ?>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php while ($news_swiper->have_posts() ) : $news_swiper->the_post(); ?>
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

				<?php endwhile;  
				wp_reset_postdata();  // Restore global post data stomped by the_post().
				?>
			</div>

			<?php
				if ( function_exists( 'get_archive_news' ) ) {
					global $wp_query;
					archive_post_per_page( $wp_query->max_num_pages );
				}
			?>

			<div class="row">
				<div class="col-12">
					<nav>
						<ul class="pagination justify-content-between">
							<li class="page-item flex-last">
								<?= get_next_posts_link($next_pagination_link_label, $news->max_num_pages); ?>
							</li>
							<li class="page-item flex-first">
								<?= get_previous_posts_link($prev_pagination_link_label); ?>
							</li>
						</ul>
					</nav>
				</div>		
			</div>

		
		<?php endif; ?>
	</div>

</div>
</div>
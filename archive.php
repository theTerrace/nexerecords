<?php use Roots\Sage\Titles; ?>
<?php use Roots\Sage\Extras; ?>
<?php $collections = Extras\archive_post_per_page(); 

    ///NEXT AND PREV LABEL (FONTAWESOME):
    $next_pagination_link_label = '<span>Next page <i class="fa fa-angle-right" aria-hidden="true">
    </i></span>';
    $prev_pagination_link_label = '<span><i class="fa fa-angle-left" aria-hidden="true">
    </i> Prev page</span>'; 
	
?>
<div class="container">
	<div class="row">
		<div class="archive col-12">

			<h1><?= Titles\title(); //esta funcion es de sage y la he editado para que no me muestre esto "Archive: Title" ?></h1> 

			<div class="hr"></div>

			<?php if ($collections->have_posts()): //Going through the collection?>

			<div class="row">

				<?php while($collections->have_posts()): $collections->the_post(); ?>			
				
				<div class="col-lg-4 col-md-6">
								
					<?php get_template_part( 'templates/content-archive') ?>
				
				</div>
				
				<?php endwhile; ?>

			</div>

			<?php
				if ( function_exists( 'archive_post_per_page' ) ) {
					global $wp_query;
					archive_post_per_page( $wp_query->max_num_pages );
				}
			?>

			

				<section class="row prev-next-container 
				">
					<div class="col-6 prev-next-wrapper">
						<div class="post-navigator its-prev">
							<p class="title-prev">
								<?= get_previous_posts_link($prev_pagination_link_label); ?>
								
							</p>
						</div>
					</div>
					<div class="col-6 prev-next-wrapper">
						<div class="post-navigator its-next">
							<p class="title-next">
								<?= get_next_posts_link($next_pagination_link_label, $collections->max_num_pages); ?>
							</p>
						</div>
					</div>
				</section>


				<?php else: ?>	
			
			<div class="row">
				<h2>No posts found</h2>	
			</div>	
			<?php endif; ?> 

		</div>
	</div>
</div>
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
				
				<div class="col-md-4">
								
					<?php get_template_part( 'templates/content-archive') ?>
				
				</div>
				
				<?php endwhile; ?>

			</div>

			<div class="row">
				<div class="col-12">
					<nav>
						<ul class="pagination justify-content-between">
							<li class="page-item flex-last">
								<?= get_next_posts_link($next_pagination_link_label, $collections->max_num_pages); ?>
							</li>
							<li class="page-item flex-first">
								<?= get_previous_posts_link($prev_pagination_link_label); ?>
							</li>
						</ul>
					</nav>
				</div>		
			</div>
				<?php else: ?>	
			
			<div class="row">
				<h2>No posts found</h2>	
			</div>	
				

			
			
			<?php endif; ?> 

		</div>
	</div>
</div>
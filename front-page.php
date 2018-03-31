<?php use Roots\Sage\Titles; ?>
<?php use Roots\Sage\Extras; ?>
<?php $news = Extras\get_archive_news(); ?>



<style>
    
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 500px;
    }
    .swiper-slide {
      text-align: center;
	  font-size: 18px;
	  /background: #fff;
	        /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
	}

	.swiper-button-prev, .swiper-button-next {
		display: none;
		transform: translate(0, -85%);
	}
  </style>
</head>
<body>

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
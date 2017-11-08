<article id="post-artist-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div>
    <h2><?php the_title(); ?></h2>
  </div>
  <div>
    <div class="image">
      <?php the_post_thumbnail('medium') ?>
    </div>    
  </div>
</article>

<h3 class="mt-5">Artist</h3>
<article class="mt-5" id="test">

<?php 

  $artists = get_field('artists');

  if($artists): ?>

  <div class="archive col-md-12">

      <div class="row">
    
        <?php foreach ($artists as $artist): ?>
          <div class="col-md-4 col-sm-6 col-xs-12">

            <article <?php post_class()?>>    
              
                <div class="thumbnail cover" style="background-image: url(<?php echo get_the_post_thumbnail_url( $artist->ID,'') ; ?>);">
                
                  <div class="inner-info">
    
                    <a class="inner-info-title" 
                    href="<?= get_the_permalink($artist->ID); ?>">
                    
                      <h3><?= get_the_title($artist->ID); ?></h3>
                    
                    </a>

                  </div>
                
                </div>                
            </article>
          </div>
        
        <?php endforeach; ?>
  
      </div>
    </div>
  
  <?php endif; ?>



</article>
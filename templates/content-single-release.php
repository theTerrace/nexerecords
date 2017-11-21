<section id="post-release-<?php the_ID(); ?>" <?php post_class('row'); ?>>
  
  <div class="col-md-6 col-12">
    
    <div class="image-wrapper">
      
      <?php the_post_thumbnail('', array('class'=>'image-release')) ?>
    
    </div>    
  
  </div>


  <div class="col-md-6 col-12">
    
    <h1 class="release-name">
      
      <?php the_title(); ?>
        
    </h1>

    <div class="embed-playlist">
      
      <?php the_field('link_play_bandcamp'); ?>

    </div>
  
  </div>
  
</section>

<section class="row">
  
  <div class="col-12">
    
    <div class="info-release">
      
      <?php the_field('info_re'); ?>

    </div>

  </div>


</section>


<!--
<h3 class="mt-5">Artist</h3>
<section class="mt-5" id="test">

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



</section>-->
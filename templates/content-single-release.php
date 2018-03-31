<div class="container">
<section class="row">
  <div class="col-md-6 push-md-6 hidden-md-up">
    <h1 class="release-name">
      <?php the_title(); ?>      
    </h1>     

    <small><?php the_field('referencia_release') ?></small>
  </div>    
</section>

<section id="post-release-<?php the_ID(); ?>" <?php post_class('row'); ?>>
  <div class="col-md-6">      
    <div class="image-wrapper">      
      <?php the_post_thumbnail('', array('class'=>'image-single')) ?>    
    </div>      
  </div>

  <div class="col-md-6"> 
    <div class="hidden-sm-down">
      <h1 class="release-name">
        <?php the_title(); ?>      
      </h1>     

      <small><?php the_field('referencia_release') ?></small>           
    </div>
    
    <div class="info-single">
      <?php the_field('info_re'); ?>
    </div>  
  </div>  
</section>

<br class="hidden-sm-down">
<hr class="hidden-sm-up">

<section class="row">
    
  <div class="bandcamp col-md-6">
      <h4 class="text-left">Bandcamp</h4>

      <hr>
      
      <div class="embed-playlist">      
        <?php the_field('link_play_bandcamp'); ?>
      </div>
  </div>

<?php $artists = get_field('artists'); ?>
    <?php if($artists): ?>        
      
      <div class="artists col-md-6">                      
        <h4 class="text-left">
          <?php echo (count($artists) > 1) ? "Artists" : "Artist" ?>            
        </h4>
        
        <hr>

        <section class="text-left">   
          <?php foreach( $artists as $artist ): ?>                    
            <a class="link" href="<?= get_the_permalink($artist->ID); ?>">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
              <span><?= get_the_title( $artist->ID ); ?></span>        
            </a>                            
          <?php  endforeach; ?>

          <?php wp_reset_postdata(); ?>
        </section>
      </div>    

    <?php endif; ?>

</section>
</div>
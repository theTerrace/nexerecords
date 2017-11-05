<article id="post-release-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div>
    <h2><?php the_title(); ?></h2>
  </div>
  <div>
    <div class="image">
      <?php the_post_thumbnail('medium') ?>
    </div>    
  </div>
</article>

<article class="mt-5" id="test">

<?php 

  $artists = get_field('artists');

  if($artists): ?>

  <ul>
    
    <?php foreach ($artists as $artist): ?>

      <li>
        <a href="<?php echo get_permalink($artist->ID); ?>">
        
          <?php echo get_the_title($artist->ID) ?>
           
          <?php echo get_the_post_thumbnail( $artist->ID , 'medium' ) ?>

        </a>
      </li>
    
    <?php endforeach; ?>
  
  </ul>

<?php wp_reset_postdata(); endif;?>

</article>
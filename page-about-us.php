
<div class="container">
  <div class="row">
    <div class="col-12 archive"><!-- He puesto el .archive para que salga la animacion en el hr -->
      <h1>
        <?php get_template_part('templates/page-header');?>
      </h1>

      <div class="hr"></div><!-- Es necesario el hr en about us? -->
    
    </div>
  </div>
  
  <?php while (have_posts()): the_post();?>

  <div class="row">
    <div class="col-12">
      <div class="image-cover" style="background-image: url('<?php (has_post_thumbnail()) ? the_post_thumbnail_url() : null; ?>')"></div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-12">
      <div class="bio-label">
        <p>
          <?php  the_content(); ?>          
        </p>
      </div>
    </div>
  </div>  

  <?php endwhile;?>

</div>

<?php use Roots\Sage\Assets; ?>
<header class="banner">
  <div class="container-fluid">    
    <nav class="navbar navbar-toggleable-md navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <img src="<?= Assets\asset_path("images/more.svg") ?>">
      </span>      
    </button>
    <a class="navbar-brand" href="<?php echo esc_url("/") ?>">
      <img height="50" width="auto" src="<?= Assets\asset_path("images/nx1-logo.svg");  ?>">
    </a>
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation',
                    'menu_class' => 'navbar-nav mx-auto horizontal-on-smartphones',                      
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse center-menu',
                    'container_id' => 'navbarNav',
                    'walker' => new Nexe_Walker_Nav_Menu()
      ]);
    endif;
    ?>
  </nav>
</div>
</header>

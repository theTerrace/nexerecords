<h1>header.php</h1>
<header class="banner">
  <div class="container-fluid">    
    <nav class="navbar navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"      data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation',
                      'menu_class' => 'navbar-nav',                      
                      'container' => 'div',
                      'container_class' => 'collapse navbar-collapse',
                      'container_id' => 'navbarNav',
                      'walker' => new Nexe_Walker_Nav_Menu()
        ]);
      endif;
      ?>
    </nav>
  </div>
</header>

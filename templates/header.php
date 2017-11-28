<header class="banner">
  <div class="container">
     <div class="row">

     <div class="col-4">

        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="/wp-content/uploads/2017/11/Live-Anywhere.png" alt="Live Anywhere Logo" class="img-fluid"></a>

     </div>
     <div class="col-8">
        <small>A blog about a remote real estate startup.</small>
     </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
</div>
  </div>
</header>

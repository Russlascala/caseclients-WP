<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="AdMediary is an online performance marketing company that specializes in lead generation via the internet and phone for all major industry verticals. The company has offices in Valencia and Beverly Hills, California, as well as New York City.">
    <title>Case Clients</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- <section class="menu-area"> -->
            <nav class="navbar navbar-default navbar-expand-md fixed-top navbar-dark" role="navigation" aria-expanded="false">
                <div class="container">
                  <!-- Logo Image -->   
                  <a class="navbar-brand" href="#"><?php the_custom_logo();?></a>
                  
                  <!-- Brand and toggle get grouped for better mobile display -->
                  
                  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon "></span>
                  </button>
                  
                      <?php
                      wp_nav_menu( array(
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav ml-auto',
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
                      ?>
                </div>
            </nav>
        <!-- </section> -->
    </header>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Electrolize|Oswald|Poppins&amp;subset=latin-ext">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <?php wp_head();?>
  </head>
  <body>
    <div class="preloader"></div>
    <div id="bg1" class="d-flex flex-column">
      <div class="container">
        <div class="row py-4">
          <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7 col-12 mx-auto mb-3 mb-xl-0">
            <div class="row">
              <div class="col-md-4 col-sm-5 col-6 d-flex align-items-center">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.svg" class="ml-auto ml-sm-0" alt="Logo">
              </div>
              <div class="col-md-8 col-sm-7 col-6 d-flex align-items-center">
                <a class="logo-text pr-md-3 mx-sm-auto mr-auto" href="<?php echo get_bloginfo( 'wpurl' );?>">Wspinalnia<br>Alfa</a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-md-12 col-sm-11 col-xs-12 mx-auto">
            <?php
              wp_nav_menu( array(
                'menu'              => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'd-flex align-items-center h-100',
                'menu_class'        => 'nav nav-fill',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
          </div>
        </div>
      </div>
      <div class="container flex-grow-1 d-flex">
        <div class="row">
          <div class="col-12 pb-5 pt-5 mt-5">
            <p class="s-20 c-white pb-4">CH Alfa</p>
            <h2 class="c-white pb-5">Ściana<br>wspinaczkowa</h2>
          </div>
        </div>
      </div>
    </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PYXYS</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
<div class="bg-white shadow sticky-top sgdow">



    <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"></a>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png"  alt="">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

 
                    <?php
                    wp_nav_menu([
                      'menu'            => 'top',
                      'theme_location'  => 'top',
                      'container'       => 'div',
                      'container_id'    => 'bs4navbar',
                      'container_class' => 'collapse navbar-collapse',
                      'menu_id'         => false,
                      'menu_class'      => 'navbar-nav ml-auto justify-content-end',
                      'depth'           => 2,
                      'fallback_cb'     => 'bs4navwalker::fallback',
                      'walker'          => new bs4navwalker()
                    ]);
                    ?> 

                   

        
                  </nav>
    </div>
</div>
<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-language" content="pt-br">
        <meta name="theme-color" content="#000033">
        <?php wp_head(); ?>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/owlcarousel/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/owlcarousel/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top <?=is_single() ? 'single-active' : ''?>">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                            <img alt="Logo" class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php 
                            wp_nav_menu(array(
                                'menu' => 'menu_topo',
                                'menu_id' => 'top_menu',
                                'menu_class' => 'nav navbar-nav',
                                'container' => 'ul'
                            ));
                        ?>
                    </div>
                </div>
            </nav>
        </header>
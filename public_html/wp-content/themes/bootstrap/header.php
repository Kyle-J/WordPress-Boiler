<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-touch-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-touch-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"   href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-touch-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-touch.png">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/stylesheets/theme.css"/ >

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/stylesheets/split/theme.css"/ >
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/stylesheets/split/theme-blessed1.css"/ >
    <![endif]-->

    <script>
        window.ytPlayerList = [];
        window.players = [];
    </script>

</head>
<body <?php body_class(isset($class) ? $class : ''); ?>>

    <header>
        <div class="container">
            <div class="brand-header row">
                <div class="col-md-4 col-sm-2 col-xs-10">
                    <div class="navbar-brand">
                            <div class="brand-logo">
                                <a rel="home" href="/" title="Navigate to homepage">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/identity_x1.png" class="img-responsive">
                                </a>
                            </div>
                    </div>
                </div>
                <div class="visible-xs col-xs-2 top-25">
                    <div class="navbar-header">
                        <button id="nav_toggle" type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#right-nav" data-canvas="body">
                            <span id="menu_toggle" class="fa fa-bars"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-7 col-xs-12 hidden-xs no-padding">
                    <?php wp_nav_menu( array('theme_location' => 'secondary_menu', 'menu_class' => 'nav navbar-nav secondary-menu', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
                </div>
                <div class="col-sm-3 col-xs-12 top-25 bottom-20">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
                        <div class="input-group">
                            <label class="sr-only" for="search-term">Enter search term</label>
                            <input type="text" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" id="s">
                            <span class="input-group-btn">
                                <label class="sr-only" for="submit">Press to search</label>
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search glyphicon-white"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <nav class="navbar hidden-xs" id="main_nav" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse center">
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_class' => 'nav navbar-nav', 'depth'=> 4, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
                </div>
            </div>
        </nav>
    </header>
<!--    --><?php //if(\awesome\FlashMessages::hasMessages()) : ?>
<!--        --><?php //echo \awesome\FlashMessages::displayMessages(); ?>
<!--    --><?php //endif; ?>

<div id="main-container" class="container">

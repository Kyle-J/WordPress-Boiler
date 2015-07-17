<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <script type="application/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/javascript/min/loader.min.js"></script>

    <script>
        loadcss('<?php echo esc_url( get_template_directory_uri() ); ?>/stylesheets/theme.css', 'stackCssId', "screen");
    </script>


    <!--         --><?php //wp_head(); ?>
</head>

<body <?php body_class(isset($class) ? $class : ''); ?>>

<nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
    </div>

    <div class="collapse navbar-collapse">
        <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
    </div>
</nav>

<div id="main-container" class="container">

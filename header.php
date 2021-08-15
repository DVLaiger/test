<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<!--Пустой хэдер должен выглядить так, и меню примерно так-->
<nav class="navbar fixed-top navbar-expand-lg mynavbar cf">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <i class="fas fa-bars"></i>
        </button>
        <?php
        wp_nav_menu( array(
                'menu'              => 'Header menu',
                'theme_location'    => 'header_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_id'      => 'navbarNavDropdown',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarContent',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>
    </div>

    <?php echo get_search_form(); ?>
</nav>



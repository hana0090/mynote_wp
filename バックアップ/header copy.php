<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="background">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo" />
        </div>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-center">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu', // Change 'primary-menu' to your registered menu location
                    'container' => 'ul',
                    'menu_class' => 'uk-navbar-nav',
                ));
                ?>
            </div>
        </nav>
    </header>
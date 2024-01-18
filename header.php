<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charaset"); ?>">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<header>
    <div class="header-background">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo" />
    </div>
    <?php if(has_nav_menu("global")) : ?>
    <?php
    wp_nav_menu(array(
      "theme_location" => "global",//使用するメニュー
      "menu_id" => "global-menu",//メニューのid名
      "container" => "nav",//入れ物の要素
      "container_class" => "global-nav",
    ));
    ?>
    <?php endif; ?>
</header>

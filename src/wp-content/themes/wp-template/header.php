<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="app" class="page-wrapper">
      <header class="l-header jc_header">
        <div class="l-header_container">
          <div class="l-header_container_logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo URL_IMAGE?>/common/knw_logo.png" alt="Template logo">
            </a>
          </div>
          <div class="l-header_container_burgerMenu jc_burgerMenu">
            <div class="l-header_container_burgerMenu_hamburger"></div>
          </div><!-- .burger-menu -->
          <div class="l-header_container_menu">
            <nav class="p-gnav jc_gnav_menu">
              <ul class="p-gnav_list">
                <?php
                    wp_nav_menu(array(
                        'container' => '',
                        'items_wrap' => '%3$s',
                        'menu_class' => 'menu clearfix',
                        'walker'        => new Fx_Walker_Nav_Menu()
                    ));
                ?>
                <!-- <li class="p-gnav_list_item">
                    <a href="#">Company<span>私たちについて</span></a>
                    <ul class="p-gnav_list_item_sub">
                      <li class="p-gnav_list_item_sub_type"><a href="#">Company<span>私たちについて</span></a></li>
                      <li class="p-gnav_list_item_sub_type"><a href="#">あいさつ</a></li>
                      <li class="p-gnav_list_item_sub_type"><a href="#">企業理念</a></li>
                      <li class="p-gnav_list_item_sub_type"><a href="#">会社概要</a></li>
                      <li class="p-gnav_list_item_sub_type"><a href="#">保護ポリシー</a></li>
                      <li class="p-gnav_list_item_sub_type"><a href="#">アクセス</a></li>
                    </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>
      </header>


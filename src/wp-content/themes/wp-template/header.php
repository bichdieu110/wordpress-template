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
        <header class="l-header">
            <div class="p-header l-pageContent">
              <div class="p-headerTop">
                <p class="p-headerTop_solgan u-pc-only">生活のお役立ち情報WEBマガジン</p>
                <a href="/"><img class="p-headerTop_logo" src="<?php echo URL_IMAGE?>/common/logo.svg" alt="logo"></a>
                <div class="p-headerTop_action u-pc-only">
                  <div class="p-search">
                    <a href="javascript:void(0);" class="p-search_link" aria-label="Search">
                      <i class="c-icon_search" id="ji-search_label">s</i>
                    </a>
                    <!-- <?php get_template_part('searchform'); ?> -->
                  </div>
                  <a href="#" class="p-social"><i class="c-icon_fb"></i></a>
                </div>
              </div>
              <nav class="p-navMenu dropdown">
                  <button class="c-open_menu dropdown-toggle" data-toggle="dropdown">Menu</button>
                  <div class="dropdown-menu">
                      <div class='u-sp-only'>
                        <?php get_template_part('searchform'); ?>
                      </div>
                      <ul class='p-navMenu_items'>
                          <?php
                              wp_nav_menu(array(
                                  'container' => '',
                                  'items_wrap' => '%3$s',
                                  'walker'        => new Fx_Walker_Nav_Menu()
                              ));
                          ?>
                      </ul>
                  </div>
              </nav>
            </div>
        </header>


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
        <header class="header">
            <div class="wrap-header container-full">
                <div class="header-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                       <img src="<?php echo URL_IMAGE?>/common/logo.png" alt="">
                    </a>
                </div><!-- .header-logo -->
                <nav class="navMenu dropdown">
                    <button class="c-open-menu dropdown-toggle" data-toggle="dropdown">Menu</button>
                    <div class="dropdown-menu">
                        <ul class='head-menu-items'>
                            <li class="menu-items">
                                <a>
                                　　News
                                    <span>お知らせ</span>
                                </a>
                            </li>
                            <li class="menu-items">
                                <a>
                                    Company
                                    <span>私たちについて</span>
                                </a>
                            </li>
                            <li class="menu-items">
                                <a>
                                    Service
                                    <span>ソリューション/製品</span>
                                </a>
                            </li>
                            <li class="menu-items">
                                <a>
                                　　Case
                                    <span>事例紹介</span>
                                </a>
                            </li>
                            <li class="menu-items">
                                <a>
                                    Column
                                    <span>コラム</span>
                                </a>
                            </li>
                            <li class="menu-items">
                                <a>
                                    Career
                                    <span>採用情報</span>
                                </a>
                            </li>
                            <li class="menu-items">
                                <a>
                                    Contact
                                    <span>お問い合わせ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>


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
            <div class="wrap-header">
                <div class="header-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                       <img src="<?php echo URL_IMAGE?>/common/logo.png" alt="">
                    </a>
                </div>
                <div class='nav-header-wrapper'>
                    <ul class='nav-header only-pc'>
                        <li class='nav-header--item'>
                            <a href='#'>
                                News<br>
                                <span>お知らせ</span>
                            </a>
                        </li>
                         <li class='nav-header--item'>
                            <a href='#'>
                                Company<br>
                                <span>私たちについて</span>
                            </a>
                          </li>
                          <li class='nav-header--item'>
                              <a href='#'>
                                   Service<br>
                                  <span>ソリューション/製品</span>
                              </a>
                          </li>
                          <li class='nav-header--item'>
                            <a href='#'>
                                Case/Column<br>
                                <span>事例とコラム</span>
                            </a>
                          </li>
                          <li class='nav-header--item'>
                            <a href='#'>
                                Career<br>
                                <span>採用情報</span>
                            </a>
                          </li>
                          <li class='nav-header--item nav-header--item__last'>
                            <a href='#'>
                                 Contact<br>
                                <span>お問い合わせ</span>
                            </a>
                          </li>
                    </ul>

                    <nav class="navMenu dropdown only-sp">
                        <button class="btn-menu" onclick="closeNav()"><img src="<?php echo URL_IMAGE?>/icon/ic-menu.png" alt=""></button>
                    </nav>

                </div>
            </div>
        </header>


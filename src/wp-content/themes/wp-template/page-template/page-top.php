<?php
/*
* Template Name: Top page
*/
get_header();
$featured_args      = array(
  'post_type'       => array('case-type','service-type'),
  'posts_per_page'  => 5,
  'orderby'         => 'modified',
  'order'           => 'DESC',

);
$featured_posts = new WP_Query($featured_args);
$column_args = array(
  'post_type' => 'case',
  'posts_per_page' => 3
);
$column_posts = new WP_Query($column_args);
?>
  <div class="l-topBody">
    <div class="p-mainVisual">
      <div class="p-mainVisual_content">
        <div class="p-mainVisual_content_text">
          <h1 class="c-title">テクノロジーと感動を<br>「かたち」に</h1>
          <p class="c-desc">
            スピードと飛躍的技術がもたらすイノベーションを鍵に<br>お客様の次世代を開く一歩を支援する企業となる。
          </p>
        </div>
        <div class="p-mainVisual_content_cover">
          <div class="p-base1"></div>
          <div class="p-base2"></div>
          <div class="p-base3"></div>
          <div class="p-particles" id="ji_particles"><canvas class="particles-js-canvas-el" width="1349" height="680" style="width: 100%; height: 100%;"></canvas></div>
          <div class="p-obj1">
            <div class="p-obj1_s1"></div>
          </div>
          <div class="p-obj2">
            <div class="p-obj2_s2"></div>
          </div>
          <div class="p-obj3">
            <div class="p-obj3_s3"></div>
          </div>
          <div class="p-obj4">
            <div class="p-obj4_s4"></div>
          </div>
        </div>
        <div class="p-mainVisual_content_news">
        <?php
          $news_top = array(
            'post_type' => 'news',
            'posts_per_page' => 1
          );
          $wp_query = new WP_Query($news_top);
          if ($wp_query->have_posts()) :
          ?>
          <ul class="p-list">
            <?php
              while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <li class="p-list_item">
              <b>News</b><span><?php echo get_the_date( 'Y.m.d' ); ?></span><a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </li>
          </ul>
          <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <main class="l-topMain">
    <!-- Featured -->
    <div class="l-topContent">
      <section class="p-topFeatured">
        <div class="p-topFeatured_title">
          <h2 class="c-titleSection">
            Featured
            <span>特集</span>
          </h2>
        </div>
        <?php if ($featured_posts->have_posts()) : ?>
        <ul class="p-topFeatured_list jc_listFeatured">
          <?php while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
          <li class="p-item">
            <a href="<?php the_permalink() ?>">
              <div class="p-item_img" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
              <div class="p-item_desc">
                <!-- <h3>タイトルがはいりますタイトルがはいります。タイトルがはいります。</h3> -->
                <h3><?php the_title(); ?></h3>
                <p class="p-item_desc_para">
                  <label><?php echo get_the_date( 'Y.m.d' ); ?></label><span>101</span>
                </p>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      <?php endif; ?>
      </section>
    </div>
    <!-- /Featured -->
    <!-- Company -->
    <div class="l-topSection">
      <section class="p-topCompany">
        <div class="p-topCompany_title">
          <h2 class="c-titleSection">Company<span>私たちについて</span></h2>
        </div>
        <div class="p-topCompany_desc">
          <h3 class="p-topCompany_desc_name">私たちナレッジワークスは</h3>
          <p class="p-topCompany_desc_paragraph">私たちナレッジワークスは「飛躍的技術がもたらすイノベーションを鍵に、<br>お客様の次世代を開く」という理念のもと、ARやAIといった先進テクノロジーの実装力をもって、<br>企業・ユーザーの皆様に価値あるサービス／記憶に残るサービスをご提供するため<br>日々活動しています。</p>
          <a class="c-button" href="./company">Read More</a>
        </div>
      </section>
    </div>
    <!-- /Company -->
    <!-- Service -->
    <div class="l-topSection">
      <section class="p-topSer">
        <div class="p-topSer_title">
          <h2 class="p-topSer_title_name c-titleSection">Service<span>ソリューション / 製品</span></h2>
          <p class="p-topSer_title_surprise">想像を超える「驚き」と「感動」を</p>
          <p class="p-topSer_title_text">企業・ユーザーの皆様に価値のあるサービスをご提供いたします。</p>
        </div>
        <div class="p-topSer_list">
            <div class="p-topSer_list_item l-topContent">
              <div class="p-topSer_list_item_img">
                <img src="<?php echo URL_IMAGE?>/top/img_service01.jpg" alt="">
              </div>
              <div class="p-topSer_list_item_desc">
                <h3 class="p-topSer_list_item_desc_name"><a href="#">AR / MR</a></h3>
                <h4>ARアプリ開発 - ARをあなたの業務へ -</h4>
                <p>AR、VRを業務で利用するためのビジネス向けサービス。概念検証から業務改善までお気軽にご相談下さい。</p>
                <h4>スマートグラス アプリ開発</h4>
                <p>スマートCデバイスを利用した業務向けアプリ開発や研究開発支援、POCプロジェクトで実績を積んできました。豊富な経験、ノウハウに基づき効果的なソリューションをご提案します。</p>
              </div>
            </div>
            <div class="p-topSer_list_item l-topContent">
              <div class="p-topSer_list_item_img">
                <img src="<?php echo URL_IMAGE?>/top/img_service02.jpg" alt="">
              </div>
              <div class="p-topSer_list_item_desc">
                <h3 class="p-topSer_list_item_desc_name"><a href="#">自然言語処理、検索拡張</a></h3>
                <h4>Siba（サイト内検索サービス）</h4>
                <p>大規模サイト向けにWebサーチ機能を提供するサービス「Siba」単語ベースの全文検索から、検索文の係り受けを理解する高精度な意図検索、AIを使用した類似検索、音声検索など多様なニーズに対応します。</p>
              </div>
            </div>
            <div class="p-topSer_list_item l-topContent">
              <div class="p-topSer_list_item_img">
                <img src="<?php echo URL_IMAGE?>/top/img_service03.jpg" alt="">
              </div>
              <div class="p-topSer_list_item_desc">
                <h3 class="p-topSer_list_item_desc_name"><a href="#">対話型<br>3Dアバタープロジェクト</a></h3>
                <h4>With Corona, After Corona<br>バーチャルヒューマンのよる接客</h4>
                <p>世界は突然変わりました。全てのビジネス活動が安全を担保して⾮対⾯、⾮接触型を志向しはじめ・・・・営業、接客の現場はどう対応して</p>
                <h4>対話型3Dアバター(バーチャルヒューマン)を活⽤しませんか</h4>
                <p>バーチャルヒューマンのよる接客</p>
                <ul class="p-topSer_list3d">
                  <li class="p-topSer_list3d_item3d">
                    <h3 class="p-topSer_list3d_item3d_head">人目を惹く魅力と驚き<span>リアルアバター技術</span></h3>
                    <ul class="p-topSer_list3d_item3d_para">
                      <li>VRoidのようなアニメ風アバターとは 異なり、よりヒト風な「バーチャルヒュー マン]で人目を惹く魅力的な風貌をもつ</li>
                      <li>無理のない-不気味をさける一範囲で より人間風な動作、リアクションを表現</li>
                    </ul>
                  </li>
                  <li class="p-topSer_list3d_item3d">
                    <h3 class="p-topSer_list3d_item3d_head">対話知性<span>対話エンジン</span></h3>
                    <ul class="p-topSer_list3d_item3d_para">
                      <li>知らないことを教えてくれる(説明員) </li>
                      <li>特定範囲(ドメイン)の質問に対応でき る。応答が自然であること。ただし、自律発話はない</li>
                      <li>基礎的な会話ができる(必要な場合の み、不要なケースでは実装しない</li>
                      <li>相手(人)の話、感情を理解している風 な態度を示す</li>
                    </ul>
                  </li>
                  <li class="p-topSer_list3d_item3d">
                    <h3 class="p-topSer_list3d_item3d_head">対話エンジン<span>技術調和による固有な存在感</span></h3>
                    <ul class="p-topSer_list3d_item3d_para">
                      <li>LipSync、表情、ポージングとのマッチ ングで、リアルアバターを生きているヒト風に。合成音声、表情、動きがアバター に個性と役割を与える</li>
                      <li>パーソナル動画を使用してお客様に合った個別</li>
                      <li>リッチなコンテンツを提示できる</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </div>
        <div class="p-topSer_background">
          <img src="/assets/images/img_bg_topservice.png" alt="">
        </div>
      </section>
    </div>
    <!-- /Service -->
    <!-- Career -->
    <div class="l-topCareer l-topSection">
      <div class="l-topContent">
        <section class="p-topCareer">
          <div class="p-topCareer_title">
            <h2 class="c-titleSection">Career<span>私たちについて</span></h2>
          </div>
          <p class="p-topCareer_paragraph">
            当社はマルチタレント性を重視しています。<br>プロジェクト体制や仕事のアサイン状況によっては、複数のJOBロールの兼務が発生します。<br>募集スキルは深さだけではなく幅広く持っている方大歓迎です。
          </p>
          <a class="c-button" href="./company">Read More</a>
        </section>
      </div>
    </div>
    <!-- /Career -->

    <!-- top News -->
    <div class="l-topNews l-topSection">
      <div class="l-topContent">
        <section class="p-topNews">
          <div class="p-topNews_title">
            <h2 class="c-titleSection">News<span>お知らせ</span></h2>
          </div>
          <div class="p-topNews_content">
            <?php 
            $news_args = array(
              'post_type' => 'news',
              'posts_per_page' => 5
            );
            $news_posts = new WP_Query($news_args);
            ?>
            <?php if ($news_posts->have_posts()) : ?>
            <ul class="p-topNews_content_list">
              <?php
                while ($news_posts->have_posts()) : $news_posts->the_post();
              ?>
              <li class="p-topNews_content_list_item">
                <b><?php echo get_the_date( 'Y.m.d' ); ?></b>
                <span>企業情報</span>
                <a href="<?php the_permalink() ?>"><?php the_title();?></a>
              </li>
              <!-- <li class="p-topNews_content_list_item"><b>2020 04.30</b><span>企業情報</span><a href="#">コンテンツの統合ディレクションをご提供しています。コンテンツの統合ディレクションをご提供しています。</a></li>
              <li class="p-topNews_content_list_item"><b>2020 04.30</b><span>製品サービス情報</span><a href="#">コンテンツの統合ディレクションをご提供しています。コンテンツの統合ディレクションをご提供しています。</a></li>
              <li class="p-topNews_content_list_item"><b>2020 04.30</b><span>セミナー・イベント情報</span><a href="#">コンテンツの統合ディレクションをご提供しています。コンテンツの統合ディレクションをご提供しています。</a></li>
              <li class="p-topNews_content_list_item"><b>2020 04.30</b><span>ARサービス</span><a href="#">コンテンツの統合ディレクションをご提供しています。コンテンツの統合ディレクションをご提供しています。</a></li> -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </ul>
            <?php endif;?>
            <a class="p-topNews_content_readMore c-button" href="./company">Read More</a>
          </div>
        </section>
      </div>
    </div>
    <!-- /top News -->

    <!-- Column -->
    <div class="l-topColumn">
      <section class="p-topColumn">
        <div class="p-topColumn_title">
          <h2 class="c-titleSection">Column<span>コラム</span></h2>
        </div>
        <ul class="p-topColumn_list">
          <li class="p-topColumn_list_item">
            <a href="#">
              <figure class="p-topColumn_list_item_img">
                <img src="<?php echo URL_IMAGE?>/top/img_column_01.jpg" alt="">
                <figcaption>カテゴリー</figcaption>
              </figure>
              <div class="p-topColumn_list_item_desc">
                <label>2020 04.30</label>
                <h3>タイトルがはいります</h3>
                <p>本文入ります本文入ります。本文入ります本文入ります。</p>
                <div class="p-topColumn_list_item_desc_divide">
                  <strong>NEW</strong><span>101</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-topColumn_list_item">
            <a href="#">
              <figure class="p-topColumn_list_item_img">
                <img src="<?php echo URL_IMAGE?>/top/img_column_02.jpg" alt="">
                <figcaption>カテゴリー</figcaption>
              </figure>
              <div class="p-topColumn_list_item_desc">
                <label>2020 04.30</label>
                <h3>タイトルがはいります</h3>
                <p>本文入ります本文入ります。本文入ります本文入ります。</p>
                <div class="p-topColumn_list_item_desc_divide">
                  <strong>NEW</strong><span>101</span>
                </div>
              </div>
            </a>
          </li>
          <li class="p-topColumn_list_item">
            <a href="#">
              <figure class="p-topColumn_list_item_img">
                <img src="<?php echo URL_IMAGE?>/top/img_column_01.jpg" alt="">
                <figcaption>カテゴリー</figcaption>
              </figure>
              <div class="p-topColumn_list_item_desc">
                <label>2020 04.30</label>
                <h3>タイトルがはいります</h3>
                <p>本文入ります本文入ります。本文入ります本文入ります。</p>
                <div class="p-topColumn_list_item_desc_divide">
                  <strong>NEW</strong><span>101</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <a class="p-topColumn_readMore c-button" href="./company">Read More</a>
      </section>
    </div>
    <!-- /Column -->

    <!-- Contact -->
    <div class="l-mainContact ">
      <div class="l-pageContent">
        <section class="p-mainContact">
          <div class="p-mainContact_title">
            <h2 class="c-titleSection">Contact Us<span>お問い合わせ</span></h2>
            <p class="p-mainContact_title_para">製品/モデルのお問い合わせはお問い合わせフォームよりご確認ください。<br>製品/サービス以外のお問い合わせは<span>こちら</span>をご利用ください。</p>
          </div>
          <div class="p-mainContact_form">
          <?php echo do_shortcode('[contact-form-7 id="75" title="お問い合わせフォーム"]')?>
            
          </div>
        </section>
      </div>
    </div>
  </main>
<?php get_footer(); ?>

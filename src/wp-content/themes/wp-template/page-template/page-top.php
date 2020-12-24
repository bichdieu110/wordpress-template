<?php
/*
* Template Name: Top page
*/
get_header();
$featured_args      = array(
  'post_type'       => array('case','service'),
  'posts_per_page'  => 5,
  'meta_query'      => array(
        array(
            'key'   => 'featured',
            'value' => '"featured"',
            'compare' => 'LIKE'
        ) ),
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
  <main id="main-content" class="page-content page-content--top">
    <section class="mv-section">
      <div class="mv-section-inner">
        <div class="container">
          <h2 class="wow fadeInUp animated" data-wow-delay="2.5s">テクノロジーと感動を<br>「かたち」に</h2>
          <p class="wow fadeInUp animated" data-wow-delay="2.7s">スピードと飛躍的技術がもたらすイノベーションを鍵に<br>お客様の次世代を開く一歩を支援する企業となる。</p>
          <?php
          $news_top = array(
            'post_type' => 'news',
            'posts_per_page' => 1
          );
          $wp_query = new WP_Query($news_top);
          if ($wp_query->have_posts()) :
          ?>
          <ul class="news-block wow fadeInUp animated">
          <?php
            while ($wp_query->have_posts()) : $wp_query->the_post();
					?>
            <li><b>News</b><span><?php the_date(); ?></span><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
          </ul>
          <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          <!-- <a href="#featured" class="scroll-btn">Scroll down</a> -->
        </div>
        <div class="mv-image">
          <div class="mv-image_base1"></div>
          <div class="mv-image_base2"></div>
          <div class="mv-image_particles" id="particles-js"></div>
          <div class="mv-image_obj mv-image_obj1">
            <div class="mv-image_obj1s"></div>
          </div>
          <div class="mv-image_obj mv-image_obj2">
            <div class="mv-image_obj2s"></div>
          </div>
          <div class="mv-image_obj mv-image_obj3">
            <div class="mv-image_obj3s"></div>
          </div>
          <div class="mv-image_obj mv-image_obj4">
            <div class="mv-image_obj4s"></div>
          </div>
        </div>
      </div>
    </section>
    <?php if ($featured_posts->have_posts()) : ?>
    <section class="featured-section" id="featured">
      <div class="container">
        <h2 class="heading-section">Featured<span>特集</span></h2>
        <div class="slider featured-list">
          <?php
            $i = 0.1;
            while ($featured_posts->have_posts()) : $featured_posts->the_post();
					?>
          <div class="wow fadeInUp animated" data-wow-delay="<?= $i ?>s">
            <div class="slide-inner">
              <a href="<?php the_permalink() ?>"><div class="img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div></a>
              <div class="featured-content">
                <div class="featured-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                <div class="featured-date"><?php echo get_the_date(); ?>
                </div>
              </div>
            </div>
          </div>
          <?php $i = $i + 0.2; endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <section class="company-section wow fadeInUp animated" data-wow-delay="0.1s">
      <div class="company-section-inner">
        <h2 class="heading-section">Company<span>私たちについて</span></h2>
        <h1>私たちナレッジワークスは</h1>
        <h3>私たちナレッジワークスは「飛躍的技術がもたらすイノベーションを鍵に、<br>お客様の次世代を開く」という理念のもと、ARやAIといった先進テクノロジーの実装力をもって、<br>企業・ユーザーの皆様に価値あるサービス／記憶に残るサービスをご提供するため<br>日々活動しています。</h3>
        <a href="<?php echo esc_url( home_url() ); ?>/company" class="btn-rm">Read More</a>
      </div>
    </section>
    <section class="service-section">
        <div class="paraBox1">
          <img class="paraImage1" src="<?php echo URL_IMAGE?>/common/bg1.png" alt="">
        </div>
        <div class="heading-content wow fadeInUp animated">
          <h2 class="heading-section">Service<span>ソリューション / 製品</span></h2>
          <h3>想像を超える「驚き」と「感動」を</h3>
          <p>企業・ユーザーの皆様に価値のあるサービスをご提供いたします。</p>
        </div>
        <div class="services-block">
          <div class="service-block">
            <div class="paraBox3">
              <img class="paraImage3" src="<?php echo URL_IMAGE?>/bg1.jpg" alt="">
            </div>
            <div class="container">
              <div class="service-block-inner wow fadeInUp animated" data-wow-delay="0.1s">
                <h3 class="custom-text">お客様の未来を拓くお手伝い</h3>
                <h2 class="heading-section">AR/MR<span>ソリューション開発</span></h2>
                <h1>― ARをあなたのビジネスヘ ―</h1>
                <h3>私たちがARに取り組み始めてから早10年。ARはプロモーションやゲームの特殊効果から始まり、今ようやくビジネス向けの活用が始まりました。<br>ナレッジワークスは豊富な実績と多彩なノウハウでお客様の成功をサポートします。</h3>
                <h3>ビジネス現場での活用に向けた概念検証から、具体的なアプリ開発までワンストップでご提供します。お気軽にご相談ください。</h3>
                <a href="https://www.knowledge-works.co.jp/service/develop/ar_mr/" class="btn-rm">Read More</a>
                <h3>この領域のサービス</h3>
                <h3><a href="https://www.knowledge-works.co.jp/service/product_service/aug/" class="linkto">aug!<span>（ARプラットフォーム）</span></a>
                <a href="https://www.knowledge-works.co.jp/service/product_service/daub/" class="linkto">daub<span>（3DぬりえAR）</span></a></h3>
              </div>
            </div>
          </div>
          <div class="service-block">
            <div class="paraBox3">
              <img class="paraImage3" src="<?php echo URL_IMAGE?>/iStock-508131094_01re.png" alt="">
            </div>
            <div class="container">
              <div class="service-block-inner wow fadeInUp animated" data-wow-delay="0.1s">
                <h2 class="heading-section">スマートグラス<span>ソリューション開発</span></h2>
                <h1>― 圧倒的な情報体験で時代を変える ―</h1>
                <h3>スマートグラスによる圧倒的な情報体験は、働き方・生活様式・感性へ衝撃的な変化をもたらします。私たちはこれまで、スマートデバイスを利用したPOCプロジェクトや業務アプリの中で、常に難易度の高い課題解決に挑戦してきました。今、時代の神器でお客様の課題解決を。</h3>
              </div>
            </div>
          </div>
          <div class="service-block">
            <div class="paraBox3">
              <img class="paraImage3" src="<?php echo URL_IMAGE?>/iStock-1069554654_01.png" alt="">
            </div>
            <div class="container">
              <div class="service-block-inner wow fadeInUp animated" data-wow-delay="0.1s">
                <h2 class="heading-section">拡張検索、<span>AI ソリューション開発</span></h2>
                <h1>― 自然言語処理をあなたの業務へ ―</h1>
                <h3>情報活用がウェアラブルになるに従い、検索ニーズも変化しています。検索のインターフェースが従来の検索ボックスから音声検索に代わることで、言葉の係り受けを認識する意図検索の効用が注目されています。</h3>
                <h3>私たちは、検索エンジンをAIや外部サービス・アルゴリズムで補完して、お客様独自の精度を実現する自然言語処理システムをクラウドDevOpsの形でご提供しています。</h3>
                <a href="https://www.knowledge-works.co.jp/service/cloud_deveops/augmented_research/" class="btn-rm">Read More</a>
                <h3>この領域のサービス</p>
                <h3><a href="https://www.knowledge-works.co.jp/service/product_service/siba/" class="linkto">Siba<span>（サイト内検索サービス）</span></a></h3>
              </div>
            </div>
          </div>
          <div class="service-block">
            <div class="paraBox3">
              <img class="paraImage3" src="<?php echo URL_IMAGE?>/bg3.jpg" alt="">
            </div>
            <div class="container">
              <div class="service-block-inner wow fadeInUp animated" data-wow-delay="0.1s">
                <h3 class="custom-text">10年先の未来へ向けて</h3>
                <h2>バーチャルヒューマン</h2>
                <h1>― <span>1<sup>st</sup></span> 対話型3Dアバタープロジェクト ―</h1>
                <h3>人目を惹く魅力と驚き、対話知性を備え、幾つもの技術調和により独特の存在感を放つ固有の存在。それがバーチャルヒューマン。私たちが10年先の未来へ向けて取り組む領域のひとつです。</p>
                <h3>1stステージは、対話型の3Dアバターのビジネス利用が目的です。中核となる３つの領域で技術的研鑽とノウハウを蓄積し、未来を考えます。</h3>
                <ul>
                  <li>・リアルアバタ技術</li>
                  <li>・対話エンジン</li>
                  <li>・AR＆空間認識技術</li>
                </ul>
                <h3>お問い合わせは <a href="/contact" class="link">こちら</a> からお願いします。</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="paraBox2">
          <img class="paraImage2" src="<?php echo URL_IMAGE?>/common/bg2.png" alt="">
        </div>
    </section>
    <section class="career-section">
      <!-- <div class="paraBox3">
        <img class="paraImage3" src="<?php echo URL_IMAGE?>/bg4.jpg" alt="">
      </div> -->
      <div class="container wow fadeInUp animated" data-wow-delay="0.1">
        <h2 class="heading-section">Career<span>採用情報</span></h2>
        <h3>日々進化するテクノロジーに興味のアンテナを張り、いち早くビジネスに活用するスキルを追求しています。</h3>
        <h3>行動面では「Knowledge & Facilitate」、先端技術の実装力を手段に、バランスのとれた知見をもって<br>プロジェクトの目的達成をリードできる方、チャレンジしたい方を募集しています。</h3>
        <a href="/career" class="btn-rm">Read More</a>
      </div>
    </section>
    <section class="news-section wow fadeInUp animated" data-wow-delay="0.1s">
      <div class="container">
        <h2 class="heading-section">News<span>お知らせ</span></h2>
        <?php 
          $news_args = array(
            'post_type' => 'news',
            'posts_per_page' => 5
          );
          $news_posts = new WP_Query($news_args);
        ?>
        <?php if ($news_posts->have_posts()) : ?>
        <ul class="news-list">
          <?php
            while ($news_posts->have_posts()) : $news_posts->the_post();
            $news_cat = wp_get_object_terms($post->ID, 'news_category');
            $news_class = count($news_cat) > 1 ? 'full' : '';
					?>
          <li>
            <span class="news-date"><?php echo get_the_date(); ?></span>
            <div class="cats-list">
                <?php foreach ($news_cat as $cat) { ?>
                <span class="news-cat"><?php echo $cat->name ?></span>
                <?php } ?>
            </div>
            <span class="news-title <?php echo $news_class?>"><a href="<?php the_permalink() ?>"><?php the_title();?></a></span>
          </li>
          <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
        </ul>
        <?php endif;?>
        <a href="<?php echo esc_url( home_url() ); ?>/news" class="btn-rm">Read More</a>
      </div>
    </section>
    <?php if ($column_posts->have_posts()) : ?>
    <section class="column-section">
      <div class="paraBox1">
        <img class="paraImage1" src="<?php echo URL_IMAGE?>/common/contact-bg1.png" alt="">
      </div>
      <h2 class="heading-section">Case/Column<span>事例とコラム</span></h2>
      <div class="slider column-slider">
        <?php
          $i = 0;
          while ($column_posts->have_posts() && $i < 1) : $column_posts->the_post();
        ?>
        <div>
          <div class="slide-inner wow fadeInUp animated" data-wow-delay="<?= $i ?>s">
          <?php get_template_part( 'template-parts/post/content-column');?>
          </div>
        </div>
        <?php $i = $i + 0.2; endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      
      <!-- <ul class="columns-list">
        <?php
          #$i = 0;
          #while ($column_posts->have_posts() && $i < 1) : $column_posts->the_post();
				?>
        <li class="wow fadeInUp animated" data-wow-delay="<? # =$i ?>s">
          <?php #get_template_part( 'template-parts/post/content-column');?>
        </li>
        <?php #$i = $i + 0.2; endwhile; ?>
        <?php #wp_reset_postdata(); ?>
      </ul> -->
      <a href="<?php echo esc_url( home_url() ); ?>/case-column" class="btn-rm">Read More</a>
    </section>
    <?php endif;?>
    <section class="contact-section wow fadeInUp animated" data-wow-delay="0.1s">
      <div class="container">
        <div class="heading-content">
          <h2 class="heading-section">Contact Us<span>お問い合わせ</span></h2>
        </div>
        <div class="contact-block">
          <?php echo do_shortcode('[contact-form-7 id="32" title="お問い合わせフォーム"]')?>
        </div>
      </div>
      <div class="paraBox2">
        <img class="paraImage2" src="<?php echo URL_IMAGE?>/common/contact-bg.png" alt="">
      </div>
      <ul class="social-links">
        <li><a href="https://www.facebook.com/knowledgeworks.jpn/" class="fb-icon" target="_blank">Facebook</a></li>
        <li><a href="https://twitter.com/knowledge_works" class="twitter-icon" target="_blank">Twitter</a></li>
      </ul>
    </section>
  </main>
<?php get_footer(); ?>
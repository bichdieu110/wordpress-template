<?php
/*
* Template Name: Top page
*/
get_header();

?>
  <main id="main-content" class="page-top">
    <section class="mv-section">
      <div class="mv-section-inner">
        <div class="container">
          <h2>テクノロジーと感動を<br>「かたち」に</h2>
          <p>スピードと飛躍的技術がもたらすイノベーションを鍵に<br>お客様の次世代を開く一歩を支援する企業となる。</p>
          <ul class="news-block">
            <li><b>News</b><span>2020.04.30</span><a href="#">テキストテキストテキストテキストテキストテキストテキストテキスト</a></li>
          </ul>
        </div>
      </div>
    </section>
    <section class="featured-section">
      <div class="container">
        <h2 class="heading-section">Featured<span>特集</span></h2>
        <div class="slider featured-list">
          <div class="featured-list_item">
            <div class="slide-inner">
              <a href="#"><div class="img" style="background-image: url(<?php echo URL_IMAGE?>/top/feature/item-1.png)"></div></a>
              <div class="featured-content">
                <div class="featured-title"><a href="#">タイトルがはいりますタイトルがはいります。タイトルがはいります。</a></div>
                <div class="featured-date">2020 04.30<span class="view">101</span>
                </div>
              </div>
            </div>
          </div>
          <div class="featured-list_item">
            <div class="slide-inner">
              <a href="#"><div class="img" style="background-image: url(<?php echo URL_IMAGE?>/top/feature/item-2.png)"></div></a>
              <div class="featured-content">
                <div class="featured-title"><a href="#">タイトルがはいりますタイトルがはいります。タイトルがはいります。</a></div>
                <div class="featured-date">2020 04.30<span class="view">101</span>
                </div>
              </div>
            </div>
          </div>
          <div class="featured-list_item">
            <div class="slide-inner">
              <a href="#"><div class="img" style="background-image: url(<?php echo URL_IMAGE?>/top/feature/item-1.png)"></div></a>
              <div class="featured-content">
                <div class="featured-title"><a href="#">タイトルがはいりますタイトルがはいります。タイトルがはいります。</a></div>
                <div class="featured-date">2020 04.30<span class="view">101</span>
                </div>
              </div>
            </div>
          </div>
          <div class="featured-list_item">
            <div class="slide-inner">
              <a href="#"><div class="img" style="background-image: url(<?php echo URL_IMAGE?>/top/feature/item-2.png)"></div></a>
              <div class="featured-content">
                <div class="featured-title"><a href="#">タイトルがはいりますタイトルがはいります。タイトルがはいります。</a></div>
                <div class="featured-date">2020 04.30<span class="view">101</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="company-section">
      <div class="company-section_group-text">
        <h2 class="heading-section">Company<span>私たちについて</span></h2>
        <h3>私たちナレッジワークスは</h3>
        <p>私たちナレッジワークスは「飛躍的技術がもたらすイノベーションを鍵に、<br>お客様の次世代を開く」という理念のもと、ARやAIといった先進テクノロジーの実装力をもって、<br>企業・ユーザーの皆様に価値あるサービス／記憶に残るサービスをご提供するため<br>日々活動しています。</p>
        <a href="./company" class="btn-rm">Read More</a>
      </div>
    </section>
    <section class="service-section">
      <div class="service-section_title heading-content">
        <h2 class="heading-section">Service<span>ソリューション / 製品</span></h2>
        <h3>想像を超える「驚き」と「感動」を</h3>
        <p>企業・ユーザーの皆様に価値のあるサービスをご提供いたします。</p>
      </div>
      <div class="service-section_list">
        <div class="service-item">
          <div class="paraBox3">
            <div class="bg-service"><img class="paraImage3" src="<?php echo URL_IMAGE?>/common/bg-service.jpg" alt="" ></div>
          </div>
          <div class="container">
            <div class="inner">
              <h4>AR / MR</h4>
              <h5>ARアプリ開発 - ARをあなたの業務へ -</h5>
              <p>AR、VRを業務で利用するためのビジネス向けサービス。概念検証から業務改善までお気軽にご相談下さい。</p>
              <h5>スマートグラス アプリ開発</h5>
              <p>スマートデバイスを利用した業務向けアプリ開発や研究開発支援、POCプロジェクトで実績を積んできました。豊富な経験、ノウハウに基づき効果的なソリューションをご提案します。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
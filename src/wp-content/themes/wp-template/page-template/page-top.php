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
                <div class="featured-date">2020 04.30
                </div>
              </div>
            </div>
          </div>
          <div class="featured-list_item">
            <div class="slide-inner">
              <a href="#"><div class="img" style="background-image: url(<?php echo URL_IMAGE?>/top/feature/item-2.png)"></div></a>
              <div class="featured-content">
                <div class="featured-title"><a href="#">タイトルがはいりますタイトルがはいります。タイトルがはいります。</a></div>
                <div class="featured-date">2020 04.30
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
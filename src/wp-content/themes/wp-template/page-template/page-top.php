<?php
/*
* Template Name: Top page
*/
get_header();

?>
  <main id="main-content" class="page-top main-wrapper">
     <div class='top-banner-wrapper'>
         <img class='banner-img' src="<?php echo URL_IMAGE?>/common/mv.png" alt="banner">
         <div class='banner-text'>
            <h2 class='title'>テクノロジーと感動を<br>「かたち」に</h2>
            <p class='sub-title'>スピードと飛躍的技術がもたらすイノベーションを鍵に<br>お客様の次世代を開く一歩を支援する企業となる。</p>
         </div>
         <div class='box-new container'>
            <p class='news'>News</p>
            <p class='date'>2020 04.30</p>
            <p class='content'>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
         </div>
     </div>
     <div class='featured-wrapper'>
        <h3 class='box-heading'>
           Featured<br>
           <span>特集</span>
        </h3>
        <div class='list-featured container'>
            <div class='list-featured--item'>
                <div class='featured-img-wrapper'>
                   <img class='featured-img' src="<?php echo URL_IMAGE?>/featured/item-1.png" alt="featured-img">
                </div>
                <div class='featured-content'>
                    <p class='title'>タイトルがはいりますタイトルがはいります。タイトルがはいります。</p>
                    <p class='date'>2020 04.30</p>
                </div>
            </div>
            <div class='list-featured--item'>
                <div class='featured-img-wrapper'>
                    <img class='featured-img' src="<?php echo URL_IMAGE?>/featured/item-2.png" alt="featured-img">
                </div>
                <div class='featured-content'>
                    <p class='title'>タイトルがはいりますタイトルがはいります。タイトルがはいります。</p>
                    <p class='date'>2020 04.30</p>
                </div>
            </div>
        </div>
        <div class='featured-page'>
           <button class='btn-featured'><img class='ic-back' src="<?php echo URL_IMAGE?>/icon/back.png" alt="back"></button>
           <button class='btn-featured'><img class='ic-next' src="<?php echo URL_IMAGE?>/icon/next.png" alt="next"></button>
        </div>
     </div>
  </main>
<?php get_footer(); ?>
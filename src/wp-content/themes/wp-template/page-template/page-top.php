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
     <div class='company-wrapper'>
        <div class='company-bg-color' style='background-image: url("<?php echo URL_IMAGE?>/common/bg.png")'>
            <div class='company-bg-img' style='background-image: url("<?php echo URL_IMAGE?>/common/bg-company.png")'>
                 <div class='company-box'>
                      <h2 class='heading'>
                         Company<br>
                         <span>私たちについて</span>
                      </h2>
                     <h3>私たちナレッジワークスは</h3>
                     <p>私たちナレッジワークスは「飛躍的技術がもたらすイノベーションを鍵に、<br>お客様の次世代を開く」という理念のもと、ARやAIといった先進テクノロジーの実装力をもって、<br>企業・ユーザーの皆様に価値あるサービス／記憶に残るサービスをご提供するため<br>日々活動しています。</p>
                     <div class='read-more-wrapper'>
                        <a href='#'>Read More</a>
                        <img src="<?php echo URL_IMAGE?>/icon/btn-read-more.png"/>
                     </div>
                 </div>

                 <div class='service-wrapper'>
                     <h2 class='heading'>
                         Service<br>
                         <span>ソリューション / 製品</span>
                     </h2>
                     <h3>想像を超える「驚き」と「感動」を</h3>
                     <p>企業・ユーザーの皆様に価値のあるサービスをご提供いたします。</p>
                 </div>

            </div>
        </div>
     <div>
     <div class='ar-mr-wrapper'>
        <div class='ar-mr-bg' style='background-image: url("<?php echo URL_IMAGE?>/common/bg-mr-ar.png")'>
             <div class='ar-mr-box'>
                <h2>AR/MR</h2>
                <p>ARアプリ開発 - ARをあなたの業務へ - </p>
                <p>AR、VRを業務で利用するためのビジネス向けサービス。概念検証から業務改善までお気軽にご相談下さい。</p>
                <p>スマートグラス アプリ開発</p>
                <p>スマートデバイスを利用した業務向けアプリ開発や研究開発支援、POCプロジェクトで実績を積んできました。豊富な経験、ノウハウに基づき効果的なソリューションをご提案します。</p>
             </div>
        </div>
     </div>
     <div class='siba-wrapper'>
        <div class='siba-bg'>
        </div>
        <div class='siba-bg-color' >
            <div class='siba-bg-img' style='background-image: url("<?php echo URL_IMAGE?>/common/siba-bg.png")'>
                <div class='siba-box'>
                    <h2>自然言語処理、検索拡張</h2>
                    <p>Siba（サイト内検索サービス）</p>
                    <p>大規模サイト向けにWebサーチ機能を提供するサービス「Siba」<br>
                    単語ベースの全文検索から、検索文の係り受けを理解する高精度な意図検索、AIを使用した類似検索、音声検索など多様なニーズに対応します。
                    </p>
                </div>
            </div>
        </div>
        <div class='siba-bg'> </div>
     </div>

  </main>

<?php get_footer(); ?>
<?php
/*
* Template Name: Top page
*/
get_header();

?>
  <div class="l-topBody">
    <div class="p-mainVisual">
        <?php
          global $post;
          $query = get_posts( array(
              'post_type'  => 'post',
              'posts_per_page'    => 6,
              'orderby' => 'date',
              'order' => 'DESC',
          ) );
          if ( $query ) {
              foreach ( $query as $post ) :
                  setup_postdata( $post );
                  ?>
                  <div class="p-mainVisual_slide">
                    <a href="<?php the_permalink(); ?>">
                      <img class="p-mainVisual_slide_img" src="<?php echo the_post_thumbnail_url()?>" alt=""/>
                    </a>
                    <div class="p-mainVisual_slide_content">
                      <p class="p-mainVisual_slide_content_cat"><?php foreach((get_the_category()) as $category) { echo $category->name.'';} ?></p>
                      <a href="<?php the_permalink(); ?>">
                        <h3 class="p-mainVisual_slide_content_title"><?php the_title(); ?></h3>
                      </a>
                      <p class="p-mainVisual_slide_content_date"><?php echo get_the_date( 'Y.m.d' ); ?></p>
                    </div>
                  </div>
              <?php
              endforeach;
              wp_reset_postdata();
          }
        ?>
    </div>

    <div class="l-pageContent">
      <p class="p-paragraph">ここでは皆さんの生活に関わる様々なお役立ち情報を<br class="u-sp-only">提供いたします。<br class="u-pc-only">
      掃除・整理収納・料理など、<br class="u-sp-only">生きていくために必要な要素をより簡単に<br>
      楽しくできるようにという気持ちを込めて情報発信しております！<br>
      記事を読んで、もし「タスカジさんに依頼してみたい」<br class="u-sp-only">「タスカジさんになってみたい」<br>
      というような気持ちが芽生えたらぜひお問い合わせくださいませ！</p>
    </div>

    <main class="l-topMain">
      <div class="l-topSection">
        <div class="l-pageContent">
          <!--list ranking -->
          <section class="p-topSection">
            <div class="c-pageHeading c-pageHeading-ranking">
              <h2 class="c-pageHeading_title">人気記事ランキング</h2>
            </div>
            <?php get_template_part('postviews'); ?>
          </section>

          <!--list cleanup -->
          <section class="p-topSection">
            <div class="c-pageHeading c-pageHeading-clean">
              <h2 class="c-pageHeading_title">掃除の記事</h2>
            </div>
            <ul class="c-articles c-articles-listMoreRight">
            <?php
              global $post;
              $query = get_posts( array(
                  'post_type'      => 'post',
                  'category_name'  => 'cleanup',
                  'posts_per_page' => 5,
                  'orderby'        => 'date',
                  'order'          => 'DESC',
              ) );
              if ( $query ) {
                  foreach ( $query as $post ) :
                      setup_postdata( $post );
                      $posttags = get_the_tags();
                      ?>
                      <li class="c-articles_item">
                        <div class="c-articles_item_content">
                          <a href="<?php the_permalink(); ?>">
                            <img class="wp-post-image" src="<?php echo the_post_thumbnail_url()?>" alt="">
                          </a>
                        </div>
                        <span class="c-articles_item_date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
                        <h3 class="c-articles_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <ul class="c-articles_item_tags">
                          <?php
                            if ($posttags) {
                              foreach($posttags as $tag) {
                                echo  '<li class="c-articles_item_tags_tag u-bg_green"><a href="' . get_tag_link($tag->term_id) . '">'.$tag->name.'</a></li>';
                              }
                            }
                          ?>
                        </ul>
                      </li>
                  <?php
                  endforeach;
                  wp_reset_postdata();
              }
            ?>
              <li class='c-articles_item_listMore'>
                <a href="/category/cleanup/" class='c-button_listMore c-button_listMore-green'>
                  記事一覧へ
                </a>
              </li>
            </ul>
          </section>
          <!--list organize-storage -->
          <section class="p-topSection">
            <div class="c-pageHeading c-pageHeading-organize">
              <h2 class="c-pageHeading_title">整理収納の記事</h2>
            </div>
            <ul class="c-articles c-articles-listMoreLeft">
              <?php
                global $post;
                $query = get_posts( array(
                    'post_type'       => 'post',
                    'category_name'   => 'organize-storage',
                    'posts_per_page'  => 5,
                    'orderby'         => 'date',
                    'order'           => 'DESC',
                ) );
                if ( $query ) {
                    foreach ( $query as $post ) :
                        setup_postdata( $post );
                        $posttags = get_the_tags();
                        ?>
                        <li class="c-articles_item">
                          <div class="c-articles_item_content">
                            <a href="<?php the_permalink(); ?>">
                              <img class="wp-post-image" src="<?php echo the_post_thumbnail_url()?>" alt="">
                            </a>
                          </div>
                          <span class="c-articles_item_date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
                          <h3 class="c-articles_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                          <ul class="c-articles_item_tags">
                            <?php
                              if ($posttags) {
                                foreach($posttags as $tag) {
                                  echo  '<li class="c-articles_item_tags_tag u-bg_orange"><a href="' . get_tag_link($tag->term_id) . '">'.$tag->name.'</a></li>';
                                }
                              }
                            ?>
                          </ul>
                        </li>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                }
              ?>
              <li class='c-articles_item_listMore'>
                <a href="/category/organize-storage/" class='c-button_listMore c-button_listMore-orange'>
                    記事一覧へ
                </a>
              </li>
            </ul>
          </section>
          <!--list cooking -->
          <section class="p-topSection">
            <div class="c-pageHeading c-pageHeading-cooking">
              <h2 class="c-pageHeading_title">整理収納の記事</h2>
            </div>
            <ul class="c-articles c-articles-listMoreRight">
              <?php
                  global $post;
                  $query = get_posts( array(
                      'post_type'       => 'post',
                      'category_name'   => 'cooking',
                      'posts_per_page'  => 5,
                      'orderby'         => 'date',
                      'order'           => 'DESC',
                  ) );
                  if ( $query ) {
                      foreach ( $query as $post ) :
                          setup_postdata( $post );
                          $posttags = get_the_tags();
                          ?>
                          <li class="c-articles_item">
                            <div class="c-articles_item_content">
                              <a href="<?php the_permalink(); ?>">
                                <img class="wp-post-image" src="<?php echo the_post_thumbnail_url()?>" alt="">
                              </a>
                            </div>
                            <span class="c-articles_item_date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
                            <h3 class="c-articles_item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <ul class="c-articles_item_tags">
                              <?php
                                if ($posttags) {
                                  foreach($posttags as $tag) {
                                    echo  '<li class="c-articles_item_tags_tag u-bg_green"><a href="' . get_tag_link($tag->term_id) . '">'.$tag->name.'</a></li>';
                                  }
                                }
                              ?>
                            </ul>
                          </li>
                      <?php
                      endforeach;
                      wp_reset_postdata();
                  }
                ?>
              <li class='c-articles_item_listMore'>
                <a href="/category/cooking/" class='c-button_listMore c-button_listMore-green'>
                  記事一覧へ
                </a>
              </li>
            </ul>
          </section>

          <section class="p-topSection">
            <ul class='c-ads'>
              <li class='c-ads_item'>
                <a>
                  <img class='c-ads_item_img' src="<?php echo URL_IMAGE?>/common/banner_1.png" alt="banner" />
                </a>
              </li>
              <li class='c-ads_item'>
                <a>
                  <img class='c-ads_item_img' src="<?php echo URL_IMAGE?>/common/banner_2.png" alt="banner"  />
                </a>
              </li>
            </ul>
          </section>

        </div>
      </div>

    </main>
  </div>
<?php get_footer(); ?>

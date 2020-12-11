<?php

get_header();

?>
  <div class="l-pageBody">
    <?php get_template_part( 'template-parts/breadcrumb/breadcrumb' ); ?>
    <div class="l-pageMainSide l-pageContent">
      <main class="l-pageMain">
        <div class="l-mainSection pageContent--archive" >
          <?php if ( have_posts() ) : ?>
            <div class='c-pageHeading c-pageHeading-archive'>
              <h2 class="c-pageHeading_title" ><?php echo get_the_category( $id )[0]->name ?></h2>
              <hr class='u-catSlug-<?php echo get_the_category( $id )[0]->slug?>'>
            </div>
            <ul class="c-caseList">
              <?php
                while (have_posts()) : the_post();
                $posttags = get_the_tags();
              ?>
              <li class='c-caseList_item'>
                <a href="<?php the_permalink() ?>">
                  <a href="<?php the_permalink(); ?>">
                    <img class="c-caseList_item_img" src="<?php echo the_post_thumbnail_url()?>" alt="">
                  </a>
                  <p class="c-caseList_item_date"><?php echo get_the_date( 'Y.m.d' ); ?></p>
                  <a href="<?php the_permalink(); ?>"><h3 class="c-caseList_item_title"><?php the_title(); ?></h3></a>
                  <ul class="c-caseList_item_tags">
                    <?php
                      if ($posttags) {
                        foreach($posttags as $tag) {
                          echo  '<li class="c-caseList_item_tags_tag u-bg_green"><a href="' . get_tag_link($tag->term_id) . '">'.$tag->name.'</a></li>';
                        }
                      }
                    ?>
                  </ul>
                </a>
              </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
          <p>記事がありません</p>
          <?php endif; ?>
        </div>

      </main>
      <aside class="l-pageSidebar">
        <?php get_sidebar(); ?>
      </aside>
    </div>

    <div class='l-pageContent'>
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
    </div>

  </div>
          
  
<?php get_footer(); ?>

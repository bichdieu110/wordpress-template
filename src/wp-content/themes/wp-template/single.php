<?php
/*
*  Single post
*/
get_header();

?>
  <div class="l-pageBody">
    <?php get_template_part( 'template-parts/breadcrumb/breadcrumb' ); ?>
    <div class="l-pageMainSide l-pageContent">
      <main class="l-pageMain">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();?>

        <div class="l-mainSection">
          <div class="p-post">
            <div class="p-post_meta">
              <p class="p-post_meta_cat">作り置き</p>
              <p class="p-post_meta_date">2020.11.06</p>
            </div>
            <h1 class="p-post_title"><?php the_title(); ?></h1>
            <div class="p-post_tags">
              <?php
                $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                    echo  '<li class="p-post_tags_tag u-bg_green"><a href="' . get_tag_link($tag->term_id) . '">'.$tag->name.'</a></li>';
                  }
                }
              ?>
            </div>
            <div class="p-post_img"><?php the_post_thumbnail()?></div>
            <div class="p-post_desc"><?php the_field('description') ?></div>
            <div class="p-post_content">
                <?php the_content(); ?>
            </div>
          </div>
        </div>

        

        <?php endwhile; ?>
        <?php else :
          get_template_part( 'content', 'none' );
        endif; ?>

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

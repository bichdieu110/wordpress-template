<?php

get_header();

?>
  <main id="main-content" class="page-content page-content--archive">
    <section class="site-content">
      <div class="container">
      <section class="entry-content" >
        <?php if ( have_posts() ) : ?>
          
          <ul class="case-list">
          <?php
            while (have_posts()) : the_post();
					?>
          <li>
            <a href="<?php the_permalink() ?>">
              <div class="case-img" style="background-image: url(<?php the_post_thumbnail_url()?>)"></div>
              <h3 class="case-title"><?php the_title();?></h3>
              <?php the_excerpt();?>
            </a>
          </li>
          <?php endwhile; ?>
        <?php else: ?>
        <p>記事がありません</p>
        <?php endif; ?>
        </section><!-- .entry-content -->
      </div>
    </section>
  </main>
<?php get_footer(); ?>
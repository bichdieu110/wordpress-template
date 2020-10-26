<?php
/*
*  Single page
*/
get_header();

?>
  <main id="main-content" class="page-singular">
    <section class="site-content">
      <div class="container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <section class="entry-content content">
            <?php the_content();?>
          </section><!-- .entry-content -->
          <?php endwhile; else: ?>
          <p>記事がありません</p>
          <?php
          // End of the loop
          endif; ?>
        </article>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
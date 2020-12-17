<?php
/*
* Template Name: News single page
*/
get_header();

?>
  <main id="main-content" class="page-content page-content--news">
    <?php get_template_part( 'template-parts/blocks/banner-news');?>
    <?php get_template_part( 'template-parts/breadcrumb/breadcrumb' ); ?>
    <section class="site-content">
      <div class="container">
      <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); 

        get_template_part( 'template-parts/post/content', 'single-news' );

      endwhile;
      ?>

      <?php else :
      get_template_part( 'content', 'none' );
      endif; ?>
      </div>
    </section>
    <?php get_template_part( 'template-parts/blocks/block-contactus');?>
  </main>
<?php get_footer(); ?>
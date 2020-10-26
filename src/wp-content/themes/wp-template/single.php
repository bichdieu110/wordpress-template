<?php
/*
*  Single post
*/
get_header();

?>
  <main id="main-content" class="page-content">
    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();

    $blocks = parse_blocks( get_the_content() );
    foreach ( $blocks as $block ) {
        if ( 'lazyblock/block01' === $block['blockName'] ) {
            echo render_block( $block );
        }
    }
    ?>
    <section class="site-content">
      <div class="container">
      <?php
        get_template_part( 'template-parts/post/content', 'single' );
      ?>
      </div>
    </section>

    <?php endwhile; ?>

    <?php else :
      get_template_part( 'content', 'none' );
    endif; ?>
  </main>
<?php get_footer(); ?>
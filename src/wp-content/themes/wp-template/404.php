<?php
/*
* Template Name: 404 page
*/
get_header();

?>
  <main id="main-content" class="page-content page-content--404">
    <section class="site-content">
      <div class="container">
        <article id="notfound" style="text-align: center">
			<h1 class="title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>SORRY...<br/>404 NOT FOUND</h1>
			<p>お探しのページは存在しません！<br/><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a>からご利用ください！</p>
		</article>
      </div>
    </section>
  </main>
<?php get_footer(); ?>

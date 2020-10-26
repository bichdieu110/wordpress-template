<section id="breadcrumb">
  <div class="container">
    <?php if(function_exists('bcn_display')) : ?>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab=”http://schema.org/”>
        <?php bcn_display(); ?>
      </div>
    <?php endif;?>
  </div>
</section>
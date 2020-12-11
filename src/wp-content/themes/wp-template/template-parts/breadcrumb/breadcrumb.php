<section class="p-breadcrumbs">
  <div class="l-pageContent">
    <?php if(function_exists('bcn_display')) : ?>
      <div class="p-breadcrumbs_list" typeof="BreadcrumbList" vocab=”http://schema.org/”>
        <?php bcn_display(); ?>
      </div>
    <?php endif;?>
  </div>
</section>

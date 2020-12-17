<?php
/*
* Template Name: News page
*/
get_header();

?>
  <main id="main-content" class="page-content page-content--news">
    <?php get_template_part( 'template-parts/blocks/banner-news');?>
    <?php get_template_part( 'template-parts/breadcrumb/breadcrumb' ); ?>
    <section class="site-content">
      <?php

        $news_category_order = array(
          'orderby'           => 'id',
          'order'             => 'DESC',
        );
        $news_term = get_terms('news_category', $news_category_order);
      ?>
      <div class="container">
        <div class="news-order">
          <form action="<?php echo home_url(); ?>" class="filter-news" id="filterNews">
            <div class="custom-select">
              <select name="archive_dropdown" id="archive_dropdown">
                <option value="">年別</option>
                <?php $years = custom_year_archive(); 
                foreach($years as $year) {
                  echo "<option value='" . $year['name'] . "'>". $year['name'] . "</option>";
                }
                ?>
              </select>
            </div>
            <div class="custom-select">
              <select name="term_dropdown" id="term_dropdown">
                <option value="">カテゴリー</option>
                <?php foreach ( $news_term as $term ) {?>
                  <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                <?php } ?>
              </select>
            </div>
          </form>
        </div>
        <div class="search-result"></div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/blocks/block-contactus');?>
  </main>
<?php get_footer(); ?>

<script type="text/javascript">
    (function($){
        ({
            init: function(){
                this.define();
                $(function(){
                    $this.loadData();
                    $this.search();
                    $this.pagination();
                    // $this.resetSearch();
                });
            },
            define: function() {
                $this = this;
            },
            loadData: function() {
                $this.getData(1, null, null, null, false);
            },
            search: function() {
                this.define();
                var $archive = '',
                    $term = [],
                    $tag = [];

                // Seach has value
                $('form.filter-news').each(function() {
                  var _form = $(this);
                    $(this).find("select").change(function(e) {

                        if(_form.find('select#archive_dropdown option').is(':selected') ){
                          $archive = _form.find('select#archive_dropdown option:selected').val();
                        };

                        if(_form.find('select#term_dropdown option').is(':selected') ){
                          $term = _form.find('select#term_dropdown option:selected').val();
                        };

                      if(($archive != '') || ($term != '')) {
                        $this.getData(1, $archive, $term, $tag, true);
                      } else {
                        $this.getData(1, $archive, $term, $tag, false);
                      }
                      $archive = '';
                      $term = [];
                      $tag = [];
                    });
                });
            },
            resetSearch: function() {
              this.define();
              $('.search-result').on('click', '.top-link', function(){
                $this.getData(1, null, null, null, false);
                $('#archive_dropdown').prop('selectedIndex',0);
                $('#term_dropdown').prop('selectedIndex',0);
                $archive = '';
                $term = [];
                $tag = [];
              });
            },
            pagination: function() {
                this.define();
                var $archive = '', $term = [], $tag = [];
                $('.search-result').on('click', '.paging a', function(){
                    var page = $(this).attr('data-page');

                    $('form.filter-news').each(function() {

                        if($(this).find('select#archive_dropdown option').is(':selected') ){
                          $archive = $(this).find('select#archive_dropdown option:selected').val();
                        };

                        if($(this).find('select#term_dropdown option').is(':selected') ){
                          $term = $(this).find('select#term_dropdown option:selected').val();
                        };
                    });

                    $this.getData(page, $archive, $term, $tag, true);
                    $archive = '';
                    $term = [];
                    $tag = [];
                });
            },
            getData: function($page, $archive = null, $term = null, $tag = null,  $back) {
                this.define();
                jQuery.ajax({
                    url: ajax_object.ajaxurl,
                    type: 'post',
                    data: {
                        action: 'ajax_get_property',
                        page: $page,
                        value: {
                          archive_dropdown: $archive,// $my_input['archive_dropdown']
                          term_dropdown: $term, // $my_input['term_dropdown']
                          term_tag: $tag // $my_input['term_tag']
                        }
                    },
                    dataType: 'html',
                    beforeSend: function() {
                        $('.search-result').empty();
                        $this.showLoading();
                        // $('html, body').animate({
                        //     scrollTop: $(".search-result").offset().top
                        // }, 1000);
                    },
                    success: function( html ) {
                        if($back) { html += '<p class="txt-center"><a href="/news" class="top-link">News Top</a></p>';}
                        $this.hideLoading();
                        $('.search-result').append( html );

                        $('#filterSchool').find('select').each(function() {
                            if( $(this).is(":disabled") ){
                                $(this).removeAttr('disabled');
                            }
                        });
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(errorThrown);
                    }
                });
            },
            showLoading: function() {
                $('.search-result').append( '<div class="content-loading"><span id="loader"></span></div>' );
            },
            hideLoading: function() {
                $('.content-loading').remove();
            }

        }.init());

    }(jQuery));
</script>
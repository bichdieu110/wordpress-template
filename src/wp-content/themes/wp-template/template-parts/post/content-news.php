<?php
/**
 * The default template for displaying content archive
 *
 */


$news_cat = wp_get_object_terms($post->ID, 'news_category');
?>
<li>
    <span class="news-date"><?php echo get_the_date(); ?></span>
    <span class="news-cat"><a href="<?php echo get_term_link($news_cat[0]->term_id)?>"><?php echo $news_cat[0]->name; ?></a></span>
    <span class="news-title"><a href="<?php the_permalink() ?>"><?php the_title();?></a></span>
</li>

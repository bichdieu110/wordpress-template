<?php
/**
 * The template for displaying content single news
 *
 */

$news_cat = wp_get_object_terms(get_the_ID(), 'news_category');
$news_tag = wp_get_object_terms(get_the_ID(), 'news_tag');
$tags = get_the_tags();
?>

<div class="post-detail post-single_page">
	<div class="post-meta">
		<span class="news-date"><?php the_date() ?></span>
		<?php if($news_cat): ?>
		<div class="cats-list">
			<?php foreach ($news_cat as $cat) { ?>
			<a href="<?php echo get_term_link($cat) ?>" class="news-cat"><?php echo $cat->name ?></a>
			<?php } ?>
			<?php foreach ($news_tag as $tag) { ?>
			<a href="<?php echo get_term_link($tag) ?>" class="news-cat"><?php echo $tag->name ?></a>
			<?php } ?>
		</div>
		<?php endif; ?>
	</div>
	<h2 class="post-title"><?php the_title(); ?></h2>
	<div class="post-content"><div class="post-content_detail"><?php the_content(); ?></div></div>
	<?php custom_post_nav();?>
</div>
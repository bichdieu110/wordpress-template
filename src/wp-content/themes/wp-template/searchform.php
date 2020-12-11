<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form id="searchform" class="searchform" action="<?php bloginfo('url'); ?>">
	<div class="search-box">
		<input type="text" id="s" class="search-field" placeholder="気になるワードを検索..." value="" name="s" aria-label="Search key"/>
		<button type="submit" class="search-btn" id="searchsubmit" aria-label="Search">
			<span class="c-search_icon"></span>
		</button>
	</div>
</form>

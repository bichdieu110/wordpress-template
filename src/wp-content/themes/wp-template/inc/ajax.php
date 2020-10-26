<?php
function ajax_get_property() {

    /***********************************************
     *  Get Data
     ***********************************************/

	$page         = $_POST['page'];
    $my_input     = $_POST['value'];

    /***********************************************
     *  Set the number of results to display
     ***********************************************/
    $cur_page     = $page;
    $page        -= 1;
    $per_page     = 10;
    $previous_btn = true;
    $next_btn     = true;
    $first_btn    = false;
    $last_btn     = false;
    $start        = $page * $per_page;

    /***********************************************
     *  Search array fields
     ***********************************************/
    $args = array(
        'post_type'         => 'news',
        'posts_per_page'    =>  $per_page,
        'offset'            =>  $start,
		'post_status'       => 'publish',
        'order'             =>  'date',
        'orderby'           =>  'DESC',
    );

    // post by year
    if ($my_input['archive_dropdown']) {
        $args['date_query'] = array(
            'year'  => $my_input['archive_dropdown']
        );
    }

    // news_category 
    if ($my_input['term_dropdown']) {
        $args['tax_query'] = array(
            array(
                'taxonomy'  => 'news_category',
                'field'     => 'id',
                'terms'     => $my_input['term_dropdown'],
            ),
        );
    }
    //var_dump($args);
    /***********************************************
     *  Query and Template output
     ***********************************************/
    // echo "<pre>";
    // print_r($args);
    // echo "<pre>";
    $wp_query = new WP_Query( $args ); //echo $wp_query->request;


    // Show template HTML
    ?>

    <ul class="news-list">

        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 
            $news_cat = wp_get_object_terms(get_the_ID(), 'news_category');
            $news_class = count($news_cat) > 1 ? 'full' : '';
        ?>

        <li>
            <span class="news-date"><?php echo get_the_date(); ?></span>
            <div class="cats-list">
                <?php foreach ($news_cat as $cat) { ?>
                <span class="news-cat"><?php echo $cat->name ?></span>
                <?php } ?>
            </div>
            <span class="news-title <?php echo $news_class?>"><a href="<?php the_permalink() ?>"><?php the_title();?></a></span>
        </li>

        <?php
         endwhile; wp_reset_postdata();?>
        <?php
            $count = $wp_query->found_posts;
            if( $count === 0 ){
                echo 'No post';
                die();
            }
        ?>
    </ul>
    <?php




    /***********************************************
     *  Pagination
     ***********************************************/
    // This is where the magic happens
    $no_of_paginations = ceil($count / $per_page);
    if ($cur_page >= 6) {
        $start_loop = $cur_page - 3;
        if ($no_of_paginations > $cur_page + 3)
            $end_loop = $cur_page + 3;
        else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 5) {
            $start_loop = $no_of_paginations - 5;
            $end_loop = $no_of_paginations;
        } else {
            $end_loop = $no_of_paginations;
        }
    } else {
        $start_loop = 1;
        if ($no_of_paginations > 6)
            $end_loop = 6;
        else
            $end_loop = $no_of_paginations;
    }

    // Pagination template
    $pag_container .= '<nav class="navigation p-pagination"><div class="nav-links paging">';
    if ($previous_btn && $cur_page > 5) {
        $pre = $cur_page - 1;
        $pag_container .= '<a data-page="'.$pre.'" class="prev page-numbers">Prev</a>';
    }
    if($end_loop > 1){
        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<a data-page='$i' class='page-numbers current'>{$i}</a>";
            else
                $pag_container .= "<a data-page='$i' class='page-numbers'>{$i}</a></li>";
        }
    }
    if ($next_btn && $cur_page < $no_of_paginations && $no_of_paginations > 5) {
        $nex = $cur_page + 1;
        $pag_container .= '<a data-page="'.$nex.'" class="page-numbers next">Next</a>';
    }

    $pag_container .= '</div></nav>';

    echo $pag_container;
    exit();
}

add_action( 'wp_ajax_ajax_get_property', 'ajax_get_property' );
add_action( 'wp_ajax_nopriv_ajax_get_property', 'ajax_get_property' );

<?php

require_once dirname( __FILE__) . '/ajax.php';

function custom_pagination()
{
    echo '<div class="p-pagination">';
    echo the_posts_pagination(array(
        'prev_text' => '&lt;',
        'next_text' => '&gt;',
    ));
    echo '</div><!-- /pagenavi -->';
}

if (!function_exists('custom_post_nav')) :
    /**
     * Display navigation to next/previous post when applicable.
     */
    function custom_post_nav()
    {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
        $next     = get_adjacent_post(false, '', false);

        if (!$next && !$previous) {
            return;
        }
        ?>
        <nav class="navigation post-navigation" role="navigation">

            <ul class="nav-links">
                <li class="nav-previous">
                <?php
                previous_post_link('%link', _x('Prev', 'Previous post link', ''), '');
                ?>
                </li>
                <li><a href="/news">News Top</a></li>
                <li class="nav-next">
                <?php
                next_post_link('%link', _x('Next', 'Next post link',''), '');
                ?>
                </li>
            </ul><!-- .nav-links -->
        </nav><!-- .navigation -->
    <?php
}
endif;

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBaSvTM9BU7oOc2SD40lA2LVq9QE5nPEgs';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/* Cleanup the archive title */
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = sprintf( __( '%s' ), single_cat_title( '', false ) );
      } elseif ( is_tag() ) {
        $title = sprintf( __( '%s' ), single_tag_title( '', false ) );
      } elseif ( is_author() ) {
        $title = sprintf( __( '%s' ), '<span class="vcard">' . get_the_author() . '</span>' );
      } elseif ( is_year() ) {
        $title = sprintf( __( '%s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
      } elseif ( is_month() ) {
        $title = sprintf( __( '%s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
      } elseif ( is_day() ) {
        $title = sprintf( __( '%s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
      } elseif ( is_tax( 'post_format' ) ) {
        if ( is_tax( 'post_format', 'post-format-aside' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
          $title = _x( '', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
          $title = _x( '', 'post format archive title' );
        }
      } elseif ( is_post_type_archive() ) {
        $title = sprintf( __( '%s' ), post_type_archive_title( '', false ) );
      } elseif ( is_tax() ) {
        $tax = get_taxonomy( get_queried_object()->taxonomy );
        $title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
      } else {
        $title = __( '' );
      }
    return $title;
});

add_action('pre_get_posts', 'query_post_type');
function query_post_type($query) {
   //Limit to main query, tag queries and frontend
   if($query->is_main_query() && !is_admin() && $query->is_tag ) {
        $query->set( 'post_type', 'column' );
   }
}

function remove_blocks($content) {
  if(get_post_type() != 'career') {
    // Check if we're inside the main loop in a post or page
    if ( ( is_single() || is_page() ) && in_the_loop() && is_main_query()) {
      //parse the blocks so they can be run through the foreach loop
      $blocks = parse_blocks( get_the_content() );
      // print_r($blocks);
      foreach ( $blocks as $block ) {
          //look to see if your block is in the post content -> if yes continue past it if no then render block as normal
          if ( 'lazyblock/block01' === $block['blockName'] ) {
              continue;
          } elseif ( 'core/shortcode' === $block['blockName'] ) {
              echo do_shortcode( $block['innerHTML'] );
          } else {
            echo render_block( $block );
          }
      }
    }
  } else {
    return $content;
  }
}

add_filter( 'the_content', 'remove_blocks');

function get_custom_single_template($single_template) {
    global $post;

    if ($post->post_type == 'case') {
        $terms = get_the_terms($post->ID, 'case_type');
        $terms_slug = $terms[0]->slug;

        $single_template = realpath(dirname( __FILE__) .'/..') . '/single-case-' . $terms_slug . '.php';

        if ( !file_exists( $single_template ) ) {
          $single_template = realpath(dirname( __FILE__) .'/..') . '/single.php';
        }
     }
    return $single_template;
}

add_filter( "single_template", "get_custom_single_template" ) ;

if (!class_exists('Fx_Walker_Nav_Menu')) {
	require_once('class-flex-walker-nav.php');
}

function get_excerpt($limit){
  $excerpt = get_the_excerpt();
  $excerpt = preg_replace(" ([.*?])",'',$excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = mb_substr($excerpt, 0, $limit);
  if(strlen(get_the_excerpt()) > strlen($excerpt)) {
    $excerpt = $excerpt.'...';
  }
  return $excerpt;
}


function custom_year_archive() {
  $years = array();
  $years_args = array(
    'type' => 'yearly',
    'format' => 'custom',
    'before' => '',
    'after' => '|',
    'echo' => false,
    'post_type' => 'news',
    'order' => 'DESC'
  );
 
  // Get Years
  $years_content = wp_get_archives($years_args);
  if (!empty($years_content) ) {
    $years_arr = explode('|', $years_content);
    $years_arr = array_filter($years_arr, function($item) {
      return trim($item) !== '';
    }); // Remove empty whitespace item from array
 
    foreach($years_arr as $year_item) {
      $year_row = trim($year_item);
      preg_match('/href=["\']?([^"\'>]+)["\']>(.+)<\/a>/', $year_row, $year_vars);
 
      if (!empty($year_vars)) {
        $years[] = array(
          'name' => $year_vars[2], // Ex: 2020
          'value' => $year_vars[1] // Ex: http://demo.com/2020/01/
        );
      }
    }
  }
  return $years;
}
//Adding pickup widget
require_once("pickup.php");
add_action( 'widgets_init', function(){
	register_widget( 'Pickup_Widget' );
});

// Disable Update Maps plugin
function disable_plugin_updates( $value ) {
  if( isset( $value->response['advanced-custom-fields-pro/acf.php'] ) ) {
      unset( $value->response['advanced-custom-fields-pro/acf.php'] );
  }
  return $value;
}
add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
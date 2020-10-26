<?php
/**
 * Widget API: WP_Widget_Pickup class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */

class Pickup_Widget extends WP_Widget {
	public function __construct() {
		$widget_options = array( 
			'classname' => 'pickup_widget',
			'description' => 'This is an Pickup Widget',
		);
		parent::__construct( 'pickup_widget', 'Pickup Widget', $widget_options );
	}

	public function widget( $args, $instance ) {
		$pickup_args = array(
            'post_type' => 'case',
			'meta_query' => array(
				array(
					'key'   => 'pick_up',
					'value' => '"pickup"',
					'compare' => 'LIKE'
				) ),
			'orderby'         => 'modified',
			'order'           => 'DESC',
        );

		$pickup_posts = get_posts($pickup_args);
		// print_r($pickup_posts);
		if($pickup_posts):
			$title = apply_filters( 'widget_title', $instance[ 'title' ] );
			echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; 
	?>

			<ul class="wpp-list">
				<?php
				foreach ($pickup_posts as $post):
					if(has_post_thumbnail($post->ID)) {
					    $img = get_the_post_thumbnail_url($post->ID, 'large');
					} else {
					    $img = URL_IMAGE . "/no-image.jpg";
					}
				?>
				<li class="post">
					<a href="<?php echo get_permalink($post->ID)?>">
						<img src="<?php echo $img; ?>">
					</a>
					<a href="<?php echo get_permalink($post->ID)?>" class="wpp-post-title">
						<?php echo $post->post_title;?>
					</a>
				</li>
				<?php endforeach; ?>
	        </ul>

			<?php echo $args['after_widget'];
		endif;
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
		</p><?php 
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
		return $instance;
	}

}
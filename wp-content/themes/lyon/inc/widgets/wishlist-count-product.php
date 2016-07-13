<?php
class WC_Widget_Wishlist_Count_Product extends WP_Widget {
	
    public function __construct() {
        parent::__construct(
            'widget_wishlist_count_product', // Base ID
            esc_html__('Wishlist Count Product', 'fajar'), // Name
            array('description' => esc_html__("Display link wishlist & count product in your wishlist.", 'fajar'),) // Args
        );
    }
	
	/* FRONT END */
    function widget($args, $instance) {
        extract(shortcode_atts($instance,$args));
		$title = apply_filters('widget_title', empty( $instance['title'] ) ?'' : $instance['title'], $instance, $this->id_base );
        $icon = isset($instance['icon']) ? $instance['icon'] : '';
        ?>
			<div class="widget_wishlist_count_product">
				<?php if( function_exists( 'YITH_WCWL' ) ) {?>
					<a href="<?php echo esc_url(YITH_WCWL()->get_wishlist_url());?>">
						<?php 
							if(!empty($icon)){
								echo "<i class='" . esc_attr($icon) . "'></i>";
							} 
							if(!empty($title)){
								echo "<div class='wishlist-page'>" . esc_attr($title) . "</div>";
							}
							echo "<div class='wishlist-count'>" . yith_wcwl_count_products() . "</div>";
						?>
					</a>
				<?php }?>
			</div>
		<?php
        echo ob_get_clean();
    }
	
	/* BACKEND - UPDATE */
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['icon'] = $new_instance['icon'];
		return $instance;
    }
	
	/* BACKEND - FORM */
    function form( $instance ) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $icon = isset($instance['icon']) ? $instance['icon'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e( 'Enter Title:', 'fajar' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_url($this->get_field_id('icon')); ?>"><?php esc_html_e( 'Enter class icon:', 'fajar' ); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id('icon') ); ?>" name="<?php echo esc_attr( $this->get_field_name('icon') ); ?>" type="text" value="<?php echo esc_attr( $icon ); ?>" />
        </p>
    <?php

    }
}

function register_wishlist_count_product_widget() {
    register_widget('WC_Widget_Wishlist_Count_Product');
}
add_action('widgets_init', 'register_wishlist_count_product_widget');
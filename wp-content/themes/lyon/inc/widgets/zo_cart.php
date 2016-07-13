<?php
class WC_Widget_Zo_Cart extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'widget_cart', // Base ID
            __('Zo Cart', 'artista'), // Name
            array('description' => __("Display the user's Cart  form in the sidebar.", 'artista'),) // Args
        );
    }
    function widget($args, $instance) {
        extract(shortcode_atts($instance,$args));
        ?>
        <?php
        $title = apply_filters('widget_title', empty( $instance['title'] ) ?'' : $instance['title'], $instance, $this->id_base );

        ob_start();
        echo isset($before_widget)?$before_widget:'';
        $before_title = isset($before_title)?$before_title:'';
        $after_title = isset($after_title)?$after_title:'';

        $total = 0;
        global $woocommerce;
        ?>
        <div class="zo-cart-widget">
            <a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" > <img width="20px" src="<?php echo  get_template_directory_uri().'/assets/images/woo/cart_icon.png';?>" alt="Cart"></a>
            <span class="title"><?php   if ( $title ) echo do_shortcode($before_title . $title . $after_title); ?></span>
            <span class="total"><?php echo do_shortcode($woocommerce->cart->get_cart_subtotal()); ?></span>
        </div>


		<?php
        echo isset($after_widget)?$after_widget:'';
        echo ob_get_clean();
    }
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
		return $instance;
    }
    function form( $instance ) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e( 'Title:', 'artista' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

    <?php

    }
}

function register_zo_cart() {
    register_widget('WC_Widget_Zo_Cart');
}
add_action('widgets_init', 'register_zo_cart');
?>
<?php
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_content');
if(!function_exists('woocommerce_header_add_to_cart_fragment')){
    function woocommerce_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;
        ob_start();
        ?>
        <span class="cart_total"><?php echo do_shortcode($woocommerce->cart->cart_contents_count); ?></span>
        <?php
        $fragments['span.cart_total'] = ob_get_clean();
        return $fragments;
    }
}
if(!function_exists('woocommerce_header_add_to_cart_content')){
    function woocommerce_header_add_to_cart_content( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <div class="shopping_cart_dropdown">
        <div class="shopping_cart_dropdown_inner">
            <?php
            $cart_is_empty = sizeof( $woocommerce->cart->get_cart() ) <= 0;
            ?>
            <ul class="cart_list product_list_widget">

                <?php if ( !$cart_is_empty ) : ?>

                    <?php foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) :

                        $_product = $cart_item['data'];

                        // Only display if allowed
                        if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
                            continue;
                        }

                        // Get price
                        $product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();

                        $product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
                        $remove_link = '<a href="' . esc_url($woocommerce->cart->get_remove_url($cart_item_key)) . '"> &times; </a>';
                        ?>

                        <li class="cart-list clearfix">
                            <a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
                                <?php echo do_shortcode($_product->get_image()); ?>
                            </a>
                            <div class="cart-list-info">
                                <h3 class="title"><?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?></h3>
                                <?php echo do_shortcode($product_price); ?>
                                <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( 'QTY: %s %s', $cart_item['quantity'], $remove_link) . '</span>', $cart_item, $cart_item_key ); ?>
                            </div>
                        </li>

                    <?php endforeach; ?>

                <?php else : ?>

                    <li class="cart-list clearfix empty"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></li>

                <?php endif; ?>

            </ul>
            <?php if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) : ?>
                <div class="cart-total">
                    <span class="total"><?php _e( 'Sub Total', 'woocommerce' ); ?>:<span><?php echo do_shortcode($woocommerce->cart->get_cart_subtotal()); ?></span></span>
                    <a href="<?php echo esc_url($woocommerce->cart->get_checkout_url()); ?>" class="btn btn-primary btn-checkout"><?php _e( 'Process To Checkout', 'artista'); ?></a>
                    <a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" class="btn btn-cart"><?php _e( 'View Shopping Cart', 'artista'); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
    $fragments['div.shopping_cart_dropdown'] = ob_get_clean();
    return $fragments;
}
}
?>
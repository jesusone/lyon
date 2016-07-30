<?php
/* get categories */
$taxonomy = 'categories-pricing';
$_category = array();
if(!isset($atts['cat']) || $atts['cat']=='' && taxonomy_exists($taxonomy)){
    $terms = get_terms($taxonomy);
    foreach ($terms as $cat){
        $_category[] = $cat->term_id;
    }
} else {
    $_category  = explode(',', $atts['cat']);
}
$atts['categories'] = $_category;

?>

<div class="yeah-grid-wrapper zo-pricing-default <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <div class="zo-grid <?php echo esc_attr($atts['grid_class']);?> zo-gird-pricing-item-wrap">
        <?php
        $posts = $atts['posts'];
        $i = 1;
        while($posts->have_posts()) :
            $posts->the_post();
            $pricing_meta = zo_post_meta_data();
            $zo_title_size = isset( $atts['zo_title_size'] ) ? $atts['zo_title_size'] : 'h2';
        ?>
            <div class="zo-pricing-item <?php echo 0 === $i++ % 2 ? 'even' : 'odd'; ?> <?php echo esc_attr($atts['item_class']);?> <?php echo ( $pricing_meta->_zo_is_feature == 1 ) ? ' pricing-feature-item' : '' ?> ">
                <div class="zo-pricing-inner">
                    <h2 class="zo-pricing-title" style="background-color: <?php echo esc_attr($pricing_meta->_zo_color); ?>"><?php the_title();?></h2>
                    <?php if ( $pricing_meta->_zo_is_feature == 1 ) : ?>
                        <span class="featured"><?php esc_html_e('Popular', 'fajar'); ?></span>
                    <?php endif; ?>

                    <div class="zo-pricing-price">
                        <sup><?php esc_html_e('$', 'fajar'); ?></sup>
                        <span class="price"><?php echo esc_attr($pricing_meta->_zo_price); ?></span>
                        <div class="time"><?php esc_html_e('per', 'fajar'); ?> <?php echo esc_attr($pricing_meta->_zo_value); ?></div>
                    </div>

                    <div class="zo-pricing-meta">
                        <?php the_content(); ?>
                    </div>
                    <div class="zo-pricing-button">
                        <?php printf('<a class="btn-pricing" href="%s">%s <i class="fa fa-chevron-circle-right"></i></a>', esc_url($pricing_meta->_zo_button_url), esc_attr($pricing_meta->_zo_button_text) ) ; ?>
                    </div>
                </div>
             </div>
        <?php
        endwhile;
    wp_reset_postdata();
    ?>
</div>
</div>
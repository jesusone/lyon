<?php
$uqid = uniqid();
$class_link = 'zo-fancyboxes-' . $uqid;

$yeah_carousel = isset($atts['yeah_carousel']) && $atts['yeah_carousel'] == 'yes'  ? $atts['yeah_carousel'] : 'no';
$class_carousel = $yeah_carousel=='yes' ? 'yeah-carousel-'.esc_attr($atts['html_id']) : 'row';
$columns = ((int)$atts['zo_cols']) ? (int)$atts['zo_cols'] : 1;

if($yeah_carousel == 'yes'){
    $atts['item_class'] = '';
    wp_enqueue_style('owl-carousel',ZO_CSS.'owl.carousel.css','','2.0.0b','all');
    wp_enqueue_script('owl-carousel',ZO_JS.'owl.carousel.js',array('jquery'),'2.0.0b', true);
    wp_enqueue_script('owl-autoplay',ZO_JS.'owl.autoplay.js',array('jquery'),'2.0.0b', true);
    wp_enqueue_script('owl-navigation',ZO_JS.'owl.navigation.js',array('jquery'),'2.0.0b', true);
    wp_enqueue_script('owl-animate',ZO_JS.'owl.animate.js',array('jquery'),'2.0.0b', true);
    ?>
    <script type="application/javascript">
        jQuery(document).ready(function(){
            jQuery('.yeah-carousel-zo-fancy-box').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                dots:true,
                items: 1,
            })

        })
    </script>
<?php
}
?>
<div class="<?php echo esc_attr($class_link); ?> zo-fancyboxes-wraper zo-fancybox-default <?php echo esc_attr($atts['template']); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">
    <?php if ($atts['title'] != ''): ?>
        <div class="yeah-fancyboxes-head">
            <div class="yeah-fancyboxes-title">
                <?php echo apply_filters('the_title', $atts['title']); ?>
            </div>
            <div class="yeah-fancyboxes-description">
                <?php echo apply_filters('the_content', $atts['description']); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="yeah-fancyboxes-body">
        <div class="<?php echo esc_attr($class_carousel);?>">
            <?php

            $zo_title_size = isset($atts['zo_title_size']) ? $atts['zo_title_size'] : 'h2';
            $zo_fancybox_icon_color = isset($atts['zo_fancybox_icon_color']) ? $atts['zo_fancybox_icon_color'] : '';
            $zo_fancybox_title_color = isset($atts['zo_fancybox_title_color']) ? $atts['zo_fancybox_title_color'] : '';
            $zo_fancybox_content_color = isset($atts['zo_fancybox_content_color']) ? $atts['zo_fancybox_content_color'] : '';

            for ($i = 1; $i <= $columns; $i++) :
                $icon = isset($atts['icon' . $i]) ? $atts['icon' . $i] : '';
                $content = isset($atts['description' . $i]) ? $atts['description' . $i] : '';
                $image = isset($atts['image' . $i]) ? $atts['image' . $i] : '';
                $title = isset($atts['title' . $i]) ? $atts['title' . $i] : '';
                $button_link = isset($atts['button_link' . $i]) ? $atts['button_link' . $i] : '';
                $image_url = '';
                if (!empty($image)) {
                    $attachment_image = wp_get_attachment_image_src($image, 'full');
                    $image_url = $attachment_image[0];
                }
                ?>
                <div class="yeah-fancybox-item <?php echo esc_attr($atts['item_class']); ?>">
                    <div class="yeah-fancybox-inner">
                        <?php if ($image_url): ?>
                            <div class="yeah-fancybox-image">
                                <img src="<?php echo esc_attr($image_url); ?>" alt=""/>
                            </div>
                        <?php else: ?>
                            <div class="zo-fancybox-content-icon">
                                <i class="<?php echo esc_attr($icon); ?>" style="color: <?php echo esc_attr($zo_fancybox_icon_color); ?>;"></i>
                            </div>
                        <?php endif; ?>
                        <div class="yeah-fancybox-details">
                            <?php if ($title): ?>
                                <div class="yeah-fancybox-content-title">
                                    <<?php echo esc_attr($zo_title_size); ?> class="zo-fancybox-title" style="color: <?php echo esc_attr($zo_fancybox_title_color); ?>;"> <?php echo apply_filters('the_title', $title); ?></<?php echo esc_attr($zo_title_size); ?>>
                                </div>
                            <?php endif; ?>
                            <?php if( $content) : ?>
                                <div class="yeah-fancybox-content" style="color: <?php echo esc_attr($zo_fancybox_content_color); ?>;">
                                    <?php echo apply_filters('the_content', $content); ?>
                                </div>
                            <?php endif ;?>

                            <?php if($atts['button_text']!=''):?>
                                <div class="yeah-fancyboxes-readmore">
                                    <?php
                                    $class_btn = ($atts['button_type']=='button')?'btn btn-large':'btn btn-default btn-white';
                                    ?>
                                    <a href="<?php echo esc_url($button_link);?>" class="<?php echo esc_attr($class_btn);?>"><?php echo esc_attr($atts['button_text']);?></a>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>
        </div>
    </div>
</div>
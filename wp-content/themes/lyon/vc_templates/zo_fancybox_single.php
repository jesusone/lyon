<?php 
	$icon_name = "icon_" . $atts['icon_type'];
	$iconClass = isset($atts[$icon_name])?$atts[$icon_name]:'';
    $yeah_fancybox_style = isset($atts['zo_fancybox_style']) ? $atts['zo_fancybox_style'] : '';
?>
<div class="yeah-fancyboxes-wraper <?php echo esc_attr($yeah_fancybox_style); ?> <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['title']!=''):?>
        <div class="yeah-fancyboxes-head">
            <div class="yeah-fancyboxes-title">
                <?php echo apply_filters('the_title',$atts['title']);?>
            </div>
            <div class="yeah-fancyboxes-description">
                <?php echo apply_filters('the_content',$atts['description']);?>
            </div>
        </div>
    <?php endif;?>
    <div class="yeah-fancyboxes-body">
        <div class="yeah-fancybox-item">
            <?php
            $button_link = isset($atts['button_link']) ? $atts['button_link'] : '';
            $image_url = '';
            if (!empty($atts['image'])) {
                $attachment_image = wp_get_attachment_image_src($atts['image'], 'full');
                $image_url = $attachment_image[0];
            }
            ?>
            <div class="yeah-fancybox-header">
                <?php if($image_url):?>
                    <div class="yeah-fancybox-icon yeah-fancybox-image">
                        <img src="<?php echo esc_attr($image_url);?>" />
                    </div>
                <?php else:?>
                    <div class="fancybox-icon fancybox-font">
                        <i class="<?php echo esc_attr($iconClass);?>"></i>
                    </div>
                <?php endif;?>
                <?php if($atts['title_item']):?>
                    <h3 class="fancybox-title"><?php echo apply_filters('the_title',$atts['title_item']);?></h3>
                <?php endif;?>
            </div>
            <?php if( isset($atts['description_item']) && $atts['description_item']): ?>
            <div class="yeah-fancybox-content">
                <?php echo apply_filters('the_content',$atts['description_item']);?>
            </div>
            <?php endif; ?>
            <?php if($atts['button_text']!=''):?>
                <div class="yeah-fancybox-footer">
                    <?php
                    $class_btn = ($atts['button_type']=='button')?'btn btn-large':'';
                    ?>
                    <a href="<?php echo esc_url($atts['button_link']);?>" class="<?php echo esc_attr($class_btn);?>"><?php echo esc_attr($atts['button_text']);?></a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
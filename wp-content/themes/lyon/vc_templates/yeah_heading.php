<?php
    $button = '';
    echo '<style type="text/css" data-type="zo-heading-custom-css">';
    /* Custom style Icon */
    echo '#' . esc_attr($atts['html_id']) . ' .zo-heading-main{';
    echo 'text-align: ' . $atts['align'] . ';';
    if(!empty($atts['font_size']) && is_numeric($atts['font_size'])){
        echo 'font-size:' . $atts['font_size'] . 'px;';
    }
    if(!empty($atts['heading_color'])){
        echo 'color:' . $atts['heading_color'] . ';';
    }
    if(!empty($atts['line_height']) && is_numeric($atts['line_height'])){
        echo 'line-height:' . $atts['line_height'] . 'px;';
    }
    echo '}';
    /* Custom style title */
    echo '#' . esc_attr($atts['html_id']) . ' .zo-heading-sub{';
    echo 'text-align: ' . $atts['sub_align'] . ';';
    if(!empty($atts['sub_font_size']) && is_numeric($atts['sub_font_size'])){
        echo 'font-size:' . $atts['sub_font_size'] . 'px;';
    }
    if(!empty($atts['sub_color'])){
        echo 'color:' . $atts['sub_color'] . ';';
    }
    if(!empty($atts['sub_line_height']) && is_numeric($atts['sub_line_height'])){
        echo 'line-height:' . $atts['sub_line_height'] . 'px;';
    }
    echo '}';
    if($atts['link_button']=='yes'){
        echo '#' . esc_attr($atts['html_id']) . ' .zo-heading-button{';
        echo 'text-align: ' . $atts['link_button_align'] . ';';
        echo '}';
    }
    echo '</style>';
?>
<div class="zo-heading-wraper <?php echo esc_attr($atts['class']) . ' ' . esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
        if($atts['is_title'] && !empty($atts['title_number'])){
            $atts['text'] = '<span class = "zo-heading-title-number">' . $atts['title_number'] . '</span>' . $atts['text'];
        }
        if ( !empty($atts['link']) && preg_match('/url/',$atts['link'])) {
            $link = zo_build_link( $atts['link'] );
            if($atts['link_heading']=='yes'){
                $atts['text'] = '<a href="' . esc_attr( $link['url'] ) . '"'
                    . ( $link['target'] ? ' target="' . esc_attr( $link['target'] ) . '"' : '' )
                    . ( $link['title'] ? ' title="' . esc_attr( $link['title'] ) . '"' : '' )
                    . '>' . $atts['text'] . '</a>';
            }
            if($atts['link_button']=='yes'){
                $button = '<a href="' . esc_attr( $link['url'] ) . '"'
                    . ( $link['target'] ? ' target="' . esc_attr( $link['target'] ) . '"' : '' )
                    . ( $link['title'] ? ' title="' . esc_attr( $link['title'] ) . '"' : '' )
                    . ' class="' . $atts['link_button_class'] . '"'
                    . '>' . $link['title'] . '</a>';
            }
        }
        if($atts['is_sub']=='yes' && !empty($atts['sub_text'])){
            if($atts['sub_position']=='above'){
                echo '<' . $atts['sub_element'] . ' class="zo-heading-sub">' . $atts['sub_text'] . '</' . $atts['sub_element'] . '>';
                echo '<' . $atts['element'] . ' class="zo-heading-main">' . $atts['text'] . '</' . $atts['element'] . '>';
            }else{
                echo '<' . $atts['element'] . ' class="zo-heading-main">' . $atts['text'] . '</' . $atts['element'] . '>';
                echo '<' . $atts['sub_element'] . ' class="zo-heading-sub">' . $atts['sub_text'] . '</' . $atts['sub_element'] . '>';
            }
        }else{
            echo '<' . $atts['element'] . ' class="zo-heading-main">' . $atts['text'] . '</' . $atts['element'] . '>';
        }
        if($atts['link_button']=='yes' && !empty($button)){
            echo '<div class="zo-heading-button">' . $button . '</div>';
        }
    ?>
</div>

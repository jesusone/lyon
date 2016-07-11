<div class="zo-counter-wraper zo-counter-layout-default <?php echo esc_attr($atts['template']); ?>"
     id="<?php echo esc_attr($atts['html_id']); ?>">
    <div class="row zo-counter-body">
        <?php
        $title = isset($atts['title']) ? $atts['title'] : '';
        $icon = isset($atts["icon_" . $atts['icon_type']]) ? $atts["icon_" . $atts['icon_type']] : '';
        $type = isset($atts['type']) ? $atts['type'] : '';
        $suffix = isset($atts['suffix']) ? $atts['suffix'] : '';
        $prefix = isset($atts['prefix']) ? $atts['prefix'] : '';
        $digit = isset($atts['digit']) ? $atts['digit'] : '60';
        $grouping = isset($atts['grouping']) ? $atts['grouping'] : 'false';
        $separator = isset($atts['separator']) ? $atts['separator'] : ',';
        $description = isset($atts['description']) ? $atts['description'] : '';
        ?>
        <div class="zo-counter-item">
            <?php if ($icon): ?>
                <span class="zo-icon"><i class="<?php echo esc_attr($icon); ?>"></i></span>
            <?php endif; ?>
            <div id="counter_<?php echo esc_attr($atts['html_id'] . '_item_'); ?>"
                 class="zo-counter <?php echo esc_attr(strtolower($type)); ?>"
                 data-prefix="<?php echo esc_attr($prefix); ?>" data-suffix="<?php echo esc_attr($suffix); ?>"
                 data-type="<?php echo esc_attr(strtolower($type)); ?>" data-digit="<?php echo esc_attr($digit); ?>"
                 data-grouping="<?php echo esc_attr($grouping); ?>"
                 data-separator="<?php echo esc_attr($separator); ?>">
            </div>
            <?php if ($title): ?>
                <h3><?php echo apply_filters('the_title', $title); ?></h3>
            <?php endif; ?>
            <?php if ($description): ?>
                <div class="zo-counter-description"><?php echo apply_filters('the_content', $description); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
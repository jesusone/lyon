<?php
/* Get Categories */
$taxonomy = 'category';
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
<div class="yeah-carousel-wrap">

    <?php if ( $atts['filter'] == "true" && !$atts['loop'] ): ?>
        <div class="yeah-carousel-filter">
            <ul>
                <li><a class="active" href="#" data-group="all"><?php esc_html_e("All", 'ohyeahthemes');?></a></li>
                <?php
                $posts = $atts['posts'];
                $query = $posts->query;
                $taxs  = array();
                if(isset($query['tax_query'])){
                    $tax_query=$query['tax_query'];
                    foreach($tax_query as $tax){
                        if(is_array($tax)){
                            $taxs[] = $tax['terms'];
                        }
                    }
                }
                foreach ($atts['categories'] as $category):
                    if(!empty($taxs)){
                        if(in_array($category,$taxs)) {
                            $term = get_term($category, $taxonomy);
                            ?>
                            <li><a href="#" data-group="<?php echo esc_attr('category-' . $term->slug); ?>"><?php echo esc_attr($term->name); ?></a></li>
                        <?php 		}
                    }else{
                        $term = get_term($category, $taxonomy);
                        ?>
                        <li><a href="#" data-group="<?php echo esc_attr('category-' . $term->slug); ?>"><?php echo esc_attr($term->name); ?></a></li>
                        <?php
                    }
                endforeach;
                ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="yeah-carousel <?php echo esc_attr($atts['template']); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">
        <?php
        $posts = $atts['posts'];
        while ($posts->have_posts()) :
            $posts->the_post();
            $groups = array();
            $groups[] = 'zo-carousel-filter-item all';
            foreach (zoGetCategoriesByPostID(get_the_ID(), $taxonomy) as $category) {
                $groups[] = 'category-' . $category->slug;
            }

            ?>
            <div class="yeah-carousel-item <?php echo implode(' ', $groups);?>">
                <?php
                if (has_post_thumbnail() && !post_password_required() && !is_attachment() && wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
                    $class = ' has-thumbnail';
                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'medium');
                else:
                    $class = ' no-image';
                    $thumbnail = '<img src="' . ZO_IMAGES . 'no-image.jpg" alt="' . get_the_title() . '" />';
                endif;
                echo '<div class="yeah-carousel-media ' . esc_attr($class) . '">' . $thumbnail . '</div>';
                ?>
                <h3 class="yeah-carousel-title">
                    <?php the_title();?>
                </h3>
                <?php  $team_meta = zo_post_meta_data(); ?>
                <div class="yeah-team-position">
                   <?php echo esc_attr($team_meta->_zo_team_position); ?>
                </div>
                <div class="yeah-carousel-content">
                    <?php  the_excerpt(); ?>
                </div>
            </div> <!--End Item-->
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>
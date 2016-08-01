<?php
/* Get Categories */
$taxonomy = 'testimonial-category';
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
            <?php  $test_meta = yeah_post_meta_data(); ?>
            <div class="yeah-carousel-item <?php echo implode(' ', $groups);?>">
                <?php
                if (has_post_thumbnail() && !post_password_required() && !is_attachment() && wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false)):
                    $class = ' has-thumbnail';
                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'medium');
                else:
                    $class = ' no-image';
                    $thumbnail = '<img src="' . ZO_IMAGES . 'no-image.jpg" alt="' . get_the_title() . '" />';
                endif;
                echo '<div class="yeah-grid-media ' . esc_attr($class) . '">' . $thumbnail . '</div>';
                ?>
                <div class="yeah-carousel-info">
                    <div class="yeah-carousel-header">
                        <div class="yeah-carousel-title">
                            <?php the_title();?>
                        </div>
                        <div class="yeah-ratings">
                            <?php $rate = (int)$test_meta->_zo_rating;
                             for($i=1; $i <= 5 ; $i ++){
                                 if($i <= $rate ) {
                                     ?>
                                     <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars_crystal/rating_on.gif" alt="1 Star" title="1 Star" onmouseover="current_rating(2089, 1, '1 Star');" onmouseout="ratings_off(5, 0, 0);" onclick="rate_post();" onkeypress="rate_post();" style="cursor: pointer; border: 0px;">
                                <?php
                                 }
                                 else {
                                     ?>
                                     <img src="<?php echo get_template_directory_uri() ?>/assets/images/stars_crystal/rating_off.gif" alt="1 Star" title="1 Star" onmouseover="current_rating(2089, 1, '1 Star');" onmouseout="ratings_off(5, 0, 0);" onclick="rate_post();" onkeypress="rate_post();" style="cursor: pointer; border: 0px;">
                                <?php
                                 }
                             }
                            ?>
                        </div>
                    </div>
                    <div class="yeah-carousel-position">
                        <?php echo esc_attr($test_meta->_zo_testimonial_position);?>
                    </div>
                    <div class="yeah-description">
                        <?php echo yeah_limit_words(get_the_excerpt(),50); ?>
                    </div>
                </div>


            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>
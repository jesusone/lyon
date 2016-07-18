<?php 
    /* get categories */
        $taxo = 'portfolio-category';
        $_category = array();
        if(!isset($atts['cat']) || $atts['cat']==''){
            $terms = get_terms($taxo);
            foreach ($terms as $cat){
                $_category[] = $cat->term_id;
            }
        } else {
            $_category  = explode(',', $atts['cat']);
        }
        $atts['categories'] = $_category;
?>
<div class="yeah-grid-wrapper <?php echo esc_attr($atts['template']);?> <?php echo esc_attr($atts['zo_full_width']); ?>" id="<?php echo esc_attr($atts['html_id']);?>">
    
	<!-- Get Filter Query -->
	<?php if (isset($atts['filter']) && $atts['filter'] == 1 && $atts['layout'] == 'masonry'): ?>
        <div class="yeah-grid-filter">
            <ul class="yeah-filter-category list-unstyled list-inline">
                <li><a class="active" href="#" data-group="all"><?php esc_html_e("All", 'fajar');?></a></li>
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
	
    <div class="row <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        $size = ( isset($atts['layout']) && $atts['layout']=='basic')?'thumbnail':'medium';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            foreach(zoGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="zo-portfolio-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <div class="zo-portfolio-inner">
                    <?php if(has_post_thumbnail()) echo zo_post_thumbnail(490, 375, true); ?>
                    <div class="zo-portfolio-overlay">
                        <div class="zo-portfolio-overlay-inner">
                            <h2 class="zo-portfolio-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                            <div class="zo-portfolio-categories">
                                <?php echo get_the_term_list( get_the_ID(), $taxo, '', ' / ', '' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    wp_reset_postdata();
    ?>
</div>
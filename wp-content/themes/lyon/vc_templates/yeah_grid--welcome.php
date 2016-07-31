<?php 
    /* get categories */
        $taxo = 'category';
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
<div class="yeah-grid-wrapper <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">

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
	
    <div class="row zo-grid <?php echo esc_attr($atts['grid_class']);?>">
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
            <div class="zo-grid-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                    <div class="post-inner">
                        <div class="flx-entry-thumb">
                            <?php
                                switch(get_post_format(get_the_ID())){
                                    case  '':
                                        ?>
                                        <a title="<?php echo wp_strip_all_tags(get_the_title()); ?>" href="<?php the_permalink() ?>" rel=""><?php the_post_thumbnail( 'full' ); ?></a>
                                        <?php
                                        break;
                                    case  'video':
                                         echo yeah_archive_video();
                                    break;
                                }
                            ?>
                        </div>
                        <div class="entry-content">
                            <header>
                                <h2 class="entry-title">
                                    <a rel="bookmark" href=" <?php the_permalink();?>"> <?php the_title();?></a>
                                </h2>
                            </header>
                            <p class="excerpt">
                               <?php echo yeah_limit_words(get_the_excerpt(),50); ?>
                            </p>
                            <div class="footer-content">
                                <a href="<?php the_permalink(); ?>" class="btn-primary more-link btn-ripple"><?php echo esc_html__('LEARN MORE','lyon'); ?></a>
                            </div>
                        </div>
                        <div class="k2t-blog-social pull-left">
                            <div class="k2t-social-share post">
                                <?php echo yeah_social_share(); ?>
                            </div>
                        </div>
                    <div>
                </article>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    wp_reset_postdata();
    ?>
</div>
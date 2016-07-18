<?php
/**
 * The default template for displaying content
 *
 *
 * @package ZoTheme
 * @subpackage Zo Theme
 * @since 1.0.0
 */
?>

<?php
$meta_data = zo_post_meta_data();
$images = !empty($meta_data->_zo_portfolio_images) ? $meta_data->_zo_portfolio_images : '';
$image_ids = explode(',', $images);
?>
<article id="portfolio-<?php the_ID(); ?>" <?php post_class('portfolio-gallery'); ?>>
    <div id="portfolio-gallery-<?php the_ID(); ?>" class="zo-slick">
        <?php foreach ($image_ids as $image_id) : ?>
            <?php
            $attachment_image = wp_get_attachment_image_src($image_id, 'full', false);
            if($attachment_image[0] != ''):
            ?>
                <div>
                    <img src="<?php echo esc_url($attachment_image[0]);?>" alt="" />
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <?php if(has_post_thumbnail()) : ?>
        <div class="zo-portfolio-image">
            <?php the_post_thumbnail( 'full' ); ?>
        </div>
    <?php endif ?>
    <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <div class="zo-portfolio-detail">
                <h2 class="zo-portfolio-title"><?php the_title(); ?></h2>
                <div class="zo-portfolio-content">
                    <?php the_content();
                    wp_link_pages( array(
                        'before'      => '<p class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fajar' ) . '</span>',
                        'after'       => '</p>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fajar' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) );
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="zo-portfolio-info">
                <div class="portfolio-item">
                    <label><?php _e('Client', 'fajar'); ?></label>
                    <span><?php echo esc_attr($meta_data->_zo_portfolio_client) ?></span>
                </div>
                <div class="portfolio-item">
                    <label><?php _e('Date', 'fajar'); ?></label>
                    <span><?php echo mysql2date('M d Y', $meta_data->_zo_portfolio_date) ?></span>
                </div>
                <div class="portfolio-item">
                    <label><?php _e('Skills', 'fajar'); ?></label>
                    <span><?php echo esc_attr($meta_data->_zo_portfolio_skills) ?></span>
                </div>
                <a href="<?php echo !empty($meta_data->_zo_portfolio_url) ? $meta_data->_zo_portfolio_url : '#'; ?>" class="btn btn-primary"><?php _e('View Project', 'fajar'); ?></a>
            </div>
        </div>
    </div>

    <?php zo_post_nav(); ?><!-- pagination -->
</article>

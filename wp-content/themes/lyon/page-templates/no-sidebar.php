<?php
/**
 * Template Name: No Sidebar For Shop
 *
 * @package ZoTheme
 * @subpackage Zo Theme
 * @since 1.0.0
 * @author ZoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
global $breadcrumb, $pagetitle, $product;

get_header(); ?>

<?php global $product; ?>
    <div id="page-front-page">
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-content none-sidebar woocommerce">
                    <div id="content" role="main">
                        <div class="product-filter">
                            <?php if(is_active_sidebar('sliders-filter-product')){ dynamic_sidebar('sliders-filter-product'); } ?>
                        </div>
                        <?php
                        ob_start();
                        global $wp_query, $paged;
                        $num = isset($_GET['numberShow']) ? $_GET['numberShow'] : 8;
                        $order = isset( $_GET['selectOrder'] ) ? $_GET['selectOrder'] : 'bestsellers';

                        $query_args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => $num,
                            'paged'         => $paged,
                            'order'          => 'asc',
                        );

                        $query_args['meta_query'] = array();
                        $query_args['meta_query'][] = WC()->query->stock_status_meta_query();
                        $query_args['meta_query']   = array_filter( $query_args['meta_query'] );

                        ?>

                        <?php $wp_query->query($query_args); ?>

                        <?php if ( have_posts() ) : ?>
                            <div class="nav-top">
                                <?php zo_paging_nav(); ?>
                            </div>
                            <div class="products">
                                <?php
                                while ( have_posts() ) : the_post();
                                    ob_start();
                                    wc_get_template( 'woocommerce/content-product.php', array('columns'=>4) );
                                    $content_product = ob_get_contents();
                                    ob_end_clean();
                                    echo $content_product;
                                endwhile;
                                ?>
                                <?php zo_paging_nav(); ?>
                            </div>
                        <?php else : ?>
                            <?php wc_get_template( 'loop/no-products-found.php' ); ?>
                        <?php endif; ?>
                        <?php
                        wp_reset_postdata();
                        $content = ob_get_clean();
                        echo ent2ncr( $content );
                        ?>
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div>
        </div>
    </div>
<?php get_footer();
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
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
	<!-- Link -->
    <div class="yeah-blog-link">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail( 'full' ); ?>
            <div class="overlay-link">
                <span class="link"><?php echo zo_archive_link(); ?></span>
            </div>
        <?php else : ?>
            <?php echo zo_archive_link(); ?>
        <?php endif; ?>
    </div>
	
	<!-- Meta -->
	<div class="yeah-blog-meta"><?php zo_archive_detail(); ?></div>
	
	<!-- Title -->
	<h2 class="yeah-blog-title"><?php the_title(); ?></h2>
	
	<!-- Detail -->
    <div class="yeah-blog-detail">
        <div class="yeah-blog-content">
            <?php
				if(zo_archive_link()) {
					echo apply_filters('the_content', preg_replace('/<a(.*)href=\"(.*)\"(.*)<\/a>/', '', get_the_content()));
				} else {
					the_content();
				}
				wp_link_pages( array(
					'before'      => '<p class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'brando' ) . '</span>',
					'after'       => '</p>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'brando' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
        </div>
    </div>
</article>

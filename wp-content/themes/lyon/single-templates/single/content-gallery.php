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
	<!-- Gallery -->
    <div class="yeah-blog-gallery">
        <?php echo zo_archive_gallery( 'full' ); ?>
    </div>
	
	<!-- Meta -->
	<div class="yeah-blog-meta"><?php zo_archive_detail(); ?></div>
	
	<!-- Title -->
	<h2 class="yeah-blog-title"><?php the_title(); ?></h2>
	
	<!-- Detail -->
    <div class="yeah-blog-detail">
        <div class="yeah-blog-content">
            <?php
				if(zo_archive_gallery()){
					echo apply_filters('the_content', preg_replace('/\[gallery.*ids=.(.*).\]/', '', get_the_content()));
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

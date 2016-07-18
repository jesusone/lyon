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
	<!-- Audio -->
    <div class="yeah-blog-audio">
        <?php echo zo_archive_audio(); ?>
    </div>
	
	<!-- Meta -->
	<div class="yeah-blog-meta"><?php zo_archive_detail(); ?></div>
	
	<!-- Title -->
	<h2 class="yeah-blog-title"><?php the_title(); ?></h2>
	
	<!-- Detail -->
    <div class="yeah-blog-detail">
        <div class="yeah-blog-content">
            <?php
				if(zo_archive_audio()) {
					echo apply_filters('the_content', preg_replace(array('/\[embed(.*)](.*)\[\/embed\]/', '/\[audio(.*)](.*)\[\/audio\]/'), '', get_the_content(), 1));
				} else {
					the_excerpt();
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

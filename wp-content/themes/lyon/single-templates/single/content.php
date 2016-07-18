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
    <?php if(has_post_thumbnail()) : ?>
	<!-- Thumb -->
    <div class="yeah-blog-image">
        <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel=""><?php the_post_thumbnail( 'full' ); ?></a>
    </div>
    <?php endif; ?>
	
	<!-- Meta -->
	<div class="yeah-blog-meta"><?php zo_archive_detail(); ?></div>
	
	<!-- Title -->
	<h2 class="yeah-blog-title"><?php the_title(); ?></h2>
	
	<!-- Detail -->
    <div class="yeah-blog-detail">
        <div class="yeah-blog-content">
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
</article>

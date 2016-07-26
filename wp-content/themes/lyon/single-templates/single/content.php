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
	<!-- Title -->
	<h2 class="yeah-blog-title"><?php the_title(); ?></h2>
	<!-- Meta -->
	<div class="yeah-blog-meta"><?php yeah_archive_detail(); ?></div>
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
	<div class="yeah-social-share post">
		<ul class="social">
			<li class="post_share"><?php echo esc_html__('Share:','lyon');?></li>
			<li>
				<a class="facebook" href="http://www.facebook.com/sharer.php?u=http://dev.sunrisetheme.com/lyon/template-featured-image-vertical/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-facebook"></i>
					<span><?php echo esc_html__('Facebook','lyon') ?></span>
				</a>
			</li>
			<li>
				<a class="twitter" href="https://twitter.com/share?url=http://dev.sunrisetheme.com/lyon/template-featured-image-vertical/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-twitter"></i>
					<span><?php echo esc_html__('Twitter','lyon') ?></span>
				</a>
			</li>
			<li>
				<a class="google" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=" title="Google Plus">
					<i class="fa fa-google-plus"></i>
					<span><?php echo esc_html__('Google Plus','lyon') ?></span>
				</a>
			</li>
			<li>
				<a class="tumblr" href="https://www.tumblr.com/share/link?url=" title="Tumblr">
					<i class="fa fa-tumblr"></i>
					<span><?php echo esc_html__('Tumblr','lyon') ?></span>
				</a>
			</li>
			<li>
				<a class="em" href="#">
					<i class="fa fa-pinterest-p"></i>
					<span><?php echo esc_html__('Pinterest','lyon') ?></span>
				</a>
			</li>
		</ul>
		<!-- .social -->
	</div>
	<!-- .social-share -->
	<div class="clearfix yeah-border-tag">
		<div class="widget_tag_cloud tag_post_current">
			<div class="tagcloud"><span><?php echo esc_html__('TAGS:','lyon');?></span>
				<?php the_terms( get_the_ID(), 'tags', '', ' , ' );  ?>
			</div>
		</div>
	</div>
</article>

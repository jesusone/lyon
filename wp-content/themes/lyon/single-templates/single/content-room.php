<?php
wp_enqueue_script('owl-carousel');
wp_enqueue_style('owl-carousel');
/**
 * The default template for displaying content
 *
 *
 * @package ZoTheme
 * @subpackage Zo Theme
 * @since 1.0.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item clearfix'); ?>>
	<!--yeah title room-->
	<div class="yeah-title">
		<?php
		$_regular_price = get_post_meta($post->ID, 'yeah_regular_price', true);
		$currency = "$";
		?>
		<h3 class="h"><?php the_title(); ?>
			<span class="price pull-right">
			<span class="amount"><?php echo $currency.' '.number_format(esc_attr($_regular_price),0,".","."); ?></span>
			<span class="day">/ night</span>
		</span>
		</h3>
	</div>
    <?php if(has_post_thumbnail()) : ?>
	<!-- Thumb -->
	<?php
		$gallery = zo_post_meta_data();
		if(!empty($gallery->_zo_portfolio_images)){
			?>
			<div class="yeah-blog-image yeah-room-gallery">
				<div class="k2t-thumb-gallery">
					<?php
					$gallery_array = array();
					$gallery_array = explode(',',$gallery->_zo_portfolio_images);
					 array_unshift($gallery_array,get_post_thumbnail_id());
					foreach ($gallery_array as $gallery_item){
						$url = wp_get_attachment_url($gallery_item);
						?>
						<div class="item">
							<img width="787" height="504" alt="<?php echo get_the_title($gallery_item); ?>" class="attachment-thumb_710x455 wp-post-image" src="<?php echo esc_url($url); ?>" />
						</div>
					<?php
					}
					?>
				</div>
				<div id="inavigation" class="">
					<?php
					foreach ($gallery_array as $gallery_item){
						$url = wp_get_attachment_image_src($gallery_item,'thumbnail');
						?>
						<div class="item">
							<img width="126.5" height="126.5" alt="<?php echo get_the_title($gallery_item); ?>" class="attachment-thumb_710x455 wp-post-image" src="<?php echo esc_url($url[0]); ?>" />
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<!-- End Show Offcanvas sidebar -->
			<script type="text/javascript">
				jQuery(window).load(function() {
					var sync1 = jQuery(".k2t-thumb-gallery");
					var sync2 = jQuery("#inavigation");
					sync1.owlCarousel({
						navigationText: [
							"<i class='k2t k2t-arrow-prev'></i>",
							"<i class='k2t k2t-arrow-next'></i>"
						],
						items: 1,
						autoPlay: 3000,
						singleItem: true,
						slideSpeed: 1000,
						navigation: true,
						pagination: true,
						afterAction: syncPosition,
						responsiveRefreshRate: 200,
					});
					sync2.owlCarousel({
						loop: true,
						items: 6,
						autoPlay: 3000,
						margin: 10,
						itemsDesktop : [1000,6],
						itemsDesktopSmall : [900,6],
						itemsTablet: [600,6],
						itemsMobile : [480,6],
						center: true,
						pagination: false,
						responsiveRefreshRate: 100,
						afterInit: function(el) {
							el.find(".owl-item").eq(0).addClass("synced");
						}
					});

					function syncPosition(el) {
						var current = this.currentItem;
						jQuery("#inavigation")
							.find(".owl-item")
							.removeClass("synced")
							.eq(current)
							.addClass("synced")
						if (jQuery("#inavigation").data("owlCarousel") !== undefined) {
							center(current)
						}
					}

					jQuery("#inavigation").on("click", ".owl-item", function(e) {
						e.preventDefault();
						var number = jQuery(this).data("owlItem");
						sync1.trigger("owl.goTo", number);
					});

					function center(number) {
						var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
						var num = number;
						var found = false;
						for (var i in sync2visible) {
							if (num === sync2visible[i]) {
								var found = true;
							}
						}

						if (found === false) {
							if (num > sync2visible[sync2visible.length - 1]) {
								sync2.trigger("owl.goTo", num - sync2visible.length + 2)
							} else {
								if (num - 1 === -1) {
									num = 0;
								}
								sync2.trigger("owl.goTo", num);
							}
						} else if (num === sync2visible[sync2visible.length - 1]) {
							sync2.trigger("owl.goTo", sync2visible[1])
						} else if (num === sync2visible[0]) {
							sync2.trigger("owl.goTo", num - 1)
						}
					}
				});
			</script>
			<?php
		}
		else { ?>
			<div class="yeah-blog-image">
				<?php
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel=""><img width="1200" height="1200" src="<?php echo $url; ?>" longdesc="URL_2" alt="Text_2" /></a>
			</div>
		<?php
		}
		?>

    <?php endif; ?>
	<h3 class="yeah-item-title"> <?php echo esc_html__('Services &amp; Functions','lyon') ; ?> </h3>
	<div class="yeah-metadata clearfix">
		<div class="col-md-6">
			<?php
				$meta_room = array();
				$meta_room['bed'] = get_post_meta($post->ID, 'yeah_room_bed' ,true);
				$meta_room['max'] = get_post_meta($post->ID, 'yeah_room_max' ,true);
				$meta_room['view'] = get_post_meta($post->ID, 'yeah_room_view' ,true);
				$meta_room['size'] = get_post_meta($post->ID, 'yeah_room_size' ,true);
				$meta_room['number'] = get_post_meta($post->ID, 'yeah_room_number' ,true);
				$meta_room['bathroom'] = get_post_meta($post->ID, 'yeah_room_bathroom' ,true);
				$meta_room['wifi'] = get_post_meta($post->ID, 'yeah_room_wifi' ,true);
				$meta_room['tivi'] = get_post_meta($post->ID, 'yeah_room_tv' ,true);
			?>
			<?php  if(!empty($meta_room['bed'])) :?>
			<p class="attribute">
				<i class="zmdi zmdi-check"></i>
				<b><?php echo esc_html__('Bed:','lyon'); ?></b> <?php  echo esc_attr($meta_room['bed']);?>
			</p>
			<?php endif; ?>
			<?php  if(!empty($meta_room['max'])) :?>
			<p class="attribute">
				<i class="zmdi zmdi-check"></i>
				<b><?php echo esc_html__('Max:','lyon'); ?></b> <?php echo esc_attr($meta_room['max']);?>
			</p>
			<?php endif; ?>
			<?php  if(!empty($meta_room['view'])) :?>
			<p class="attribute">
				<i class="zmdi zmdi-check"></i>
				<b><?php echo esc_html__('View:','lyon'); ?></b> <?php echo esc_attr($meta_room['view']);?>
			</p>
			<?php endif; ?>
			<p class="attribute">
				<i class="zmdi zmdi-check"></i>
				<b>Room size:</b> 82 sqm
			</p>

		</div>
		<div class="col-md-6">
			<?php if(!empty($meta_room['number'])): ?>
			<p class="attribute">
				<i class="zmdi zmdi-check"></i>
				<b><?php echo esc_html__('Room:','lyon'); ?></b> <?php echo esc_attr($meta_room['number']) ; ?>
			</p>
			<?php endif; ?>
			<?php if(!empty($meta_room['size'])): ?>
			<p class="attribute">
				<i class="zmdi zmdi-check"></i> <b><?php echo esc_html__('Bathroom:','lyon'); ?></b> <?php echo esc_attr($meta_room['size']);?>
			</p>
			<?php endif; ?>
			<?php if(!empty($meta_room['wifi'])): ?>
			<p class="attribute">
				<i class="zmdi zmdi-wifi-alt"></i>
				<?php echo esc_html__('Free wifi:','lyon'); ?>
			</p>
			<?php endif; ?>
			<?php if(!empty($meta_room['tivi'])): ?>
			<p class="attribute">
				<i class="zmdi zmdi-tv"></i>
				<?php echo esc_html__('TV in room','lyon'); ?>
			</p>
			<?php endif; ?>
		</div>
	</div>
	<!--Description-->
	<div class="yeah-description">
		<h3 class="yeah-item-title"> <?php echo esc_html__('Description','lyon') ?> </h3>
		<?php the_content();?>
	</div>
	<!-- Detail -->
	<div class="btn btn-booking">
		<a class="event-link" target="_blank" href="reservation.html"><?php echo esc_html__('Booking This Room','lyon'); ?></a>
	</div>
</article>

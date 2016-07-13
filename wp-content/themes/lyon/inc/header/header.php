<?php
/**
 * @name : Default
 * @package : OhyeahThemes
 * @author : OhyeahThemes
 */
?>

<div id="zo-header" class="zo-main-header header-default <?php echo $transparent; ?> <?php if (!zo_get_data_theme_options('menu_sticky')) {
	echo 'no-sticky';
} ?> <?php if (zo_get_data_theme_options('menu_sticky_tablets')) {
	echo 'sticky-tablets';
} ?> <?php if (zo_get_data_theme_options('menu_sticky_mobile')) {
	echo 'sticky-mobile';
} ?> <?php if (!empty($zo_meta->_zo_enable_header_menu)) {
	echo 'header-menu-custom';
} ?>">
<!-- Header Logo, Icon, Cart -->
	<div class="container-fluid">
		<div class="row">
			<div class="yeah-header-find-hotel">
				<?php if(is_active_sidebar('header-find-hotel')){ dynamic_sidebar('header-find-hotel'); } ?>
			</div><!--End find-hotel-->
			<div class="hidden-xs hidden-sm yeah-header-navigation left-menu">
				<nav id="site-navigation" class="main-navigation">
					<?php
					$attr = array(
						'theme_location' => 'left_menu',
						'items_wrap' => '<ul class="nav-menu menu-main-menu">%3$s</ul>',
					);

					/* enable mega menu. */
					if (class_exists('HeroMenuWalker')) {
						$attr['walker'] = new HeroMenuWalker();
					}

					/* main nav. */
					wp_nav_menu($attr); ?>
				</nav>
			</div>
			<div id="yeah-header-logo" class="yeah-header-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="" src="<?php echo esc_url(zo_page_header_logo()); ?>"></a>
			</div>
			<div class="hidden-xs hidden-sm yeah-header-navigation right-menu">
				<nav id="site-navigation" class="main-navigation">
					<?php
					$attr = array(
						'theme_location' => 'right_menu',
						'items_wrap' => '<ul class="nav-menu menu-main-menu">%3$s</ul>',
					);

					/* enable mega menu. */
					if (class_exists('HeroMenuWalker')) {
						$attr['walker'] = new HeroMenuWalker();
					}

					/* main nav. */
					wp_nav_menu($attr); ?>
				</nav>
			</div>
			<div id="yeah-header-language" class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
				<?php if(is_active_sidebar('sidebar-language')){ dynamic_sidebar('sidebar-language'); } ?>
			</div>
		</div>
	</div>
</div>
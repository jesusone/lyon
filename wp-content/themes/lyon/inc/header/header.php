<?php
/**
 * @name : Default
 * @package : OhyeahThemes
 * @author : OhyeahThemes
 */
?>

<div id="yeah-header" class="yeah-main-header header-default  <?php if (!zo_get_data_theme_options('menu_sticky')) {
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
			<div class="yeah-header-main">
			<div id="yeah-header-find-hotel" class="yeah-header-find-hotel yeah-header-sidebar">
				<?php if(is_active_sidebar('header-find-hotel')){ dynamic_sidebar('header-find-hotel'); } ?>
			</div><!--End find-hotel-->
			<div class="hidden-xs hidden-sm yeah-header-navigation left-menu">
				<nav id="site-navigation" class="main-navigation">
					<?php
					$attr = array(
						'theme_location' => 'left_menu',
						'menu_class' => 'nav-menu menu-main-menu',
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
						'menu_class' => 'nav-menu menu-main-menu',
					);

					/* enable mega menu. */
					if (class_exists('HeroMenuWalker')) {
						$attr['walker'] = new HeroMenuWalker();
					}

					/* main nav. */
					wp_nav_menu($attr); ?>
				</nav>
			</div>
			<div id="yeah-header-language" class="yeah-header-sidebar">
				<?php if(is_active_sidebar('sidebar-language')){ dynamic_sidebar('sidebar-language'); } ?>
			</div>
			</div>
		</div>
	</div>
</div>
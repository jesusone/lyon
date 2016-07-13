<?php
/**
 * @name : Default
 * @package : OhyeahThemes
 * @author : OhyeahThemes
 */
?>

<!-- Header Top -->
<?php if(zo_get_data_theme_options('header_top')){ ?>
	<div id="yeah-header-top" class="hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<?php if(is_active_sidebar('sidebar-2')){ dynamic_sidebar('sidebar-2'); } ?>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<?php if(is_active_sidebar('sidebar-3')){ dynamic_sidebar('sidebar-3'); } ?>
				</div>
			</div>
		</div>
	</div>
<?php }?>

<!-- Header Logo, Icon, Cart -->
<div id="yeah-header-brand">
	<div class="container">
		<div class="row">
			<div id="yeah-header-logo" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="" src="<?php echo esc_url(zo_page_header_logo()); ?>"></a>
			</div>
			<div id="yeah-header-banners" class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
				<?php if(is_active_sidebar('header-baners')){ dynamic_sidebar('header-baners'); } ?>
			</div>
			<div id="yeah-header-cart" class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
				<?php if(is_active_sidebar('sidebar-4')){ dynamic_sidebar('sidebar-4'); } ?>
			</div>
		</div>
	</div>
</div>

<!-- Header Navigation -->
<div id="yeah-header-menu" class="yeah-main-header header-default <?php if (!zo_get_data_theme_options('menu_sticky')) {
	echo 'no-sticky';
} ?> <?php if (zo_get_data_theme_options('menu_sticky_tablets')) {
	echo 'sticky-tablets';
} ?> <?php if (zo_get_data_theme_options('menu_sticky_mobile')) {
	echo 'sticky-mobile';
} ?> <?php if (!empty($zo_meta->_zo_enable_header_menu)) {
	echo 'header-menu-custom';
} ?>">
	<div class="container">
		<div class="row">
			<div id="yeah-header-navigation" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav id="site-navigation" class="main-navigation">
					<?php

					$attr = array(
						'menu' => zo_menu_location(),
						'items_wrap'     => '<ul class="nav-menu menu-main-menu">%3$s<li class="menu-sreach">' . get_search_form (false) . '</li></ul>'
					);

					$menu_locations = get_nav_menu_locations();

					if (!empty($menu_locations['primary'])) {
						$attr['theme_location'] = 'primary';
					}

					/* enable mega menu. */
					if (class_exists('HeroMenuWalker')) {
						$attr['walker'] = new HeroMenuWalker();
					}

					/* main nav. */
					wp_nav_menu($attr); 
					?>
				</nav>
			</div>
			<div id="zo-menu-mobile" class="collapse navbar-collapse"><i class="icon-menu"></i></div>
		</div>
	</div>
	<!-- #site-navigation -->
</div>
<?php
/**
 * @name : Default
 * @package : OhyeahThemes
 * @author : OhyeahThemes
 */
?>
<div id="header-two">
	<!-- Header Top -->
	<?php if(zo_get_data_theme_options('header_top')){ ?>
		<div id="yeah-header-top" class="header-two">
			<div class="container-fluid">
				<div class="left"><?php if(is_active_sidebar('header-top-2-left')){ dynamic_sidebar('header-top-2-left'); } ?></div>
				<div class="right"><?php if(is_active_sidebar('header-top-2-right')){ dynamic_sidebar('header-top-2-right'); } ?></div>
			</div>
		</div>
	<?php }?>

	<!-- Header Navigation -->
	<div id="yeah-header-menu" class="yeah-main-header header-two <?php if (!zo_get_data_theme_options('menu_sticky')) {
		echo 'no-sticky';
	} ?> <?php if (zo_get_data_theme_options('menu_sticky_tablets')) {
		echo 'sticky-tablets';
	} ?> <?php if (zo_get_data_theme_options('menu_sticky_mobile')) {
		echo 'sticky-mobile';
	} ?> <?php if (!empty($zo_meta->_zo_enable_header_menu)) {
		echo 'header-menu-custom';
	} ?>">
		<div class="container">
			<div class="row align-items-center-stretch">
				<div id="yeah-header-logo" class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="" src="<?php echo esc_url(zo_page_header_logo()); ?>"></a>
				</div>
				<div id="yeah-header-navigation" class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<nav id="site-navigation" class="main-navigation">
						<?php

						$attr = array(
							'menu' => zo_menu_location(),
							'items_wrap'     => '<ul class="nav-menu menu-main-menu">%3$s</ul>'
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
</div>
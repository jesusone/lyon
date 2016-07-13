<?php
/**
 * @name : Default
 * @package : ZoTheme
 * @author : ZoTheme
 */

global $smof_data, $zo_meta;

$container = 'container-fluid';
if(!empty($zo_meta->_zo_header_width)){
    if($zo_meta->_zo_header_width=='off'){
        $container='container';
    }
}else{
    if(isset($smof_data['wide_boxed_header']) && !$smof_data['wide_boxed_header']){
        $container='container';
    }
}
$transparent = '';
if(!empty($zo_meta->_zo_header_transparent)){
    if($zo_meta->_zo_header_transparent=='on'){
        $transparent='header-transparent';
    }
}else{
    if(isset($smof_data['header_transparent']) && $smof_data['header_transparent']){
        $transparent='header-transparent';
    }
}
$logo = get_template_directory_uri() . '/assets/logo.png';
if (!empty($zo_meta->_zo_header_logo)) {
    $logo = wp_get_attachment_url($zo_meta->_zo_header_logo);
}else{
    if(!empty($smof_data['main_logo']['url']))
        $logo = $smof_data['main_logo']['url'];
}
?>
<!-- Header -->
<div id="zo-header" class="zo-header-logo-center header-default <?php echo $transparent; ?> <?php if (!empty($smof_data['menu_sticky_tablets'])) {
	echo 'sticky-tablets';
} ?> <?php if (!empty($smof_data['menu_sticky_mobile'])) {
	echo 'sticky-mobile';
} ?> <?php if (!empty($zo_meta->_zo_enable_header_menu)) {
	echo 'header-menu-custom';
} ?>">
    <div class="<?php echo $container;?>">
		<div class="row">
			<div class="zo-header-main">
				<div class="hidden-xs hidden-sm zo-header-navigation">
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
				<div id="zo-header-logo" class="zo-header-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="zo-main-logo" alt="" src="<?php echo esc_url($logo); ?>">
						<?php echo zo_page_header_sticky_logo(); ?>
					</a>
					<?php if(isset($smof_data['text_logo'])&& !empty($smof_data['text_logo'])) echo '<span>'. $smof_data['text_logo'] . '</span>';?>
				</div>
				<div class="hidden-xs hidden-sm zo-header-navigation">
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
			</div>
			<div id="zo-menu-mobile" class="collapse navbar-collapse"><i class="fa fa-bars"></i></div>
		</div>
    </div>
</div>
<!-- Header -->
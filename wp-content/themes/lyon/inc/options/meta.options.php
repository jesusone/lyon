<?php
/**
 * Meta options
 *
 * @author ZoTheme
 * @since 1.0.0
 */
class ZOMetaOptions
{
	public function __construct()
	{
		add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
		add_action('admin_enqueue_scripts', array($this, 'admin_script_loader'));
	}
	/* add script */
	function admin_script_loader()
	{
		global $pagenow;
		if (is_admin() && ($pagenow == 'post-new.php' || $pagenow == 'post.php')) {
			wp_enqueue_style('metabox', get_template_directory_uri() . '/inc/options/css/metabox.css');

			wp_enqueue_script('easytabs', get_template_directory_uri() . '/inc/options/js/jquery.easytabs.min.js');
			wp_enqueue_script('metabox', get_template_directory_uri() . '/inc/options/js/metabox.js');
		}
	}
	/* add meta boxs */
	public function add_meta_boxes()
	{
		$this->add_meta_box('template_page_options', __('Setting', 'lyon'), 'page');
		$this->add_meta_box('testimonial_options', __('Testimonial about', 'lyon'), 'testimonial');
		$this->add_meta_box('pricing_options', __('Pricing Option', 'lyon'), 'pricing');
		$this->add_meta_box('team_options', __('Team About', 'lyon'), 'ourteam');
		$this->add_meta_box('portfolio_options', __('Portfolio About', 'lyon'), 'portfolio');
		$this->add_meta_box('room_options', __('Room settinng', 'lyon'), 'room');
		add_meta_box( 'room_price', esc_html__('Price / night' , 'lyon'),array($this,'room_price'), 'room', 'side', 'high');
	}


	public function add_meta_box($id, $label, $post_type, $context = 'advanced', $priority = 'default')
	{
		add_meta_box('_zo_' . $id, $label, array($this, $id), $post_type, $context, $priority);
	}
	/* --------------------- PAGE ---------------------- */
	function template_page_options() {
		?>
		<div class="tab-container clearfix">
			<ul class='etabs clearfix'>
				<li class="tab"><a href="#tabs-general"><i class="fa fa-server"></i><?php _e('General', 'lyon'); ?></a></li>
				<li class="tab"><a href="#tabs-header"><i class="fa fa-diamond"></i><?php _e('Header', 'lyon'); ?></a></li>
				<li class="tab"><a href="#tabs-page-title"><i class="fa fa-connectdevelop"></i><?php _e('Page Title', 'lyon'); ?></a></li>
			</ul>
			<div class='panel-container'>
				<div id="tabs-general">
					<?php
					zo_options(array(
						'id' => 'full_width',
						'label' => __('Full Width','lyon'),
						'type' => 'switch',
						'options' => array('on'=>'1','off'=>''),
					));
					?>
				</div>
				<div id="tabs-header">
					<?php
					/* header. */
					zo_options(array(
						'id' => 'header',
						'label' => __('Header','lyon'),
						'type' => 'switch',
						'options' => array('on'=>'1','off'=>''),
						'follow' => array('1'=>array('#page_header_enable'))
					));
					?>  
					<div id="page_header_enable"><?php
						zo_options(array(
							'id' => 'header_layout',
							'label' => __('Layout','lyon'),
							'type' => 'imegesselect',
							'options' => array(
								'' => get_template_directory_uri().'/inc/options/images/header/header-1.png',
								'2' => get_template_directory_uri().'/inc/options/images/header/header-2.png',
							)
						));
						zo_options(array(
							'id' => 'header_logo',
							'label' => __('Logo','lyon'),
							'type' => 'image'
						));
						/*
						 * Custom main menu color
						 */
						zo_options(array(
							'id' => 'enable_header_menu',
							'label' => __('Custom Header Menu Color','lyon'),
							'type' => 'switch',
							'options' => array('on'=>'1','off'=>''),
							'follow' => array('1'=>array('#page_header_menu_enable'))
						));
						?> 
							<div id="page_header_menu_enable"><?php
								zo_options(array(
									'id' => 'header_menu_color',
									'label' => __('Menu Color - First Level','lyon'),
									'type' => 'color',
									'default' => ''
								));
								zo_options(array(
									'id' => 'header_menu_color_hover',
									'label' => __('Menu Hover - First Level','lyon'),
									'type' => 'color',
									'default' => ''
								));
								zo_options(array(
									'id' => 'header_menu_color_active',
									'label' => __('Menu Active - First Level','lyon'),
									'type' => 'color',
									'default' => ''
								));
								?> 
							</div>
						<?php
							$menus = array();
							$menus[''] = 'Default';
							$obj_menus = wp_get_nav_menus();
							foreach ($obj_menus as $obj_menu){
								$menus[$obj_menu->term_id] = $obj_menu->name;
							}
							$navs = get_registered_nav_menus();
							foreach ($navs as $key => $mav){
								zo_options(array(
									'id' => $key,
									'label' => $mav,
									'type' => 'select',
									'options' => $menus
								));
							}
						?>
					</div>
				</div>
				<div id="tabs-page-title">
					<?php
					/* page title. */
					zo_options(array(
						'id' => 'page_title',
						'label' => __('Page Title','lyon'),
						'type' => 'switch',
						'options' => array('on'=>'1','off'=>''),
						'follow' => array('1'=>array('#page_title_enable'))
					));
					?>  <div id="page_title_enable"><?php
						zo_options(array(
							'id' => 'page_title_text',
							'label' => __('Title','lyon'),
							'type' => 'text',
						));
						zo_options(array(
							'id' => 'page_title_sub_text',
							'label' => __('Sub Title','lyon'),
							'type' => 'text',
						));
						zo_options(array(
							'id' => 'page_title_margin',
							'label' => __('Page Title Margin','lyon'),
							'type' => 'text',
						));
						zo_options(array(
							'id' => 'page_title_background',
							'label' => __('Page Title Background','lyon'),
							'type' => 'image',
						));
						zo_options(array(
							'id' => 'page_title_type',
							'label' => __('Layout','lyon'),
							'type' => 'imegesselect',
							'options' => array(
								'' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-0.png',
								'1' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-1.png',
								'2' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-2.png',
								'3' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-3.png',
								'4' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-4.png',
								'5' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-5.png',
								'6' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-6.png',
							)
						));
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	/* --------------------- RATING TESTIMONIAL ---------------------- */
	function testimonial_options(){
		?>
		<div class="testimonial-rating">
			<?php
			zo_options(array(
				'id' => 'testimonial_position',
				'label' => __('Client Position','lyon'),
				'type' => 'text',
			));
				zo_options(array(
					'id' => 'rating',
					'label' => __('Rate','lyon'),
					'type' => 'select',
					'options' => array(
						'5' => '5 Rate',
						'4' => '4 Rate',
						'3' => '3 Rate',
						'2' => '2 Rate',
						'1' => '1 Rate',
					)
				));
			?>
		</div>
	<?php
	}
	/* --------------------- PRICING ---------------------- */

	function pricing_options() {
		?>
		<div class="pricing-option-wrap">
			<table class="wp-list-table widefat fixed">
				<tr>
					<td>
						<?php
						zo_options(array(
							'id' => 'price',
							'label' => __('Price','lyon'),
							'type' => 'text',
						));

						zo_options(array(
							'id' => 'value',
							'label' => __('Value','lyon'),
							'type' => 'select',
							'options' => array(
								'Monthly' => 'Monthly',
								'Year' => 'Year'
							)
						));

						zo_options(array(
							'id' => 'color',
							'label' => __('Header Color','lyon'),
							'type' => 'color',
							'default' => ''
						));

						?>
					</td>
					<td>
						<?php
						zo_options(array(
							'id' => 'is_feature',
							'label' => __('Is feature','lyon'),
							'type' => 'switch',
							'options' => array('on'=>'1','off'=>''),
						));

						zo_options(array(
							'id' => 'button_url',
							'label' => __('Button Url','lyon'),
							'type' => 'text',
						));

						zo_options(array(
							'id' => 'button_text',
							'label' => __('Button Text','lyon'),
							'type' => 'text',
						));
						?>
					</td>
				</tr>
			</table>
		</div>
	<?php
	}
	/* --------------------- PRICING ---------------------- */

	/*-----------------------TEAM-------------------------*/
	function team_options() {
		?>

		<div class="tab-container clearfix">
			<ul class='etabs clearfix'>
				<li class="tab"><a href="#tabs-position"><i class="fa fa-server"></i><?php _e('Position', 'lyon'); ?></a></li>
			</ul>
			<div class='panel-container'>
				<div id="tabs-position">
					<?php
					zo_options(array(
						'id' => 'team_position',
						'label' => __('Position', 'lyon'),
						'type' => 'text',
						'placeholder' => '',
					));
					?>
					<?php
					zo_options(array(
						'id' => 'socials',
						'label' => __('Socials of team','lyon'),
						'type' => 'social',
					));
					?>
				</div>
			</div>
		</div>
	<?php
	}
	/*-----------------------Room-----------------------------*/
	function room_price(){
		global $post;
		$_regular_price = get_post_meta($post->ID, 'yeah_regular_price', true);
		?>
		<div>
			<label for=""><?php esc_html_e('Regular Price', 'pro-car-dealer'); ?></label>
			<input id="" name="yeah_regular_price" type="number" min="0"  value="<?php echo esc_attr($_regular_price); ?>">
		</div>
		<?php

	}
	function room_options(){
		global  $post;
		?>

		<div class="tab-container clearfix">
			<ul class='etabs clearfix'>
				<li class="tab"><a href="#tabs-about"><i class="fa fa-server"></i><?php _e('Room Option', 'lyon'); ?></a></li>
			</ul>
			<div class='panel-container'>
				<div id="tabs-about">
					<div class="col-md-6">
						<?php $bed = get_post_meta($post->ID, 'yeah_room_bed' ,true)?>
						<label class="field-title" for="yeah_room_bed"><?php echo esc_html__('Bed','lyon') ?></label>
						<div class="field">
							<input type="text" name="yeah_room_bed" id="_yeah_room_bed" class="xvalue " value="<?php echo $bed ? esc_attr($bed):'';?>" placeholder="">
						</div>
						<?php $max = get_post_meta($post->ID, 'yeah_room_max' ,true)?>
						<label class="field-title" for="yeah_room_max"><?php echo esc_html__('Max People','lyon') ?></label>
						<div class="field">
							<input type="text" name="yeah_room_max" id="_yeah_room_max" class="xvalue " value="<?php echo $max ? esc_attr($max):'';?>" placeholder="">
						</div>
						<?php $view = get_post_meta($post->ID, 'yeah_room_view' ,true);?>
						<label class="field-title" for="yeah_room_view"><?php echo esc_html__('View','lyon') ?></label>
						<div class="field">
							<input type="text" name="yeah_room_view" id="yeah_room_view" class="xvalue " value="<?php echo $max ? esc_attr($view):'';?>" placeholder="">
						</div>
						<?php $room = get_post_meta($post->ID, 'yeah_room_size' ,true)?>
						<label class="field-title" for="yeah_room_size"><?php echo esc_html__('Room size','lyon') ?></label>
						<div class="field">
							<input type="text" name="yeah_room_size" id="yeah_room_size" class="xvalue " value="<?php echo $room ? esc_attr($room) : '' ;?>" placeholder="">
						</div>
						<?php $roomnumber = get_post_meta($post->ID, 'yeah_room_number' ,true)?>
						<label class="field-title" for="yeah_room_number"><?php echo esc_html__('Room','lyon') ?></label>
						<div class="field">
							<input type="text" name="yeah_room_number" id="yeah_room_number" class="xvalue " value="<?php echo $roomnumber ? esc_attr($roomnumber):'';?>" placeholder="">
						</div>
						<?php $bathroom = get_post_meta($post->ID, 'yeah_room_bathroom' ,true);?>
						<label class="field-title" for="yeah_room_bathroom"><?php echo esc_html__('Bathroom','lyon') ?></label>
						<div class="field">
							<input type="text" name="yeah_room_bathroom" id="yeah_room_bathroom" class="xvalue " value="<?php echo $bathroom ? esc_attr($bathroom):''; ?>" placeholder="">
						</div>
						<?php $wifi = get_post_meta($post->ID, 'yeah_room_wifi' ,true);?>
						<label class="field-title" for="yeah_room_wifi"><?php echo esc_html__('Free wifi','lyon') ?></label>
						<div class="field">
							<div class="select-field csfield">
								<select name="yeah_room_wifi" id="yeah_room_wifi">
									<option <?php echo $wifi=='' ? 'selected' : '' ?> value=""><?php echo esc_html__('Yes','lyon')?></option>
									<option <?php echo $wifi=='no' ? 'selected' : '' ?> value="no"><?php echo esc_html__('No','lyon')?></option>
								</select>
							</div>
						</div>
						<?php $tivi = get_post_meta($post->ID, 'yeah_room_tv' ,true)?>
						<label class="field-title" for="yeah_room_tv"><?php echo esc_html__('TV in room','lyon') ?></label>
						<div class="field">
							<div class="select-field csfield">
								<select name="yeah_room_tv" id="yeah_room_tv">
									<option <?php echo $tivi=='' ? 'selected' : '' ?> value=""><?php echo esc_html__('Yes','lyon')?></option>
									<option <?php echo $tivi=='no' ? 'selected' : '' ?>  value="no"><?php echo esc_html__('No','lyon')?></option>
								</select>
							</div>
						</div>
					</div>
					<?php

					zo_options(array(
						'id' => 'portfolio_images',
						'label' => __('Gallery', 'lyon'),
						'type' => 'images',
					));
					?>
				</div>
			</div>
		</div>
	<?php
	}
	/*-----------------------Portfolio-------------------------*/
	function portfolio_options() {
		?>
		<div class="tab-container clearfix">
			<ul class='etabs clearfix'>
				<li class="tab"><a href="#tabs-about"><i class="fa fa-server"></i><?php _e('About', 'lyon'); ?></a></li>
				<li class="tab"><a href="#tabs-layout"><i class="fa fa-server"></i><?php _e('Layout', 'lyon'); ?></a></li>
			</ul>
			<div class='panel-container'>
				<div id="tabs-about">
					<?php
					zo_options(array(
						'id' => 'portfolio_client',
						'label' => __('Client', 'lyon'),
						'type' => 'text',
						'placeholder' => '',
					));
					zo_options(array(
						'id' => 'portfolio_date',
						'label' => __('Date', 'lyon'),
						'type' => 'date',
						'placeholder' => '',
					));
					zo_options(array(
						'id' => 'portfolio_skills',
						'label' => __('Skills', 'lyon'),
						'type' => 'text',
						'placeholder' => '',
					));
					zo_options(array(
						'id' => 'portfolio_url',
						'label' => __('URL', 'lyon'),
						'type' => 'text',
						'value' => '#',
					));
					zo_options(array(
						'id' => 'portfolio_images',
						'label' => __('Gallery', 'lyon'),
						'type' => 'images',
					));
					?>
				</div>
				<div id="tabs-layout">
					<?php
					zo_options(array(
						'id' => 'portfolio_layout',
						'label' => __('Layout', 'lyon'),
						'type' => 'select',
						'options' => array(
							'' => 'Default',
							'gallery' => 'Gallery'
						)
					));
					?>
				</div>
			</div>
		</div>


	<?php
	}
}

new ZOMetaOptions();
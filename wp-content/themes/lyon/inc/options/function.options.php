<?php
global $zo_base;
/* get local fonts. */
$local_fonts = is_admin() ? $zo_base->getListLocalFontsName() : array() ;
/**
 * Home Options
 *
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Main Options', 'lyon'),
    'icon' => 'el-icon-dashboard',
    'fields' => array(
        array(
            'id' => 'intro_product',
            'type' => 'intro_product',
        )
    )
);

/**
 * Header Options
 *
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Header', 'lyon'),
    'icon' => 'el-icon-credit-card',
    'fields' => array(
        array(
            'id' => 'header_layout',
            'title' => __('Layouts', 'lyon'),
            'subtitle' => __('select a layout for header', 'lyon'),
            'default' => '',
            'type' => 'image_select',
            'options' => array(
                '' => get_template_directory_uri().'/inc/options/images/header/header-1.png',
                '2' => get_template_directory_uri().'/inc/options/images/header/header-2.png',
            )
        ),
        array(
            'subtitle' => __('set color for header background color.', 'lyon'),
            'id' => 'bg_header',
            'type' => 'color_rgba',
            'title' => __('Header Background Color', 'lyon'),
            'default'   => array(
                'color'     => '#283c5a',
                'alpha'     => 1,
                'rgba' 		=> 'rgba(40, 60, 90, 1)'
            ),
        ),
        array(
            'subtitle' => __('enable sticky mode for menu.', 'lyon'),
            'id' => 'menu_sticky',
            'type' => 'switch',
            'title' => __('Sticky Header', 'lyon'),
            'default' => true,
        ),
        array(
            'subtitle' => __('enable sticky mode for menu Tablets.', 'lyon'),
            'id' => 'menu_sticky_tablets',
            'type' => 'switch',
            'title' => __('Sticky Tablets', 'lyon'),
            'default' => false,
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('enable sticky mode for menu Mobile.', 'lyon'),
            'id' => 'menu_sticky_mobile',
            'type' => 'switch',
            'title' => __('Sticky Mobile', 'lyon'),
            'default' => false,
            'required' => array( 0 => 'menu_sticky', 1 => '=', 2 => 1 )
        )
    )
);

/* Header Top */
$this->sections[] = array(
    'title' => __('Header Top', 'lyon'),
    'icon' => 'el-icon-minus',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Enable header top.', 'lyon'),
            'id' => 'header_top',
            'type' => 'switch',
            'title' => __('Enable Header Top', 'lyon'),
            'default' => true
        ),
    )
);

/* Logo */
$this->sections[] = array(
    'title' => __('Logo', 'lyon'),
    'icon' => 'el-icon-picture',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => __('Select Logo', 'lyon'),
            'subtitle' => __('Select an image file for your logo.', 'lyon'),
            'id' => 'main_logo',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo.png'
            )
        ),
        array(
            'id'       => 'main_logo_height',
            'type'     => 'dimensions',
            'units'    => array('px'),
            'title'    => __('Logo Height', 'lyon'),
            'width' => false,
            'default'  => array(
                'height'  => '90px'
            ),
        ),
    )
);

/* Menu */
$this->sections[] = array(
    'title' => __('Menu', 'lyon'),
    'icon' => 'el-icon-tasks',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__( 'Menu Item Padding', 'lyon' ),
            'subtitle' => esc_html__( 'Controls the right padding for menu text (left on RTL). In pixels.', 'lyon' ),
            'id' => 'menu_padding',
            'type' => 'spacing',
            'units' => 'px', 'mode' => 'padding',
            'default' => array( 'padding-top' => '0',
            'padding-right' => '30px',
            'padding-bottom' => '0',
            'padding-left' => '30px',
            'units' => 'px', )
        ),
        array(
            'id' => 'menu_fontsize_first_level',
            'type' => 'typography',
            'title' => __('Menu Font Size - First Level', 'lyon'),
            'google' => false,
            'font-backup' => false,
            'all_styles' => false,
            'color' => false,
            'font-style' => false,
            'font-weight' => false,
            'font-family' => false,
            'line-height' => false,
            'text-align' => false,
            'output'  => array('#yeah-header-navigation .main-navigation .menu-main-menu > li > a',
                '#yeah-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'units' => 'px',
            'default' => array(
                'font-size' => '15px',
            )
        ),
        array(
            'subtitle' => __('Controls the text color of first level menu items.', 'artista'),
            'id' => 'menu_color_first_level',
            'type' => 'color',
            'title' => __('Menu Color - First Level', 'artista'),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Controls the text hover color of first level menu items.', 'artista'),
            'id' => 'menu_color_hover_first_level',
            'type' => 'color',
            'title' => __('Menu Color Hover - First Level', 'artista'),
            'default' => '#cdaf87'
        ),
        array(
            'subtitle' => __('Controls the text hover color of first level menu items.', 'artista'),
            'id' => 'menu_color_active_first_level',
            'type' => 'color',
            'title' => __('Menu Color Active - First Level', 'artista'),
            'default' => '#cdaf87'
        ),
        array(
            'id' => 'menu_fontsize_sub_level',
            'type' => 'typography',
            'title' => __('Menu Font Size - Sub Level', 'lyon'),
            'google' => false,
            'font-backup' => false,
            'all_styles' => false,
            'color' => false,
            'font-style' => false,
            'font-weight' => false,
            'font-family' => false,
            'line-height' => false,
            'text-align' => false,
            'output'  => array('#yeah-header-navigation .main-navigation .menu-main-menu > li ul a',
                '#yeah-header-navigation .main-navigation .menu-main-menu > ul > li ul a'),
            'units' => 'px',
            'default' => array(
                'font-size' => '16px',
            )
        ),
        array(
            'title'       => esc_html__( 'Menu Height', 'lyon' ),
            'subtitle' => esc_html__( 'Controls the menu height.', 'lyon' ),
            'id'          => 'menu_height',
            'type'        => 'slider',
            "default"   => 140,
            "min"       => 30,
            "step"      => 1,
            "max"       => 300,
            'display_value' => 'label'
        ),
        array(
            'subtitle' => __('Enable mega menu.', 'lyon'),
            'id' => 'menu_mega',
            'type' => 'switch',
            'title' => __('Mega Menu', 'lyon'),
            'default' => true,
        ),
        array(
            'subtitle' => __('Enable menu first level uppercase.', 'lyon'),
            'id' => 'menu_first_level_uppercase',
            'type' => 'switch',
            'title' => __('Menu First Level Uppercase', 'lyon'),
            'default' => true,
        ),
        array(
            'subtitle' => __('Enable sub menu uppercase.', 'lyon'),
            'id' => 'sub_menu_uppercase',
            'type' => 'switch',
            'title' => __('Sub menu Uppercase', 'lyon'),
            'default' => false,
        ),
        array(
            'subtitle' => __('Controls the text color of sub level menu items.', 'artista'),
            'id' => 'menu_color_sub_level',
            'type' => 'color',
            'title' => __('Menu Color - Sub Level', 'artista'),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Controls the text hover color of sub level menu items.', 'artista'),
            'id' => 'menu_color_hover_sub_level',
            'type' => 'color',
            'title' => __('Menu Color Hover - Sub Level', 'artista'),
            'default' => '#cdaf87'
        ),
        array(
            'id' => 'menu_icon_font_size',
            'type' => 'typography',
            'title' => __('Menu Icon Font Size', 'lyon'),
            'google' => false,
            'font-backup' => false,
            'all_styles' => false,
            'color' => false,
            'font-style' => false,
            'font-weight' => false,
            'font-family' => false,
            'line-height' => false,
            'text-align' => false,
            'output'  => array('#yeah-header-navigation .main-navigation .menu-main-menu > li.menu-item-has-children .zo-menu-toggle'),
            'units' => 'px',
            'default' => array(
                'font-size' => '14px',
            )
        ),
    )
);

/**
 * Page Title
 *
 * @author OhYeah
 */

/**
 * Page title settings
 *
 */
$page_title = array(
    array(
        'id' => 'page_title_layout',
        'title' => __('Layouts', 'lyon'),
        'subtitle' => __('select a layout for page title', 'lyon'),
        'default' => '5',
        'type' => 'image_select',
        'options' => array(
            '' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-0.png',
            '1' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-1.png',
            '2' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-2.png',
            '3' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-3.png',
            '4' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-4.png',
            '5' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-5.png',
            '6' => get_template_directory_uri().'/inc/options/images/pagetitle/pt-s-6.png',
        )
    ),
    array(
        'id'       => 'page_title_background',
        'type'     => 'background',
        'title'    => __( 'Background', 'lyon' ),
        'subtitle' => __( 'page title background with image, color, etc.', 'lyon' ),
        'output'   => array('#zo-page-element-wrap'),
        'default'   => array(
            'background-color'=>'#ffffff',
            'background-image'=> get_template_directory_uri().'/assets/images/pagetitle.jpg',
            'background-repeat'=>'',
            'background-size'=>'cover',
            'background-attachment'=>'',
            'background-position'=>'center center'
        )
    ),
    array(
        'id' => 'page_title_margin',
        'title' => __('Margin', 'lyon'),
        'type' => 'spacing',
        'units' => 'px',
        'mode' => 'margin',
        'output' => array('#zo-page-element-wrap'),
        'default' => array(
            'margin-top'     => '0',
            'margin-right'   => '0',
            'margin-bottom'  => '80px',
            'margin-left'    => '0',
            'units'          => 'px',
        )
    ),
    array(
        'id' => 'page_title_padding',
        'title' => __('Padding', 'lyon'),
        'type' => 'spacing',
        'units' => 'px',
        'mode' => 'padding',
        'output' => array('#zo-page-element-wrap'),
        'default' => array(
            'padding-top'     => '340px',
            'padding-right'   => '0',
            'padding-bottom'  => '260px',
            'padding-left'    => '0',
            'units'          => 'px',
        )
    ),
    array(
        'id' => 'page_title_parallax',
        'title' => __('Enable Header Parallax', 'lyon'),
        'type' => 'switch',
        'default' => false
    ),
    array(
        'id' => 'page_title_custom_post',
        'title' => __('Custom Background For Post Type', 'lyon'),
        'type' => 'switch',
        'default' => false
    ),
);
/**
 * add custom background for post type
 */
$post_types = zo_list_post_types();
foreach( $post_types as $type => $name) {
    $page_title[] = array(
        'id'       => 'page_title_custom_post_' . $type,
        'type'     => 'background',
        'title'    => sprintf( __( 'Background For %s' , 'lyon'), $name),
        'subtitle' => sprintf( __( 'Custom background image for post type %s', 'lyon' ), $name),
        'output'   => array('.single-'.$type.' #zo-page-element-wrap'),
        'background-color' => false,
        'background-repeat' => false,
        'background-size' => false,
        'background-attachment' => false,
        'background-position' => false,
        'default'   => array(
            'background-image'=> '',
        ),
        'required' => array( 'page_title_custom_post', '=', 1 )
    );
}
/**
 * Section settings
 */
$this->sections[] = array(
    'title' => __('Page Title & BC', 'lyon'),
    'icon' => 'el-icon-map-marker',
    'fields' => $page_title
);

/* Page Title */
$this->sections[] = array(
    'icon' => 'el-icon-podcast',
    'title' => __('Page Title', 'lyon'),
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'page_title_typography',
            'type' => 'typography',
            'title' => __('Typography', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('.page-title #page-title-text h1'),
            'units' => 'px',
            'subtitle' => __('Typography option with title text.', 'lyon'),
            'default' => array(
                'color' => '#283c5a',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Old Standard TT',
                'google' => true,
                'font-size' => '36px',
                'line-height' => '57.6px',
                'text-align' => 'center'
            )
        ),
        array(
            'id' => 'page_sub_title_typography',
            'type' => 'typography',
            'title' => __('Sub Title', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('.page-title #page-title-text .page-sub-title'),
            'units' => 'px',
            'subtitle' => __('Typography option with sub title text.', 'lyon'),
            'default' => array(
                'color' => '#fff',
                'font-style' => 'normal',
                'font-weight' => '700',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '24px',
                'line-height' => '36px',
                'text-align' => 'center'
            )
        ),
    )
);
/* Breadcrumb */
$this->sections[] = array(
    'icon' => 'el-icon-random',
    'title' => __('Breadcrumb', 'lyon'),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('The text before the breadcrumb home.', 'lyon'),
            'id' => 'breacrumb_home_prefix',
            'type' => 'text',
            'title' => __('Breadcrumb Home Prefix', 'lyon'),
            'default' => 'Home'
        ),
        array(
            'id' => 'breacrumb_typography',
            'type' => 'typography',
            'title' => __('Typography', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'output'  => array('#breadcrumb #breadcrumb-text .breadcrumbs','#breadcrumb #breadcrumb-text ul li a'),
            'units' => 'px',
            'subtitle' => __('Typography option with title text.', 'lyon'),
            'default' => array(
                'color' => '',
                'font-style' => 'normal',
                'font-weight' => '400',
                'font-family' => 'Montserrat',
                'google' => true,
                'font-size' => '12px',
                'line-height' => '12px',
                'text-align' => 'center'
            )
        ),
    )
);

/**
 * Body
 *
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Body', 'lyon'),
    'icon' => 'el-icon-website',
    'fields' => array(
        array(
            'subtitle' => __('Set layout boxed default(Wide).', 'lyon'),
            'id' => 'body_layout',
            'type' => 'switch',
            'title' => __('Boxed Layout', 'lyon'),
            'default' => false,
        ),
        array(
            'id'       => 'body_background',
            'type'     => 'background',
            'title'    => __( 'Background', 'lyon' ),
            'subtitle' => __( 'body background with image, color, etc.', 'lyon' ),
            'output'   => array('body'),
        ),
        array(
            'id' => 'body_margin',
            'title' => __('Margin', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'output' => array('body #page'),
            'default' => array(
                'margin-top'     => '0',
                'margin-right'   => '0',
                'margin-bottom'  => '0',
                'margin-left'    => '0',
                'units'          => 'px',
            )
        ),
        array(
            'id' => 'body_padding',
            'title' => __('Padding', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'padding',
            'output' => array('body #page'),
            'default' => array(
                'padding-top'     => '0',
                'padding-right'   => '0',
                'padding-bottom'  => '0',
                'padding-left'    => '0',
                'units'          => 'px',
            )
        ),
    )
);

/**
 * Content
 *
 * Archive, Pages, Single, 404, Search, Category, Tags ....
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Content', 'lyon'),
    'icon' => 'el-icon-compass',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'container_background',
            'type'     => 'background',
            'title'    => __( 'Background', 'lyon' ),
            'subtitle' => __( 'Container background with image, color, etc.', 'lyon' ),
            'output'   => array('#main'),
        ),
        array(
            'id' => 'container_margin',
            'title' => __('Margin', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'output' => array('body #page #main'),
            'default' => array(
                'margin-top'     => '0',
                'margin-right'   => '0',
                'margin-bottom'  => '0',
                'margin-left'    => '0',
                'units'          => 'px',
            )
        ),
        array(
            'id' => 'container_padding',
            'title' => __('Padding', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'padding',
            'output' => array('body #page #main'),
            'default' => array(
                'padding-top'     => '0',
                'padding-right'   => '0',
                'padding-bottom'  => '0',
                'padding-left'    => '0',
                'units'          => 'px',
            )
        )
    )
);

/**
 * Page Loadding
 *
 *
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Page Loadding', 'lyon'),
    'icon' => 'el-icon-compass',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Enable page loadding.', 'lyon'),
            'id' => 'enable_page_loadding',
            'type' => 'switch',
            'title' => __('Enable Page Loadding', 'lyon'),
            'default' => false,
        ),
        array(
            'subtitle' => __('Select Style Page Loadding.', 'lyon'),
            'id' => 'page_loadding_style',
            'type' => 'select',
            'options' => array(
                '1' => 'Style 1',
                '2' => 'Style 2'
            ),
            'title' => __('Page Loadding Style', 'lyon'),
            'default' => 'style-1',
            'required' => array( 0 => 'enable_page_loadding', 1 => '=', 2 => 1 )
        )
    )
);

/**
 * Footer
 *
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Footer', 'lyon'),
    'icon' => 'el-icon-credit-card',
	'fields' => array(
		array(
            'id' => 'footer_layout',
            'title' => __('Layouts', 'lyon'),
            'subtitle' => __('select a layout for footer', 'lyon'),
            'default' => '',
            'type' => 'image_select',
            'options' => array(
                '' => get_template_directory_uri().'/assets/images/f-default.jpg',
            )
        ),
		array(
            'title' => __('Select Logo', 'lyon'),
            'subtitle' => __('Select an image file for your logo.', 'lyon'),
            'id' => 'footer_logo',
            'type' => 'media',
            'url' => true,
            'default' => array(
                'url'=>get_template_directory_uri().'/assets/images/logo-footer.png'
            )
        )
	)
);

/* Custom Footer */
$this->sections[] = array(
    'title' => __('Customize Footer', 'lyon'),
    'icon' => 'el-icon-fork',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'footer_main',
            'type' => 'switch',
            'title' => __('Enable Footer Main', 'lyon'),
            'default' => true,
        ),
        array(
            'title' => esc_html__( 'Menu Main footer', 'lyon' ),
            'subtitle' => esc_html__( 'Controls the right padding for menu text (left on RTL). In pixels.', 'lyon' ),
            'id' => 'footer_main_padding',
            'type' => 'spacing',
            'units' => 'px', 'mode' => 'padding',
            'default' => array(
                'padding-top' => '150px',
                'padding-right' => '15px',
                'padding-bottom' => '150px',
                'padding-left' => '15px',
                'units' => 'px', ),
            'required' => array( 0 => 'footer_main', 1 => '=', 2 => 1 )
        ),
        array(
            'id'       => 'footer_background',
            'type'     => 'background',
            'title'    => __( 'Footer Main Background', 'labella' ),
            'subtitle' => __( 'Controls the background of the page title.', 'lyon' ),
            'output'  =>'#yeah-footer .yeah-footer-main',
            'default'   => array(
                'background-color'=>'#252525',
                'background-image'=> get_template_directory_uri().'/assets/images/footer-background.png',
                'background-repeat'=>'',
                'background-size'=>'',
                'background-attachment'=>'',
                'background-position'=>''
            ),
            'required' => array( 0 => 'footer_main', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('set color main color.', 'lyon'),
            'id' => 'footer_color',
            'type' => 'color',
            'output'  =>'#yeah-footer .yeah-footer-main,#yeah-footer .yeah-footer-main div,.yeah-footer-copyright ',
            'title' => __('Footer Color', 'lyon'),
            'default' => '#fff'
        ),
        array(
            'title' => __('Phone For Contact Info', 'labella'),
            'id' => 'contact_phone',
            'type' => 'text',
            'default' => '+123 868 6868',
            'subtitle' => __('This content will display if you have "Contact Info" selected for the Header Content Left or Right option above.', 'labella'),
        ),
        array(
            'title' => __('Email For Contact Info', 'labella'),
            'id' => 'contact_email',
            'type' => 'text',
            'default' => 'admin@lyonhotel.com',
            'subtitle' => __('This content will display if you have "Contact Info" selected for the Header Content Left or Right option above.', 'labella'),
        ),
        array(
            'id' => 'footer_copyright',
            'type' => 'switch',
            'title' => __('Enable Footer Copyright', 'lyon'),
            'default' => true,
        ),
        array(
            'title' => esc_html__( 'Copy right footer', 'lyon' ),
            'subtitle' => esc_html__( 'Controls the right padding for copy right footer.', 'lyon' ),
            'id' => 'footer_copyright_padding',
            'type' => 'spacing',
            'units' => 'px', 'mode' => 'padding',
            'output'=>array('#yeah-footer .yeah-footer-copyright'),
            'default' => array(
                'padding-top' => '40px',
                'padding-right' => '0px',
                'padding-bottom' => '40x',
                'padding-left' => '0px',
                'units' => 'px', ),
            'required' => array( 0 => 'footer_copyright', 1 => '=', 2 => 1 )
        ),
        array(
            'id'=>'footer_copyright_text',
            'type' => 'textarea',
            'title' => __('Copyright Text', 'lyon'),
            'subtitle' => __('Enter the text that displays in the copyright bar. HTML markup can be used.', 'lyon'),
            'validate' => 'html_custom',
            'default' => '© Copyright 2015. Powered by WordPress. LYON HOTEL by <a href="ohyeahtheme.com">OhYeah Themes</a>',
            'allowed_html' => array(
                'a' => array(
                    'href' => array(),
                    'title' => array(),
                    'target' => array(),
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array(),
                'script' => array()
            ),
            'required' => array( 0 => 'footer_copyright', 1 => '=', 2 => 1 )
        ),
        array(
            'id'       => 'footer_copyright_background',
            'type'     => 'color_rgba',
            'title'    => __( 'Footer Copyright Background', 'labella' ),
            'subtitle' => __( 'Controls the background of the page title.', 'lyon' ),
            'output'  => array('background-color' => '#yeah-footer .yeah-footer-copyright'),
            'default'   => array(
                'color'     => '#1f1f1f',
                'alpha'     => 1,
                'rgba' 		=> 'rgba(251, 229, 229, 1)'
            ),
            'required' => array( 0 => 'footer_copyright', 1 => '=', 2 => 1 )
        ),
        array(
            'subtitle' => __('enable button back to top.', 'lyon'),
            'id' => 'footer_botton_back_to_top',
            'type' => 'switch',
            'title' => __('Back To Top', 'lyon'),
            'default' => true,
        )
    )
);
/* Social Links */
$this->sections[] = array(
    'title' => __('Social Media', 'labella'),
    'icon' => 'el el-share-alt',
    'fields' => array(
        array(
            'id'       => 'social_link_footer',
            'type'     => 'sortable',
            'mode'     => 'checkbox',
            'title'    => __('Show in Footer', 'labella'),
            'subtitle' => __('Select Socials to show in Footer', 'labella'),
            'options'  => array(
                'facebook' => 'Facebook',
                'twitter' => 'Twitter',
                'youtube' => 'Youtube',
                'vimeo' => 'Vimeo',
                'instagram' => 'Instagram',
                'google' => 'Google Plus',
                'skype' => 'Skype',
                'linkedin' => 'LinkedIn',
                'rss' => 'RSS',
                'yahoo' => 'Yahoo',
            ),
            'default' => array(
                'facebook' => '1',
                'twitter' => '1',
                'youtube' => '1',
                'vimeo' => '1',
            )
        ),
        array(
            'id'       => 'social_link_blog',
            'type'     => 'sortable',
            'mode'     => 'checkbox',
            'title'    => __('Social Share Box', 'labella'),
            'subtitle' => __('Controls the social share box on the blog post', 'labella'),
            'options'  => array(
                'facebook' => 'Facebook',
                'twitter' => 'Twitter',
                'pinterest' => 'Pinterest',
                'google' => 'Google Plus',
                'linkedin' => 'LinkedIn',
            ),
            'default' => array(
                'facebook' => '1',
                'twitter' => '1',
                'pinterest' => '1',
                'google' => '1',
                'linkedin' => '1',
            )
        ),
    )
);
$this->sections[] = array(
    'title' => __('Social Links', 'labella'),
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Input the Facebook Link', 'labella'),
            'id' => 'facebook',
            'type' => 'text',
            'title' => __('Facebook Link', 'labella'),
            'default' => '#',
        ),
        array(
            'subtitle' => __('Input the Twitter Link', 'labella'),
            'id' => 'twitter',
            'type' => 'text',
            'title' => __('Twitter Link', 'labella'),
            'default' => '#',
        ),
        array(
            'subtitle' => __('Input the Youtube Link', 'labella'),
            'id' => 'youtube',
            'type' => 'text',
            'title' => __('Youtube Link', 'labella'),
            'default' => '#',
        ),
        array(
            'subtitle' => __('Input the Vimeo Link', 'labella'),
            'id' => 'vimeo',
            'type' => 'text',
            'title' => __('Vimeo Link', 'labella'),
            'default' => '#',
        ),
        array(
            'subtitle' => __('Input the Instagram Link', 'labella'),
            'id' => 'instagram',
            'type' => 'text',
            'title' => __('Instagram Link', 'labella'),
            'default' => '#',
        ),
        array(
            'subtitle' => __('Input the Google Plus Link', 'labella'),
            'id' => 'google',
            'type' => 'text',
            'title' => __('Google+ Link', 'labella'),
            'default' => '#',
        ),
        array(
            'subtitle' => __('Input the Skype Link', 'labella'),
            'id' => 'skype',
            'type' => 'text',
            'title' => __('Skype Link', 'labella'),
            'default' => '',
        ),
        array(
            'subtitle' => __('Input the LinkedIn Link', 'labella'),
            'id' => 'linkedin',
            'type' => 'text',
            'title' => __('LinkedIn Link', 'labella'),
            'default' => '',
        ),
        array(
            'subtitle' => __('Input the RSS Link', 'labella'),
            'id' => 'rss',
            'type' => 'text',
            'title' => __('RSS Link', 'labella'),
            'default' => '',
        ),
        array(
            'subtitle' => __('Input the Yahoo Link', 'labella'),
            'id' => 'yahoo',
            'type' => 'text',
            'title' => __('Yahoo Link', 'labella'),
            'default' => '',
        ),
    )
);

/**

/**
 * Styling
 *
 * css color.
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Styling', 'lyon'),
    'icon' => 'el-icon-adjust',
    'fields' => array(
        array(
            'subtitle' => __('set color main color.', 'lyon'),
            'id' => 'primary_color',
            'type' => 'color',
            'title' => __('Primary Color', 'lyon'),
            'default' => '#283c5a'
        ),
        array(
            'subtitle' => __('set color for tags <a></a>.', 'lyon'),
            'id' => 'link_color',
            'type' => 'link_color',
            'title' => __('Link Color', 'lyon'),
            'output'  => array('a'),
            'default' => array(
				'regular'  => '#252525',
				'hover'    => '#283c5a',
				'active'    => '#283c5a',
			)
        ),
    )
);



/** Footer Top Color **/
$this->sections[] = array(
    'title' => __('Footer Top Color', 'lyon'),
    'icon' => 'el-icon-chevron-up',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Set color footer top.', 'lyon'),
            'id' => 'footer_top_color',
            'type' => 'color',
            'output' => array('#zo-footer-top'),
            'title' => __('Footer Top Color', 'lyon'),
            'default' => '#636363'
        ),
        array(
            'subtitle' => __('Set title color footer top.', 'lyon'),
            'id' => 'footer_heading_color',
            'type' => 'color',
            'output' => array('#zo-footer-top h1,#zo-footer-top h2,#zo-footer-top h3,#zo-footer-top h4,#zo-footer-top h5,#zo-footer-top h6'),
            'title' => __('Footer Heading Color', 'lyon'),
            'default' => '#ffffff'
        ),
        array(
            'subtitle' => __('Set title link color footer top.', 'lyon'),
            'id' => 'footer_top_link_color',
            'type' => 'link_color',
            'output' => array('#zo-footer-top a'),
            'title' => __('Footer Link Color', 'lyon'),
            'default' => '#636363',
            'default' => array(
				'regular'  => '#636363',
				'hover'    => '#ee3b24',
			)
        ),
    )
);

/** Footer Bottom Color **/
$this->sections[] = array(
    'title' => __('Footer Bottom Color', 'lyon'),
    'icon' => 'el-icon-chevron-down',
    'subsection' => true,
    'fields' => array(
        array(
            'subtitle' => __('Set color footer top.', 'lyon'),
            'id' => 'footer_bottom_color',
            'type' => 'color',
            'output' => array('#yeah-footer-bottom'),
            'title' => __('Footer Bottom Color', 'lyon'),
            'default' => '#3a3a3a'
        )
    )
);

/**
 * Typography
 *
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Typography', 'lyon'),
    'icon' => 'el-icon-text-width',
    'fields' => array(
        array(
            'id' => 'font_body',
            'type' => 'typography',
            'title' => __('Body Font', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
			'line-height' => false,
			'subsets' => false,
            'units' => 'px',
            'default' => array(
                'color' => '#252525',
                'font-weight' => '400',
                'font-family' => 'Lato',
				'font-backup' => 'Arial, Helvetica, sans-serif',
                'google' => true,
                'font-size' => '16px',
            ),
            'subtitle' => __('Typography option with each property can be called individually.', 'lyon'),
        ),
        array(
            'id' => 'font-body-selector',
            'type' => 'textarea',
            'title' => __('Selector of Body Font', 'lyon'),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id, Note: no use characters: > * + & ^ @ ...), extend class ".body_font" to using this font', 'lyon'),
            'validate' => 'no_html',
            'default' => 'body, .body_font',
        ),
        array(
            'id' => 'font_h1',
            'type' => 'typography',
            'title' => __('H1 Headers Typography', 'lyon'),
            'subtitle' => __('These settings control the typography for all H1 Headers.', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
                'font-family' => 'Old Standard TT',
                'font-weight' => '700',
                'font-size' => '48px',
                'line-height' => '60px',
                'color' => '#252525'
            )
        ),
        array(
            'id' => 'font_h1_margin',
            'title' => __('H1 Headers Margin', 'lyon'),
            'subtitle' => __('Controls the top/bottom margins for the H1. Enter values including any valid CSS unit, ex: 0px, 15px..', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'left' => false,
            'right' => false,
            'default' => array(
                'margin-top'     => '0',
                'margin-bottom'  => '12px',
                'units'          => 'px',
            )
        ),
        array(
            'id' => 'font_h2',
            'type' => 'typography',
            'title' => __('H2 Headers Typography', 'lyon'),
            'subtitle' => __('These settings control the typography for all H2 Headers.', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
                'font-family' => 'Old Standard TT',
                'font-weight' => '700',
                'font-size' => '36px',
                'line-height' => '60px',
                'color' => '#252525'
            )
        ),
        array(
            'id' => 'font_h2_margin',
            'title' => __('H2 Headers Margin', 'lyon'),
            'subtitle' => __('Controls the top/bottom margins for the H2. Enter values including any valid CSS unit, ex: 0px, 15px..', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'left' => false,
            'right' => false,
            'default' => array(
                'margin-top'     => '0',
                'margin-bottom'  => '12px',
                'units'          => 'px',
            )
        ),
        array(
            'id' => 'font_h3',
            'type' => 'typography',
            'title' => __('H3 Headers Typography', 'lyon'),
            'subtitle' => __('These settings control the typography for all H3 Headers.', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
                'font-family' => 'Old Standard TT',
                'font-weight' => '700',
                'font-size' => '30px',
                'line-height' => '51px',
                'color' => '#252525'
            )
        ),
        array(
            'id' => 'font_h3_margin',
            'title' => __('H3 Headers Margin', 'lyon'),
            'subtitle' => __('Controls the top/bottom margins for the H3. Enter values including any valid CSS unit, ex: 0px, 15px..', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'left' => false,
            'right' => false,
            'default' => array(
                'margin-top'     => '0',
                'margin-bottom'  => '12px',
                'units'          => 'px',
            )
        ),
        array(
            'id' => 'font_h4',
            'type' => 'typography',
            'title' => __('H4 Headers Typography', 'lyon'),
            'subtitle' => __('These settings control the typography for all H4 Headers.', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
                'font-family' => 'Old Standard TT',
                'font-weight' => '700',
                'font-size' => '20px',
                'line-height' => '30px',
                'color' => '#252525'
            )
        ),
        array(
            'id' => 'font_h4_margin',
            'title' => __('H4 Headers Margin', 'lyon'),
            'subtitle' => __('Controls the top/bottom margins for the H4. Enter values including any valid CSS unit, ex: 0px, 15px..', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'left' => false,
            'right' => false,
            'default' => array(
                'margin-top'     => '0',
                'margin-bottom'  => '15px',
                'units'          => 'px',
            )
        ),
        array(
            'id' => 'font_h5',
            'type' => 'typography',
            'title' => __('H5 Headers Typography', 'lyon'),
            'subtitle' => __('These settings control the typography for all H5 Headers.', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
                'font-family' => 'Karla',
                'font-weight' => '700',
                'font-size' => '18px',
                'line-height' => '30px',
                'color' => '#000000'
            )
        ),
        array(
            'id' => 'font_h5_margin',
            'title' => __('H5 Headers Margin', 'lyon'),
            'subtitle' => __('Controls the top/bottom margins for the H5. Enter values including any valid CSS unit, ex: 0px, 15px..', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'left' => false,
            'right' => false,
            'default' => array(
                'margin-top'     => '0',
                'margin-bottom'  => '15px',
                'units'          => 'px',
            )
        ),
        array(
            'id' => 'font_h6',
            'type' => 'typography',
            'title' => __('H6 Headers Typography', 'lyon'),
            'subtitle' => __('These settings control the typography for all H6 Headers.', 'lyon'),
            'letter-spacing' => true,
            'google' => true,
            'font-backup' => true,
            'all_styles' => true,
            'units' => 'px',
            'default' => array(
                'font-family' => 'Karla',
                'font-weight' => '700',
                'font-size' => '16px',
                'line-height' => '30px',
                'color' => '#000000'
            )
        ),
        array(
            'id' => 'font_h6_margin',
            'title' => __('H6 Headers Margin', 'lyon'),
            'subtitle' => __('Controls the top/bottom margins for the H6. Enter values including any valid CSS unit, ex: 0px, 15px..', 'lyon'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'left' => false,
            'right' => false,
            'default' => array(
                'margin-top'     => '0',
                'margin-bottom'  => '15px',
                'units'          => 'px',
            )
        ),
    )
);

/* extra font. */
$this->sections[] = array(
    'title' => __('Extra Fonts', 'lyon'),
    'icon' => 'el el-fontsize',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'google-font-1',
            'type' => 'typography',
            'title' => __('Font 1', 'lyon'),
            'google' => true,
            'font-backup' => true,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '400',
                'font-family' => 'Source Sans Pro',
				'font-backup' => 'Arial, Helvetica, sans-serif',
            )
        ),
        array(
            'id' => 'google-font-selector-1',
            'type' => 'textarea',
            'title' => __('Selector of Body Font', 'lyon'),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id, Note: no use characters: > * + & ^ @ ...), extend class ".google-font-1" to using this font', 'lyon'),
            'validate' => 'no_html',
            'default' => '.google-font-1',
        ),
        array(
            'id' => 'google-font-2',
            'type' => 'typography',
            'title' => __('Font 2', 'lyon'),
            'google' => true,
            'font-backup' => false,
            'font-style' => false,
            'color' => false,
            'text-align'=> false,
            'line-height'=>false,
            'font-size'=> false,
            'subsets'=> false,
            'default' => array(
                'font-weight' => '700',
                'font-family' => 'Lato',
				'font-backup' => 'Arial, Helvetica, sans-serif',
            )
        ),
        array(
            'id' => 'google-font-selector-2',
            'type' => 'textarea',
            'title' => __('Selector of Body Font', 'lyon'),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id, Note: no use characters: > * + & ^ @ ...), extend class ".google-font-2" to using this font', 'lyon'),
            'validate' => 'no_html',
            'default' => '.google-font-2',
        ),
    )
);

/* local fonts. */
$this->sections[] = array(
    'title' => __('Local Fonts', 'lyon'),
    'icon' => 'el-icon-bookmark',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'local-fonts-1',
            'type'     => 'select',
            'title'    => __( 'Fonts 1', 'lyon' ),
            'options'  => $local_fonts,
            'default'  => 'museo_slab_100',
        ),
        array(
            'id' => 'local-fonts-selector-1',
            'type' => 'textarea',
            'title' => __('Selector 1', 'lyon'),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id, Note: no use characters: > * + & ^ @ ...), or extend ".museo_slab_100" to use font', 'lyon'),
            'validate' => 'no_html',
            'default' => '.museo_slab_100, h1, h2, h3, h4, h5, h6',
            'required' => array(
                0 => 'local-fonts-1',
                1 => '!=',
                2 => ''
            )
        ),
        array(
            'id'       => 'local-fonts-2',
            'type'     => 'select',
            'title'    => __( 'Fonts 2', 'lyon' ),
            'options'  => $local_fonts,
            'default'  => 'museo_slab_300',
        ),
        array(
            'id' => 'local-fonts-selector-2',
            'type' => 'textarea',
            'title' => __('Selector 2', 'lyon'),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id, Note: no use characters: > * + & ^ @ ...), or extend ".museo_slab_300" to use font', 'lyon'),
            'validate' => 'no_html',
            'default' => '.museo_slab_300, #yeah-header-menu',
            'required' => array(
                0 => 'local-fonts-2',
                1 => '!=',
                2 => ''
            )
        ),
        array(
            'id'       => 'local-fonts-3',
            'type'     => 'select',
            'title'    => __( 'Fonts 3', 'lyon' ),
            'options'  => $local_fonts,
            'default'  => 'museo_slab_500',
        ),
        array(
            'id' => 'local-fonts-selector-3',
            'type' => 'textarea',
            'title' => __('Selector 3', 'lyon'),
            'subtitle' => __('add html tags ID or class (body,a,.class,#id, Note: no use characters: > * + & ^ @ ...), or extend ".museo_slab_500" to use font', 'lyon'),
            'validate' => 'no_html',
            'default' => '.museo_slab_500',
            'required' => array(
                0 => 'local-fonts-3',
                1 => '!=',
                2 => ''
            )
        )
    )
);

/**
 * Custom CSS
 *
 * extra css for customer.
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Custom CSS', 'lyon'),
    'icon' => 'el-icon-bulb',
    'fields' => array(
        array(
            'id' => 'custom_css',
            'type' => 'ace_editor',
            'title' => __('CSS Code', 'lyon'),
            'subtitle' => __('create your css code here.', 'lyon'),
            'mode' => 'css',
            'theme' => 'monokai',
        )
    )
);
/**
 * Animations
 *
 * Animations options for theme. libs css, js.
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Animations', 'lyon'),
    'icon' => 'el-icon-magic',
    'fields' => array(
        array(
            'subtitle' => __('Enable animation mouse scroll...', 'lyon'),
            'id' => 'smoothscroll',
            'type' => 'switch',
            'title' => __('Smooth Scroll', 'lyon'),
            'default' => false
        ),
        array(
            'subtitle' => __('Enable animation parallax for images...', 'lyon'),
            'id' => 'paralax',
            'type' => 'switch',
            'title' => __('Images Paralax', 'lyon'),
            'default' => true
        ),
    )
);

/**
 * Optimal Core
 *
 * Optimal options for theme. optimal speed
 * @author OhYeah
 */
$this->sections[] = array(
    'title' => __('Optimal Core', 'ori'),
    'icon' => 'el-icon-idea',
    'fields' => array(
        array(
            'subtitle' => __('no minimize , generate css over time...', 'lyon'),
            'id' => 'dev_mode',
            'type' => 'switch',
            'title' => __('Dev Mode (not recommended)', 'lyon'),
            'default' => true
        )
    )
);
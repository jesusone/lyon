<?php
vc_map(
	array(
		"name" => __("Progress Bar", 'ohyeahthemes'),
	    "base" => "zo_progressbar",
	    "class" => "vc-zo-progressbar",
	    "category" => __("Ohyeahthemes Shortcodes", 'ohyeahthemes'),
	    "params" => array(
	        array(
	            "type" => "dropdown",
	            "heading" => __("Mode",'ohyeahthemes'),
	            "param_name" => "mode",
	            "value" => array(
	            	"Horizontal" => "horizontal",
	            	"Vertical" => "vertical"
	            	),
	            "group" => __("Progress Bar Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Item Title",'ohyeahthemes'),
	            "param_name" => "item_title",
	            "value" => "",
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Progress Bar Settings", 'ohyeahthemes')
	        ),
            /* Start Icon */
            array(
                'type' => 'dropdown',
                'heading' => __( 'Icon library', 'ohyeahthemes' ),
                'value' => array(
                    __( 'Font Awesome', 'ohyeahthemes' ) => 'fontawesome',
                    __( 'Open Iconic', 'ohyeahthemes' ) => 'openiconic',
                    __( 'Typicons', 'ohyeahthemes' ) => 'typicons',
                    __( 'Entypo', 'ohyeahthemes' ) => 'entypo',
                    __( 'Linecons', 'ohyeahthemes' ) => 'linecons',
                    __( 'Pixel', 'ohyeahthemes' ) => 'pixelicons',
                    __( 'P7 Stroke', 'ohyeahthemes' ) => 'pe7stroke',
                ),
                'param_name' => 'icon_type',
                'description' => __( 'Select icon library.', 'js_composer' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'ohyeahthemes' ),
                'param_name' => 'icon_fontawesome',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'fontawesome',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'fontawesome',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'ohyeahthemes' ),
                'param_name' => 'icon_openiconic',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'openiconic',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'openiconic',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'ohyeahthemes' ),
                'param_name' => 'icon_typicons',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'typicons',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'typicons',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'ohyeahthemes' ),
                'param_name' => 'icon_entypo',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'entypo',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'entypo',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'ohyeahthemes' ),
                'param_name' => 'icon_linecons',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'linecons',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'linecons',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'ohyeahthemes' ),
                'param_name' => 'icon_pixelicons',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'pixelicons',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'pixelicons',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'ohyeahthemes' ),
                'param_name' => 'icon_pe7stroke',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'pe7stroke',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'pe7stroke',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Progress Bar Settings", 'ohyeahthemes')
            ),
            /* End Icon */
			array(
			"type" => "dropdown",
			"heading" => __ ( 'Show Value', 'ohyeahthemes' ),
			"param_name" => "show_value",
			"value" => array(
					"Yes" => "true",
					"No" => "false"
			),
			"description" => '',
			"group" => __("Progress Bar Settings", 'ohyeahthemes')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"value" => "60",
				"heading" => __ ( "Value", 'ohyeahthemes' ),
				"param_name" => "value",
				"description" => "Number only, ex: 60",
				"group" => __("Progress Bar Settings", 'ohyeahthemes')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __ ( "Value Suffix", 'ohyeahthemes' ),
				"group" => __("Progress Bar Settings", 'ohyeahthemes'),
				"param_name" => "value_suffix",
				"description" => ""
			),
			array(
				"type" => "colorpicker",
				"heading" => __ ( 'Background Color Bar', 'ohyeahthemes' ),
				"param_name" => "bg_color",
				"group" => __("Progress Bar Settings", 'ohyeahthemes'),
				"value" =>"#e9e9e9",
				"description" => __('Background color for wrapper bar. Default is #e9e9e9','ohyeahthemes')
			),
			array(
				"type" => "colorpicker",
				"heading" => __ ( 'Progress Color', 'ohyeahthemes' ),
				"param_name" => "color",
				"group" => __("Progress Bar Settings", 'ohyeahthemes'),
				"description" => __('Background color for progress.','ohyeahthemes')
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __ ( "Width", 'ohyeahthemes' ),
				"param_name" => "width",
				"value" => "250px",
				"group" => __("Progress Bar Settings", 'ohyeahthemes'),
				"description" => "in px"
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => __ ( "Height", 'ohyeahthemes' ),
				"param_name" => "height",
				"value" => "50px",
				"group" => __("Progress Bar Settings", 'ohyeahthemes'),
				"description" => "in px"
			),
			array(
			    "type" => "textfield",
			    "heading" => __ ( 'Border Radius', 'ohyeahthemes' ),
			    "param_name" => "border_radius",
			    "group" => __("Progress Bar Settings", 'ohyeahthemes'),
			    "description" => 'px,%,...'
			),
			array(
	            "type" => "dropdown",
	            "heading" => __("Striped",'ohyeahthemes'),
	            "param_name" => "striped",
	            "value" => array(
	            	"Yes" => "yes",
	            	"No" => "no"
	            	),
	            "group" => __("Progress Bar Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Extra Class",'ohyeahthemes'),
	            "param_name" => "class",
	            "value" => "",
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Template", 'ohyeahthemes')
	        ),
	    	array(
	            "type" => "zo_template",
	            "param_name" => "zo_template",
	            "shortcode" => "zo_progressbar",
                "admin_label" => true,
                "heading" => __("Shortcode Template",'ohyeahthemes'),
	            "group" => __("Template", 'ohyeahthemes'),
	        )
	    )
	)
);
class WPBakeryShortCode_zo_progressbar extends ZoShortcode{
	protected function content($atts, $content = null){
		$atts_extra = shortcode_atts(array(
			'mode' => 'horizontal',
			'item_title' => '',
			'show_value' => 'false',
			'value'=> '60',
			'value_suffix'=> '',
			'bg_color'=> '#e9e9e9',
			'color'=> '',
			'width'=> '250px',
			'height'=> '50px',
			'border_radius'=> '',
			'striped'=> 'no',
			'class' => '',
			'zo_template' => 'zo_progressbar.php'
		), $atts);

        $atts['icon_type'] = isset($atts['icon_type']) ? $atts['icon_type'] : 'fontawesome';

		$atts = array_merge($atts_extra,$atts);
        if($atts['icon_type']=='pe7stroke'){
            wp_enqueue_style('zo-icon-pe7stroke', ZO_CSS. 'Pe-icon-7-stroke.css');
        }else{
            vc_icon_element_fonts_enqueue( $atts['icon_type'] );
        }
		/* CSS */
	    wp_register_style('bootstrap-progressbar', ZO_CSS . "bootstrap-progressbar.min.css","","0.7.0","all");
	    wp_enqueue_style('bootstrap-progressbar');
	    /* JS */
	    wp_register_script('bootstrap-progressbar', ZO_JS . "bootstrap-progressbar.min.js",array('jquery'),"0.7.0",true);
	    wp_register_script('zo-progressbar', ZO_JS . "bootstrap-progressbar.zo.js",array('jquery','bootstrap-progressbar'),"1.0.0",true);
	    wp_enqueue_script('zo-progressbar');
	    wp_enqueue_script('waypoints');
	    /* Layout */
        $html_id = zoHtmlID('zo-progressbar');
        /* Get Icon */
        $icon_name = "icon_" . $atts['icon_type'];
        $atts['icon'] = isset($atts[$icon_name]) ? $atts[$icon_name] : '';
        $atts['template'] = 'template-'.str_replace('.php','',$atts['zo_template']) . ' '. $atts['class'];
        $atts['html_id'] = $html_id;
		return parent::content($atts, $content);
	}
}
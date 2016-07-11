<?php 
vc_map(
	array(
		"name" => __("Single Counter", 'ohyeahthemes'),
	    "base" => "zo_counter_single",
	    "class" => "vc-zo-counter",
	    "category" => __("Ohyeahthemes Shortcodes", 'ohyeahthemes'),
	    "params" => array(
	        /* Counters */
	        array(
	            "type" => "dropdown",
	            "heading" => __("Using Grouping",'ohyeahthemes'),
	            "param_name" => "grouping",
	            "std" => "false",
	            "value" => array(
				"True" => "true",
				"False" => "false"
				),
	            "group" => __("Counters Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Separator",'ohyeahthemes'),
	            "param_name" => "separator",
	            "value" => ",",
	            'dependency' => array(
	            	"element"=>"grouping",
	            	"value"=>array(
						"true"
						)
	            	),
	            "group" => __("Counters Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "heading",
	            "heading" => __("Counter",'ohyeahthemes'),
	            "param_name" => "heading",
	            "group" => __("Counters Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Title Counter",'ohyeahthemes'),
	            "param_name" => "title",
	            "value" => "",
	            "description" => __("Title Of Item",'ohyeahthemes'),
	            "group" => __("Counters Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "dropdown",
	            "heading" => __("Counter Type",'ohyeahthemes'),
	            "param_name" => "type",
	            "value" => array(
	            	"Zero",
	            	"Random"
                ),
	            "group" => __("Counters Settings", 'ohyeahthemes')
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
                    __( 'Et Line', 'ohyeahthemes' ) => 'etline',
                    __( 'Linear Icons', 'ohyeahthemes' ) => 'linearicons'
                ),
                'std' => 'fontawesome',
                'param_name' => 'icon_type',
                'description' => __( 'Select icon library.', 'js_composer' ),
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
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
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
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
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
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
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
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
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
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
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
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
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
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
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
                'param_name' => 'icon_etline',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'etline',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'etline',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
                'param_name' => 'icon_linearicons',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'linearicons',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'linearicons',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
            /* End Icon */
	        array(
	            "type" => "textfield",
	            "heading" => __("Digit",'ohyeahthemes'),
	            "param_name" => "digit",
	            "value" => "69",
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Counters Settings", 'ohyeahthemes')
	        ),
            array(
                "type" => "textfield",
                "heading" => __("Prefix",'ohyeahthemes'),
                "param_name" => "prefix",
                "value" => "",
                "description" => __("",'ohyeahthemes'),
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Suffix",'ohyeahthemes'),
	            "param_name" => "suffix",
	            "value" => "",
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Counters Settings", 'ohyeahthemes')
	        ),
            array(
                "type" => "textfield",
                "heading" => __("Description",'ohyeahthemes'),
                "param_name" => "description",
                "value" => "",
                "description" => __("",'ohyeahthemes'),
                "group" => __("Counters Settings", 'ohyeahthemes')
            ),
	        /* End Counters */
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
	            "heading" => __("Shortcode Template",'ohyeahthemes'),
	            "param_name" => "zo_template",
	            "shortcode" => "zo_counter_single",
	            "admin_label" => true,
	            "group" => __("Template", 'ohyeahthemes'),
	        )
		)
	)
);
class WPBakeryShortCode_zo_counter_single extends ZoShortcode{
	protected function content($atts, $content = null){
		$atts_extra = shortcode_atts(array(
			'title' => '',
			'description' => '',
			'grouping' => 'false',
			'separator' => ',',
			'content_align' => 'default',
            'icon_type' => 'fontawesome',
            'icon_fontawesome' => '',
            'icon_openiconic' => '',
            'icon_typicons' => '',
            'icon_entypoicons' => '',
            'icon_linecons' => '',
            'icon_entypo' => '',
            'icon_pe7stroke' => '',
            'icon_etline' => '',
            'icon_linearicons' => '',
			'class' => '',
			'zo_template' => 'zo_counter_single.php'
		), $atts);
		$atts = array_merge($atts_extra,$atts);
		wp_register_script('counter', ZO_JS. 'counter.min.js', array('jquery'),'1.0.0',true);
		wp_register_script('counter-zo', ZO_JS. 'counter.zo.js', array('counter','waypoints'),'1.0.0',true);
		wp_enqueue_script('counter-zo');
        $html_id = zoHtmlID('zo-counter');

        if($atts['icon_type']=='pe7stroke'){
            wp_enqueue_style('zo-icon-pe7stroke', ZO_CSS. 'Pe-icon-7-stroke.css');
        }elseif($atts['icon_type']=='etline'){
            wp_enqueue_style('zo-icon-etline', ZO_CSS. 'et-line.css');
        }elseif($atts['icon_type']=='linearicons'){
            wp_enqueue_style('zo-icon-linearicons', ZO_CSS. 'linearicons.css');
        }else{
            vc_icon_element_fonts_enqueue( $atts['icon_type'] );
        }

        $class = ($atts['class']) ? $atts['class']:'';
        $atts['template'] = 'template-'.str_replace('.php','',$atts['zo_template']). ' '. $class;
        $atts['html_id'] = $html_id;
		return parent::content($atts, $content);
	}
}
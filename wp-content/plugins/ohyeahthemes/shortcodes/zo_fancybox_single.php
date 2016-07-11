<?php
vc_map(
	array(
		"name" => __("Single Fancy Box", 'ohyeahthemes'),
	    "base" => "zo_fancybox_single",
	    "class" => "vc-zo-fancy-boxes",
	    "category" => __("Ohyeahthemes Shortcodes", 'ohyeahthemes'),
	    "params" => array(
	    	array(
	            "type" => "textfield",
	            "heading" => __("Title",'ohyeahthemes'),
	            "param_name" => "title",
	            "value" => "",
	            "description" => __("Title Of Fancy Icon Box",'ohyeahthemes'),
	            "group" => __("General Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textarea",
	            "heading" => __("Description",'ohyeahthemes'),
	            "param_name" => "description",
	            "value" => "",
	            "description" => __("Description Of Fancy Icon Box",'ohyeahthemes'),
	            "group" => __("General Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "dropdown",
	            "heading" => __("Content Align",'ohyeahthemes'),
	            "param_name" => "content_align",
	            "value" => array(
	            	"Default" => "default",
	            	"Left" => "left",
	            	"Right" => "right",
	            	"Center" => "center"
	            	),
	            "group" => __("General Settings", 'ohyeahthemes')
	        ),
	        /* Start Items */
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
                    __( 'Fajar', 'ohyeahthemes' ) => 'fajar',
                    __( 'Linear Icons', 'ohyeahthemes' ) => 'linearicons'
				),
                'std' => 'fontawesome',
				'param_name' => 'icon_type',
				'description' => __( 'Select icon library.', 'js_composer' ),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
                "group" => __("Fancy Icon Settings", 'ohyeahthemes')
            ),
			array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon Item', 'ohyeahthemes' ),
                'param_name' => 'icon_fajar',
                'value' => '',
                'settings' => array(
                    'emptyIcon' => true, // default true, display an "EMPTY" icon?
                    'type' => 'fajar',
                    'iconsPerPage' => 200, // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'fajar',
                ),
                'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
                "group" => __("Fancy Icon Settings", 'ohyeahthemes')
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
                "group" => __("Fancy Icon Settings", 'ohyeahthemes')
            ),
			/* End Icon */
			array(
	            "type" => "attach_image",
	            "heading" => __("Image Item",'ohyeahthemes'),
	            "param_name" => "image",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Title Item",'ohyeahthemes'),
	            "param_name" => "title_item",
	            "value" => "",
	            "description" => __("Title Of Item",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textarea",
	            "heading" => __("Content Item",'ohyeahthemes'),
	            "param_name" => "description_item",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        /* End Items */
	        array(
	            "type" => "dropdown",
	            "heading" => __("Button Type",'ohyeahthemes'),
	            "param_name" => "button_type",
	            "value" => array(
	            	"Button" => "button",
	            	"Text" => "text"
	            	),
	            "group" => __("Buttons Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Link",'ohyeahthemes'),
	            "param_name" => "button_link",
	            "value" => "",
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Buttons Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Text",'ohyeahthemes'),
	            "param_name" => "button_text",
	            "value" => "",
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Buttons Settings", 'ohyeahthemes')
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
	            "admin_label" => true,
	            "heading" => __("Shortcode Template",'ohyeahthemes'),
	            "shortcode" => "zo_fancybox_single",
	            "group" => __("Template", 'ohyeahthemes'),
	        )
		)
	)
);
class WPBakeryShortCode_zo_fancybox_single extends ZoShortcode{
	protected function content($atts, $content = null){
		$atts_extra = shortcode_atts(array(
			'title' => '',
			'description' => '',
			'content_align' => 'default',
			'button_type'=> 'button',
			'button_text'=> '',
			'button_link'=> '',
			'icon_type' => 'fontawesome',
			'icon_fontawesome' => '',
			'icon_openiconic' => '',
			'icon_typicons' => '',
			'icon_entypoicons' => '',
			'icon_linecons' => '',
			'icon_entypo' => '',
			'icon_pe7stroke' => '',
            'icon_etline' => '',
            'icon_fajar' => '',
            'icon_linearicons' => '',
			'description_item' => '',
			'class' => '',
			'zo_template' => 'zo_fancybox_single.php'
			    ), $atts);
		$atts = array_merge($atts_extra,$atts);
		$atts['icon_type'] = isset($atts['icon_type'])?$atts['icon_type']:'fontawesome';
		$atts['description_item'] = isset($atts['description_item'])?$atts['description_item']:'';
		$atts['title_item'] = isset($atts['title_item'])?$atts['title_item']:'';
		if($atts['icon_type']=='pe7stroke'){
	        wp_enqueue_style('zo-icon-pe7stroke', ZO_CSS. 'Pe-icon-7-stroke.css');
	    }elseif($atts['icon_type']=='etline'){
            wp_enqueue_style('zo-icon-etline', ZO_CSS. 'et-line.css');
        }elseif($atts['icon_type']=='fajar'){
            wp_enqueue_style('zo-icon-fajar', ZO_CSS. 'fajar-icons.css');
        }
		elseif($atts['icon_type']=='linearicons'){
            wp_enqueue_style('zo-icon-linearicons', ZO_CSS. 'linearicons.css');
        }else{
	        vc_icon_element_fonts_enqueue( $atts['icon_type'] );
	    }
        $html_id = zoHtmlID('zo-fancy-box-single');
        $atts['template'] = 'template-'.str_replace('.php','',$atts['zo_template']). ' content-align-' . $atts['content_align'] . ' '. $atts['class'];
        $atts['html_id'] = $html_id;
		return parent::content($atts, $content);
	}
}
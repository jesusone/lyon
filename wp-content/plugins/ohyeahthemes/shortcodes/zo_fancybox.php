<?php
vc_map(
	array(
		"name" => __("Fancy Box", 'ohyeahthemes'),
	    "base" => "zo_fancybox",
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
	        array(
	            "type" => "dropdown",
	            "heading" => __("Select Number Cols",'ohyeahthemes'),
	            "param_name" => "zo_cols",
	            "value" => array(
	            	"1 Column",
	            	"2 Columns",
	            	"3 Columns",
	            	"4 Columns",
	            	"5 Columns",
	            	"6 Columns",
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        /* Start Items */
	        array(
	            "type" => "heading",
	            "heading" => __("Fancy Box 1",'ohyeahthemes'),
	            "param_name" => "heading_1",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						"1 Column"
						)
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
				'type' => 'iconpicker',
				'heading' => __( 'Icon Item 1', 'ohyeahthemes' ),
				'param_name' => 'icon1',
	            'value' => '',
				'settings' => array(
					'emptyIcon' => true, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						"1 Column"
						)
	            	),
				'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
	            "type" => "attach_image",
	            "heading" => __("Image Item 1",'ohyeahthemes'),
	            "param_name" => "image1",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						"1 Column"
						)
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Title Item 1",'ohyeahthemes'),
	            "param_name" => "title1",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"5 Columns",
						"6 Columns",
						"4 Columns",
						"3 Columns",
						"1 Column"
						)
	            	),
	            "value" => "",
	            "description" => __("Title Of Item",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textarea",
	            "heading" => __("Content Item 1",'ohyeahthemes'),
	            "param_name" => "description1",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"5 Columns",
						"6 Columns",
						"4 Columns",
						"3 Columns",
						"1 Column"
						)
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Link 1",'ohyeahthemes'),
	            "param_name" => "button_link1",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						"1 Column"
						)
	            	),
	            "value" => "",
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "heading",
	            "heading" => __("Fancy Box 2",'ohyeahthemes'),
	            "param_name" => "heading_2",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
				'type' => 'iconpicker',
				'heading' => __( 'Icon Item 2', 'ohyeahthemes' ),
				'param_name' => 'icon2',
				'dependency' => array(
						"element"=>"zo_cols",
						"value"=>array(
							"2 Columns",
							"6 Columns",
							"5 Columns",
							"4 Columns",
							"3 Columns",
						)
					),
	            'value' => '',
				'settings' => array(
					'emptyIcon' => true, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
	            "type" => "attach_image",
	            "heading" => __("Image Item 2",'ohyeahthemes'),
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
					),
	            "param_name" => "image2",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Title Item 2",'ohyeahthemes'),
	            "param_name" => "title2",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "description" => __("Title Of Item",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textarea",
	            "heading" => __("Content Item 2",'ohyeahthemes'),
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "param_name" => "description2",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Link 2",'ohyeahthemes'),
	            "param_name" => "button_link2",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"2 Columns",
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "heading",
	            "heading" => __("Fancy Box 3",'ohyeahthemes'),
	            "param_name" => "heading_3",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
				'type' => 'iconpicker',
				'heading' => __( 'Icon Item 3', 'ohyeahthemes' ),
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
					),
				'param_name' => 'icon3',
	            'value' => '',
				'settings' => array(
					'emptyIcon' => true, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
	            "type" => "attach_image",
	            "heading" => __("Image Item 3",'ohyeahthemes'),
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "param_name" => "image3",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Title Item 3",'ohyeahthemes'),
	            "param_name" => "title3",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "description" => __("Title Of Item",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textarea",
	            "heading" => __("Content Item 3",'ohyeahthemes'),
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "param_name" => "description3",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Link 3",'ohyeahthemes'),
	            "param_name" => "button_link3",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						"3 Columns",
						)
	            	),
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "heading",
	            "heading" => __("Fancy Box 4",'ohyeahthemes'),
	            "param_name" => "heading_4",
	            'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						)
					),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
				'type' => 'iconpicker',
				'heading' => __( 'Icon Item 4', 'ohyeahthemes' ),
				'param_name' => 'icon4',
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						)
					),
	            'value' => '',
				'settings' => array(
					'emptyIcon' => true, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
	            "type" => "attach_image",
	            "heading" => __("Image Item 4",'ohyeahthemes'),
	            "param_name" => "image4",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						)
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Title Item 4",'ohyeahthemes'),
	            "param_name" => "title4",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						)
	            	),
	            "description" => __("Title Of Item",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textarea",
	            "heading" => __("Content Item 4",'ohyeahthemes'),
	            "param_name" => "description4",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						)
	            	),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Link 4",'ohyeahthemes'),
	            "param_name" => "button_link4",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						"5 Columns",
						"4 Columns",
						)
	            	),
	            "description" => __("",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
			/*End 4*/
			array(
				"type" => "heading",
				"heading" => __("Fancy Box 5",'ohyeahthemes'),
				"param_name" => "heading_5",
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
					)
				),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
				'type' => 'iconpicker',
				'heading' => __( 'Icon Item 5', 'ohyeahthemes' ),
				'param_name' => 'icon5',
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
					)
				),
				'value' => '',
				'settings' => array(
					'emptyIcon' => true, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
				"type" => "attach_image",
				"heading" => __("Image Item 5",'ohyeahthemes'),
				"param_name" => "image5",
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
					)
				),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
				"type" => "textfield",
				"heading" => __("Title Item 5",'ohyeahthemes'),
				"param_name" => "title5",
				"value" => "",
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
					)
				),
				"description" => __("Title Of Item",'ohyeahthemes'),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
				"type" => "textarea",
				"heading" => __("Content Item 5",'ohyeahthemes'),
				"param_name" => "description5",
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
					)
				),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
				"type" => "textfield",
				"heading" => __("Link 5",'ohyeahthemes'),
				"param_name" => "button_link5",
				"value" => "",
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>array(
						"6 Columns",
						"5 Columns",
					)
				),
				"description" => __("",'ohyeahthemes'),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
	        array(
	            "type" => "heading",
	            "heading" => __("Fancy Box 6",'ohyeahthemes'),
	            "param_name" => "heading_6",
	            'dependency' => array(
					"element"=>"zo_cols",
					"value"=>"6 Columns"
					),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
				'type' => 'iconpicker',
				'heading' => __( 'Icon Item 6', 'ohyeahthemes' ),
				'param_name' => 'icon6',
				'dependency' => array(
					"element"=>"zo_cols",
					"value"=>"6 Columns"
					),
	            'value' => '',
				'settings' => array(
					'emptyIcon' => true, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
				),
				'description' => __( 'Select icon from library.', 'ohyeahthemes' ),
				"group" => __("Fancy Icon Settings", 'ohyeahthemes')
			),
			array(
	            "type" => "attach_image",
	            "heading" => __("Image Item 6",'ohyeahthemes'),
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>"6 Columns"
	            	),
	            "param_name" => "image6",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Title Item 6",'ohyeahthemes'),
	            "param_name" => "title6",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						)
	            	),
	            "description" => __("Title Of Item",'ohyeahthemes'),
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textarea",
	            "heading" => __("Content Item 6",'ohyeahthemes'),
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>"6 Columns"
	            	),
	            "param_name" => "description6",
	            "group" => __("Fancy Icon Settings", 'ohyeahthemes')
	        ),
	        array(
	            "type" => "textfield",
	            "heading" => __("Link 6",'ohyeahthemes'),
	            "param_name" => "button_link6",
	            "value" => "",
	            'dependency' => array(
	            	"element"=>"zo_cols",
	            	"value"=>array(
						"6 Columns",
						)
	            	),
	            "description" => __("",'ohyeahthemes'),
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
	            "shortcode" => "zo_fancybox",
	            "group" => __("Template", 'ohyeahthemes'),
	        )
		)
	)
);
class WPBakeryShortCode_zo_fancybox extends ZoShortcode{
	protected function content($atts, $content = null){
		$atts_extra = shortcode_atts(array(
			'title' => '',
			'description' => '',
			'content_align' => 'default',
			'zo_cols' => '1 Column',
			'button_type'=> 'button',
			'button_text'=> '',
			'class' => '',
			'zo_template' => 'zo_fancybox.php'
			    ), $atts);
		$atts = array_merge($atts_extra,$atts);
        $html_id = zoHtmlID('zo-fancy-box');

        //set grid
        switch($atts['zo_cols']){
            case "1 Column":
                $item_class = "col-xs-12 col-sm-12 col-md-12 col-lg-12";
                break;
            case "2 Columns":
                $item_class = "col-xs-12 col-sm-6 col-md-6 col-lg-6";
                break;
            case "3 Columns":
                $item_class = "col-xs-12 col-sm-6 col-md-4 col-lg-4";
                break;
            case "4 Columns":
                $item_class = "col-xs-12 col-sm-6 col-md-3 col-lg-3";
                break;
			case "5 Columns":
                $item_class = "col-xs-12 col-sm-6 col-md-5 col-lg-5";
                break;
            case "6 Columns":
                $item_class = "col-xs-12 col-sm-6 col-md-2 col-lg-2";
                break;
            default:
                $item_class = "";
                break;
        }
        $atts['template'] = 'template-'.str_replace('.php','',$atts['zo_template']). ' content-align-' . $atts['content_align'] . ' '. $atts['class'];
        $atts['html_id'] = $html_id;
        $atts['item_class'] = $item_class;
		return parent::content($atts, $content);
	}
}

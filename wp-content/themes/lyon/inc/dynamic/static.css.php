<?php

/**
 * Auto create .css file from Theme Options
 * @author ZoTheme
 * @version 1.0.0
 */
class ZoTheme_StaticCss
{

    public $scss;

    function __construct()
    {
        global $smof_data;

        /* scss */
        $this->scss = new scssc();

        /* set paths scss */
        $this->scss->setImportPaths(get_template_directory() . '/assets/scss/');

        /* generate css over time */
        if (isset($smof_data['dev_mode']) && $smof_data['dev_mode']) {
            $this->generate_file();
        } else {
            /* save option generate css */
            add_action("redux/options/smof_data/saved", array(
                $this,
                'generate_file'
            ));
        }
    }

    /**
     * generate css file.
     *
     * @since 1.0.0
     */
    public function generate_file()
    {
        global $smof_data;
        if (! empty($smof_data)) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            WP_Filesystem();
            global $wp_filesystem;

            /* write options to scss file */
            
			if ( ! $wp_filesystem->put_contents( get_template_directory() . '/assets/scss/options.scss', $this->css_render(), 0644 ) ) {
				_e( 'Error saving file!', 'fajar' );
			}

            /* minimize CSS styles */
            if (!$smof_data['dev_mode']) {
                $this->scss->setFormatter('scss_formatter_compressed');
            }

            /* compile scss to css */
            $css = $this->scss_render();

            $file = "static.css";

            if(!empty($smof_data['presets_color']) && $smof_data['presets_color']){
                $file = "presets-".$smof_data['presets_color'].".css";
            }

            /* write static.css file */
			if ( ! $wp_filesystem->put_contents( get_template_directory() . '/assets/css/' . $file, $css, 0644) ) {
				_e( 'Error saving file!', 'fajar' );
			}
        }
    }

    /**
     * scss compile
     *
     * @since 1.0.0
     * @return string
     */
    public function scss_render(){
        /* compile scss to css */
        return $this->scss->compile('@import "master.scss"');
    }

    /**
     * main css
     *
     * @since 1.0.0
     * @return string
     */
    public function css_render()
    {
        global $smof_data, $zo_base;
        ob_start();
        /* local fonts */
        $zo_base->setTypographyLocal($smof_data['local-fonts-1'], $smof_data['local-fonts-selector-1']);
        $zo_base->setTypographyLocal($smof_data['local-fonts-2'], $smof_data['local-fonts-selector-2']);
        $zo_base->setTypographyLocal($smof_data['local-fonts-3'], $smof_data['local-fonts-selector-3']);
		/* Google Font Selecter */
		$zo_base->setGoogleFont($smof_data['font_body'], wp_filter_nohtml_kses($smof_data['font-body-selector']));
		$zo_base->setGoogleFont($smof_data['google-font-1'], wp_filter_nohtml_kses($smof_data['google-font-selector-1']));
		zo_setvariablescss($smof_data['primary_color'],'$primary_color','#ee3b24');
		zo_setvariablescss($smof_data['link_color']['regular'],'$link_color','#333333');
		zo_setvariablescss($smof_data['link_color']['hover'],'$link_color_hover','#ee3b24');
		zo_setvariablescss($smof_data['main_logo_height']['height'],'$main_logo_height','');
        /* ==========================================================================
           Start Header
        ========================================================================== */      

        /* Header Main */
        if($smof_data['main_logo_height']){
            echo "#yeah-header-logo a img { max-height: \$main_logo_height; }";
        }
        if(!empty($smof_data['bg_header']['rgba'])) {
            echo "#yeah-header { background-color:".esc_attr($smof_data['bg_header']['rgba'])."; }";
        }
        /* End Header Main */

        /* Main Menu */
        if(!empty($smof_data['menu_padding'])){
            echo ".yeah-header-navigation .main-navigation .nav-menu > li {";
			 if(!empty($smof_data['menu_padding']['padding-top']))
                    echo 'padding-top: ' . esc_attr($smof_data['menu_padding']['padding-top']) . ';';
                if(!empty($smof_data['menu_padding']['padding-left']))
                    echo 'padding-left: ' . esc_attr($smof_data['menu_padding']['padding-left']) . ';';
                if(!empty($smof_data['menu_padding']['padding-bottom']))
                    echo 'padding-bottom: ' . esc_attr($smof_data['menu_padding']['padding-bottom']) . ';';
                if(!empty($smof_data['menu_padding']['padding-right']))
                    echo 'padding-right: ' . esc_attr($smof_data['menu_padding']['padding-right']) . ';';
              echo "}";
        }
		if($smof_data['menu_first_level_uppercase']){
			echo "#yeah-header-navigation .main-navigation .menu-main-menu > li > a,
			#yeah-header-navigation .main-navigation .menu-main-menu > ul > li > a {
				text-transform: uppercase;
			}";

		}
		 //MENU HEIGHT
        if(!empty($smof_data['menu_height'])){

            echo '#yeah-header .yeah-header-navigation .main-navigation .nav-menu > li > a {';
            echo 	'height: ' . esc_attr($smof_data['menu_height']) . 'px;';
            echo 	'line-height: ' . esc_attr($smof_data['menu_height']) . 'px;';
            echo '}';

        }
         /* Color - Main Menu */
		if(!empty($smof_data['menu_color_first_level'])) {
			echo ".nav-menu > li,
			.nav-menu > li > a,
			.widget_cart_search_wrap a {
				color:".esc_attr($smof_data['menu_color_first_level']).";
			}";
		}
		if(!empty($smof_data['menu_color_hover_first_level'])) {
			echo ".nav-menu > li:hover,
			.nav-menu > li:hover > a,
			.widget_cart_search_wrap a:hover {
				color:".esc_attr($smof_data['menu_color_hover_first_level']).";
			}";
			echo ".nav-menu > li:hover {
				border-bottom-color: ".esc_attr($smof_data['menu_color_hover_first_level']).";
			}";
		}
		if(!empty($smof_data['menu_color_active_first_level'])){
			echo ".nav-menu ul > li.current-menu-item,
			.nav-menu ul > li.current-menu-ancestor,
			.nav-menu ul > li.current_page_item,
			.nav-menu ul > li.current_page_ancestor,
			.nav-menu ul > li.current-menu-parent,
			.nav-menu ul > li.current-menu-item > a,
			.nav-menu ul > li.current-menu-ancestor > a,
			.nav-menu ul > li.current_page_item > a,
			.nav-menu ul > li.current_page_ancestor > a,
			.nav-menu ul > li.current-menu-parent > a,
			 {
				color:".esc_attr($smof_data['menu_color_active_first_level']).";
			}";

		}
        	/* Sub Menu */
		if(!empty($smof_data['menu_color_sub_level'])){
			echo ".nav-menu > li ul li,
			.nav-menu > li ul li > a {
				color:".esc_attr($smof_data['menu_color_sub_level']).";
			}";
		}
		if(!empty($smof_data['menu_color_hover_sub_level'])){
			echo ".nav-menu > li ul a:focus,
			.nav-menu > li ul li:hover,
			.nav-menu > li ul li.current-menu-item,
			.nav-menu > li ul li.current-menu-parent,
			.nav-menu > li ul li.current-menu-ancestor,
			.nav-menu > li ul li.current_page_item,
			.nav-menu > li ul li:hover > a,
			.nav-menu > li ul li.current-menu-item > a,
			.nav-menu > li ul li.current-menu-parent > a,
			.nav-menu > li ul li.current-menu-ancestor > a,
			.nav-menu > li ul li.current_page_item > a {
				color:".esc_attr($smof_data['menu_color_hover_sub_level']).";
			}";
		}
		if(!empty($smof_data['sub_menu_uppercase'])){
			echo "#yeah-header-navigation .main-navigation .menu-main-menu li ul a {
				text-transform: uppercase;
			}";
		}
        /* End Main Menu */

        /* ==========================================================================
           End Header
        ========================================================================== */
        return ob_get_clean();
    }
}

new ZoTheme_StaticCss();
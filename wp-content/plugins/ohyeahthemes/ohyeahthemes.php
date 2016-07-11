<?php
/**
*
* Plugin Name: OhyeahThemes
* Plugin URI: http://ohyeahthemes.com/
* Description: This plugin is package compilation some addons, which is developed by OhyeahThemes Team for Visual Comporser plugin.
* Version: 1.0.0
* Author: OhyeahThemes
* Author URI: http://themeforest.net/user/ohyeahtheme
* Copyright 2016 Ohyeahthemes. All rights reserved.
*/

define( 'ZO_DIR', plugin_dir_path(__FILE__) );
define( 'ZO_URL', plugin_dir_url(__FILE__) );
define( 'ZO_LIBRARIES', ZO_DIR  . "libraries" . DIRECTORY_SEPARATOR );
define( 'ZO_LANGUAGES', ZO_DIR . "languages" . DIRECTORY_SEPARATOR );
define( 'ZO_TEMPLATES', ZO_DIR . "templates" . DIRECTORY_SEPARATOR );
define( 'ZO_INCLUDES', ZO_DIR . "includes" . DIRECTORY_SEPARATOR );

define( 'ZO_CSS', ZO_URL . "assets/css/" );
define( 'ZO_JS', ZO_URL . "assets/js/" );
define( 'ZO_IMAGES', ZO_URL . "assets/images/" );
/**
* Require functions on plugin
*/
require_once ZO_INCLUDES . "functions.php";
/**
* Use ZoThemeCore class
*/
new ZoThemeCore();
/**
* Zotheme Class
* 
*/
class ZoThemeCore{
	public function __construct(){
		/**
		* Init function, which is run on site init and plugin loaded
		*/
		add_action('plugins_loaded', array( $this, 'zoActionInit'));
		add_filter('style_loader_tag', array( $this, 'zoValidateStylesheet'));
		
		/**
		* Enqueue Scripts on plugin
		*/
		add_action('wp_enqueue_scripts', array( $this, 'zo_register_style'));
		add_action('wp_enqueue_scripts', array( $this, 'zo_register_script'));
		/**
		 * Enqueue Scripts into Admin
		 */
		add_action('admin_enqueue_scripts', array( $this, 'zo_register_style'));
		add_action('admin_enqueue_scripts', array( $this, 'zo_admin_script'));
		/**
		* Visual Composer action
		*/
		add_action('vc_before_init', array($this, 'zoShortcodeRegister'));
		add_action('vc_after_init', array($this, 'zoShortcodeAddParams'));
		/**
		* widget text apply shortcode
		*/
		add_filter('widget_text', 'do_shortcode');
	}
	function zoActionInit(){
	    // Localization
	    load_plugin_textdomain('ohyeahthemes', false, ZO_LANGUAGES);
	}
	function zoShortcodeRegister() {
	    //Load required libararies
	    require_once ZO_INCLUDES . 'zo_shortcodes.php';
	}

    /**
     * Add Shortcode Params
     *
     * @return none
     */
    function zoShortcodeAddParams(){
        $extra_params_folder = get_template_directory() . '/vc_params';
        $files = zoFileScanDirectory($extra_params_folder,'/^zo_.*\.php/');
        if(!empty($files)){
            foreach($files as $file){
                if(WPBMap::exists($file->name)){
                    include $file->uri;
                    if(isset($params) && is_array($params)){
                        foreach($params as $param){
                            if(is_array($param)){
                                $param['group'] = __('Template', 'ohyeahthemes');
                                $param['edit_field_class'] = isset($param['edit_field_class'])? $param['edit_field_class'].' zo_custom_param vc_col-sm-12 vc_column':'zo_custom_param vc_col-sm-12 vc_column';
                                $param['class'] = 'zo-extra-param';
                                if(isset($param['template']) && !empty($param['template'])){
                                    if(!is_array($param['template'])){
                                        $param['template'] = array($param['template']);
                                    }
                                    $param['dependency'] = array("element"=>"zo_template", "value" => $param['template']);

                                }
                                vc_add_param($file->name, $param);
                            }
                        }
                    }
                }
            }
        }
    }
	/**
	* Function register stylesheet on plugin
	*/
	function zo_register_style(){
		wp_enqueue_style('ohyeah-plugin-stylesheet', ZO_CSS. 'ohyeah-style.css');
		wp_register_style('ohyeah-font-stroke7', ZO_CSS . 'Pe-icon-7-stroke.css', array(), '1.2.0');
		wp_register_style('ohyeah-font-etline', ZO_CSS . 'et-line.css', array(), '1.0.0');
		wp_register_style('ohyeah-font-linearicons', ZO_CSS . 'linearicons.css', array(), '1.0.0');

		$mobile = (strstr($_SERVER['HTTP_USER_AGENT'],'Android') || strstr($_SERVER['HTTP_USER_AGENT'],'webOS') || strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') || wp_is_mobile()) ? true : false;
		if($mobile){
			wp_dequeue_style('js_composer_front');
			wp_deregister_style('js_composer_front');
			wp_enqueue_style( 'zo_js_composer_front',ZO_CSS. 'js_composer.css');
		}
	}
	/**
	 * replace rel on stylesheet (Fix validator link style tag attribute)
	 */
	function zoValidateStylesheet($src) {
	    if(strstr($src,'widget_search_modal-css')||strstr($src,'owl-carousel-css') || strstr($src,'vc_google_fonts')){
	        return str_replace('rel', 'property="stylesheet" rel', $src);
	    } else {
	        return $src;
	    }
	}
	/**
	* Function register script on plugin
	*/
	function zo_register_script(){
		wp_register_script('modernizr', ZO_JS. 'modernizr.min.js', array('jquery'));
		wp_register_script('waypoints', ZO_JS. 'waypoints.min.js', array('jquery'));
		wp_register_script('imagesloaded', ZO_JS. 'jquery.imagesloaded.js', array('jquery'));
		wp_register_script('jquery-shuffle', ZO_JS . 'jquery.shuffle.js', array('jquery','modernizr','imagesloaded'));
		wp_register_script('ohyeah-jquery-shuffle', ZO_JS. 'jquery.shuffle.ohyeah.js', array('jquery-shuffle'));
        wp_register_script('ohyeah-masonry', ZO_JS. 'ohyeah.masonry.js', array('jquery-shuffle', 'jquery-ui-resizable'));
        wp_register_script('ohyeah-masonry-admin', ZO_JS. 'ohyeah.masonry.admin.js', array('ohyeah-masonry'));
        wp_register_style('ohyeah-jquery-ui', ZO_CSS . 'jquery-ui.css', array(), '1.2.0');
    }
	/**
	 * Register Scripts to admin
	 */
	function zo_admin_script(){
		wp_enqueue_style('ohyeah-font-stroke7');
		wp_enqueue_style('ohyeah-font-etline');
		wp_enqueue_style('ohyeah-font-linearicons');
	}
}
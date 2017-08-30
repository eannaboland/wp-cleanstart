<?php

if (!defined('UD_CENTRAL_DIR')) die('Security check');

class UpdraftCentral_Module_AdvancedTools {

	const MODULE_NAME = 'advancedtools';

	public function __construct() {
		add_action('updraftcentral_load_dashboard_js', array($this, 'load_dashboard_js'));
		add_action('updraftcentral_load_dashboard_css', array($this, 'load_dashboard_css'));
		add_action('updraftcentral_dashboard_post_navigation', array($this, 'dashboard_post_navigation'));
		add_action('updraftcentral_site_row_after_buttons', array($this, 'site_row_after_buttons'));
		add_filter('updraftcentral_main_navigation_items', array($this, 'main_navigation_items'));
		add_filter('updraftcentral_udrclion', array($this, 'udrclion'));
		add_filter('updraftcentral_template_directories', array($this, 'template_directories'));
	}
	
	public function load_dashboard_js($enqueue_version) {
			wp_enqueue_script('updraftcentral-dashboard-activities-'.self::MODULE_NAME, UD_CENTRAL_URL.'/modules/'.self::MODULE_NAME.'/'.self::MODULE_NAME.'.js', array('updraftcentral-dashboard', 'jquery'), $enqueue_version);
	}
	
	public function load_dashboard_css($enqueue_version) {
		wp_enqueue_style('updraftcentral-dashboard-css-'.self::MODULE_NAME, UD_CENTRAL_URL.'/modules/'.self::MODULE_NAME.'/'.self::MODULE_NAME.'.css', array('updraftcentral-dashboard-css'), $enqueue_version);
	}
	
	public function udrclion($localize) {
		$localize[self::MODULE_NAME] = include(__DIR__.'/translations-dashboard.php');
		return $localize;
	}
	
	public function site_row_after_buttons() {
		UpdraftCentral()->include_template(self::MODULE_NAME.'/site-row-buttons.php');
	}

	public function main_navigation_items($items) {

		$items[self::MODULE_NAME] = array('label' => __('Tools', 'updraftcentral'), 'sort_order' => 50);
		
		return $items;
	}

	public function dashboard_post_navigation() {
		UpdraftCentral()->include_template(self::MODULE_NAME.'/management-actions.php');
	}

	public function template_directories($template_directories) {
		$template_directories[self::MODULE_NAME] = __DIR__.'/templates';
		return $template_directories;
	}
}

new UpdraftCentral_Module_AdvancedTools();

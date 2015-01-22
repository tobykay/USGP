<?php
/**
 * Plugin Name: MenuMaker Pro
 * Plugin URI: http://cssmenumaker.com/
 * Description: Wordpress Plugin to build dynamic, responsive, multi level menu navigations.
 * Version: 1.1.3
 * Author: cssmenumaker
 * Author URI: http://cssmenumaker.com/
 * License: GPL2
 */

/* Include Files */
add_action('plugins_loaded', 'cssmenumaker_pro_menu_load');
function cssmenumaker_pro_menu_load()
{  
  require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cssmenumaker_post_type.php');  
  require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cssmenumaker_widget.php');
  require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'walker.php');  
}


/* 
 * Ajax callback for Dynamic CSS and jQuery 
 */
add_action('wp_ajax_pro_dynamic_css', 'pro_dynamic_css');
add_action('wp_ajax_nopriv_pro_dynamic_css', 'pro_dynamic_css');
function pro_dynamic_css() {
  require(dirname(__FILE__).DIRECTORY_SEPARATOR.'css/dynamic.css.php');
  exit;
}  
add_action('wp_ajax_pro_dynamic_script', 'pro_dynamic_script');
add_action('wp_ajax_nopriv_pro_dynamic_script', 'pro_dynamic_script');
function pro_dynamic_script() {
  require(dirname(__FILE__).DIRECTORY_SEPARATOR.'scripts/dynamic.js.php');
  exit;
}
add_action('wp_ajax_get_menu_json', 'pro_ajax_get_menu_json');
add_action('wp_ajax_nopriv_get_menu_json', 'pro_ajax_get_menu_json');
function pro_ajax_get_menu_json() {
  $theme_id = $_GET['theme_id'];
  print file_get_contents(dirname(__FILE__).DIRECTORY_SEPARATOR."menus/{$theme_id}/menu.json");
  die();
}  

// Base CSS Styles
add_action('wp_enqueue_scripts', 'cssmenumaker_pro_base_styles');
function cssmenumaker_pro_base_styles() {
  wp_register_style( 'cssmenumaker-base-styles', plugins_url().'/cssmenumaker_pro/css/menu_styles.css', array(), '', 'all' );
  wp_enqueue_style( 'cssmenumaker-base-styles');
}



/* 
 * This filter modifies the HTML output of our menus before printing to the screen
 * 
 */
add_filter('wp_nav_menu_args', 'cssmenumaker_pro_modify_nav_menu_args', 5000);
function cssmenumaker_pro_modify_nav_menu_args($args)
{
  /* Pass cssmenumaker_flag & cssmenumaker_id to the wp_nav_menu() and this filter kicks in */
  if(isset($args['cssmenumaker_flag']) && isset($args['cssmenumaker_id'])) {

    $id = $args['cssmenumaker_id'];
    $menu_settings = json_decode(get_post_meta($id, 'cssmenu_settings', true));     
    $wordpress_menu = get_post_meta($id, "cssmenu_structure", true);
    
    $align_class = (isset($menu_settings->currentSettings->menu_align)) ? "align-".$menu_settings->currentSettings->menu_align : "";
    
    $args['menu'] = $wordpress_menu;
    $args['container'] = "div";
		$args['container_id'] = "cssmenu-{$id}";
		$args['container_class'] = "cssmenumaker-menu {$align_class}";
    $args['menu_class'] = '';
    $args['menu_id'] = '';
    $args['items_wrap'] = '<ul id="%1$s" class="%2$s">%3$s</ul>';
    $args['depth'] = $menu_settings->depth;       
    $args['walker'] = new CSS_Menu_Maker_Pro_Walker();
    
  } 

  /* We are changing Args for a menu displayed in a theme location */
  $available_menus = get_posts(array("post_type" => "cssmenupro"));    
  foreach($available_menus as $id => $available_menu) {
    $cssmenu_location = get_post_meta( $available_menu->ID, 'cssmenu_location', true );
    $cssmenu_structure = get_post_meta( $available_menu->ID, 'cssmenu_structure', true );    
    $menu_css = get_post_meta($available_menu->ID, "cssmenu_css", true);
    $menu_js = get_post_meta($available_menu->ID, "cssmenu_js", true);
    $current_theme_id =  esc_html( get_post_meta($available_menu->ID, 'cssmenu_theme_id', true));  
    $menu_settings = json_decode(get_post_meta( $available_menu->ID, 'cssmenu_settings', true)); 
    
    if ($cssmenu_location == $args['theme_location']) {
      $align_class =  (isset($menu_settings->currentSettings->menu_align)) ? "align-".$menu_settings->currentSettings->menu_align : "" ;
      $args['menu'] = $cssmenu_structure;
  		$args['container'] = "div";
      $args['container_id'] = "cssmenu-{$available_menu->ID}";
  		$args['container_class'] = "cssmenumaker-menu {$align_class}";
      $args['menu_class'] = '';
      $args['menu_id'] = '';
      $args['items_wrap'] = '<ul id="%1$s" class="%2$s">%3$s</ul>';
      $args['depth'] = $menu_settings->depth;            
      $args['walker'] = new CSS_Menu_Maker_Pro_Walker();
      
      wp_register_style("dynamic-css-{$available_menu->ID}", admin_url('admin-ajax.php')."?action=pro_dynamic_css&selected={$available_menu->ID}", array(), '', 'all');
      wp_enqueue_style("dynamic-css-{$available_menu->ID}");
      if($menu_js) {
        wp_enqueue_script("dynamic-script-{$available_menu->ID}", admin_url('admin-ajax.php')."?action=pro_dynamic_script&selected={$available_menu->ID}");    
      }            
  	}
  }

	return $args;
}


/* 
 * Generic Print Menu
 * $menu_id  = the post ID
 */

function cssmenumaker_pro_print_menu($menu_id = 0)
{
  /* Did we get a valid menu ID? */
  $post = get_post(intval($menu_id));
  if(!$post || $post->post_type != 'cssmenupro') {
    print "The ID you provided is not a valid MenuMaker menu.";
    return;
  }
  $current_theme_id =  esc_html( get_post_meta(intval($menu_id), 'cssmenu_theme_id', true));  

  wp_nav_menu(array(
    'cssmenumaker_flag' => true,
    'cssmenumaker_id' => $menu_id
  ));


  $menu_css = get_post_meta($menu_id, "cssmenu_css", true);
  $menu_js = get_post_meta($menu_id, "cssmenu_js", true);    
  if($menu_css) {
    wp_enqueue_style('cssmenumaker-base-styles', plugins_url().'/cssmenumaker_pro/css/menu_styles.css');
    wp_enqueue_style("dynamic-css-{$menu_id}", admin_url('admin-ajax.php')."?action=pro_dynamic_css&selected={$menu_id}");      
  }
  if($menu_js) {
    wp_enqueue_script("dynamic-script-{$menu_id}", admin_url('admin-ajax.php')."?action=pro_dynamic_script&selected={$menu_id}");    
  }    

}



/* 
 * Shortcodes
 */

add_shortcode('cssmenumakerpro', 'cssmenumaker_pro_shortcode');
function cssmenumaker_pro_shortcode($atts) 
{
  extract(shortcode_atts(array('id' => 0), $atts));  
  return cssmenumaker_pro_print_menu($atts['id']);
}
add_filter('manage_edit-cssmenupro_columns', 'cssmenumaker_pro_edit_columns') ;
function cssmenumaker_pro_edit_columns($columns) 
{
	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Menus' ),
		'shortcode' => __( 'Shortcode' ),
		'date' => __( 'Date' )
	);
	return $columns;
}
add_action('manage_cssmenupro_posts_custom_column', 'cssmenumaker_pro_manage_columns', 10, 2);
function cssmenumaker_pro_manage_columns($column, $post_id) 
{
	global $post;
	switch( $column ) {
		case 'shortcode' :
				print '[cssmenumakerpro id="'.$post_id.'"]';
			break;
		default :
			break;
	}
}




?>
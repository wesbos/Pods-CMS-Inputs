<?php


// jquery

   wp_deregister_script( 'jquery' );
   wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script('jquery-ui-core');
    
    
  // backend

add_action('admin_menu', 'podscms_inputs');

function podscms_inputs() {
	add_options_page('Pods CMS Inputs', 'Pods CMS Inputs', 'manage_options', 'my-unique-identifier', 'my_plugin_options');
}

function my_plugin_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}

include('page-inputs.php'); 

}
?>




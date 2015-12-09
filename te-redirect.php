<?php 
/*
Plugin Name: Redirect
Plugin URI: http://te-online.net/
Description: Simple Shortcode, that transforms a page or post with the content of <code>[redirect]http://te-online.net/[/redirect]</code> into a HTML redirect.
Author: Thomas Ebert
Version: 1.0
Author URI: http://te-online.net/
*/

class te_Redirect {
	// Constructor
	public function __construct() {
		add_shortcode( 'redirect', array( $this, 'do_redirect' ) );
	} // END function __construct()
	
	function do_redirect($atts, $content = null) {
		if( !empty( $content ) ) {
			return '<meta content="0;url='.$content.'" http-equiv="refresh" />';
		}
	}
}

$my_redirect = new te_Redirect(); 
?>

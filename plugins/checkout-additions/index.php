<?php

/*
Plugin Name: Checkout Additions
*/

add_action("wp_footer", "cad_adeel_checkout", 19);	
function cad_adeel_checkout() {
	wp_enqueue_style("cad_style_1", plugins_url("css/style.css", __FILE__), array(), "0.0.5");
	wp_enqueue_script("cd_adeel_script_1", plugins_url("js/script.js", __FILE__), array("jquery"), "0.0.5", true);
}

<?php
/*
Plugin Name: Auto User Create
Description: Creates a mirror user from //mining4truth.com to //news.mining4truth.com. Also shows the top user navigation bar on //mining4truth.com
Version: 0.0.1
Author: Muhammad Adeel
Author URI: http://tech.digital
*/

function custom_login_top() {
    if(is_user_logged_in()) {
	$content = '<a style="color: #ededed;" href="';
	
	$user = get_current_user_id();
	if(is_super_admin($user)) {
            $content .= "https://mining4truth.com/wp-admin/";
	} else {
            $content .= "https://mining4truth.com/dashboard/";
	}
	
	$content .='">My Account</a>';
	$content .= "&nbsp;|&nbsp;";
        $content .= '<a style="color: #ededed;" href="https://mining4truth.com/?mlogout=1">Logout</a>';
    } else {
        $content = '<a style="color: #ededed;" href="https://mining4truth.com/sign-up/">SignUp</a>';
	$content .= '&nbsp;<span style="color:#ededed;">|</span>&nbsp;';
        $content .= '<a style="color: #ededed;" href="https://mining4truth.com/login/">Login</a>';
    }
    
    return $content;
}
add_shortcode("my_top_login", "custom_login_top");

function contenthalf_callback(){
    if(!is_user_logged_in()) {
        echo '
            <style>
            .woocommerce-Input {
                width: 100% !important;
                box-sizing: border-box;
            }
            .woocommerce h2 {
                letter-spacing: 0;
            }
            .title_holder {
                display: none !important;
            }
            .woocommerce {
                width: 50%;
                margin: 0 auto 80px;
                background: #e6e6fa;
                padding: 50px;
                box-sizing: border-box;
                border-left: 5px solid #DCAC34;
            }
            .woocommerce h2 {
                letter-spacing: 0;
                padding: 0;
                margin: 0;
                font-size: 45px;
                line-height: 45px;
                margin-bottom: 33px;
                color: #999;
                text-shadow: 0 1px 0 #777;
            }
            </style>
        ';
    }
}
add_shortcode("contenthalf", "contenthalf_callback"); 

add_action( 'woocommerce_after_customer_login_form', 'custom_login_text' );
function custom_login_text() {
    if( ! is_user_logged_in() ){
        $link = home_url( '/sign-up/' );
        echo '<p>'. __("Not a user? <a href='$link'>Register Now<a/>", "woocommerce").'</p>';
    }
}

// logout 
function adeel2(){
global $wp_query;
//var_dump($wp_query);
	if(isset($_GET["mlogout"]) && $_GET["mlogout"] == 1) {
		wp_clear_auth_cookie();
		wp_logout();

		if(isset($_GET["route"]) && $_GET["route"] == "final") {
			$url = "https://mining4truth.com/login/";
		} else {
			$url = "https://news.mining4truth.com/mirror_logins.php?logout=1";
		}	
		wp_redirect($url);
		exit;
	}
}
add_action("wp_loaded", "adeel2");

// auto User
function adeel_sendPost(){
	$url = "https://news.mining4truth.com/woo_proc.php";
	$option = array(
		"http" => array(
			"header" => "Content-type: application/x-www-form-urlencoded\r\n",
			"method" => "POST",
			"content" => http_build_query($_POST)
		)
	);	
	$context = stream_context_create($option);
	$result = file_get_contents($url, false, $context);

}
add_action("user_register", "adeel_sendPost");

// mirror logins
add_action("wp_login", "mirror_logins");
function mirror_logins($user_login) {
	$url = "https://news.mining4truth.com/mirror_logins.php";
	wp_redirect($url . "?user=" . $user_login);
	exit;

}

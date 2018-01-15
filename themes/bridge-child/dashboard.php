<?php

/*
Template Name: Dashboard Template
*/

if(isset($_GET["logout"]) && $_GET["logout"] == 1) {
	wp_logout();
	wp_redirect(get_site_url("", "/login/"));
	exit;
}



if(!isset($_GET["page"])) {
	wp_redirect("?page=index.html");
	exit;
}

$page = $_GET["page"];
$a = file_get_contents(get_stylesheet_directory() . "/Dark/" . $page);

if($a) {
	$user = wp_get_current_user();
	
    $links = get_stylesheet_directory_uri() . "/Dark/";
    $right_sidebar = get_template_part("Dark/dash/sidebar");
    $title = wp_title('');
    $user_img = get_avatar_url($user->ID);
    $nice_name = $user->display_name;
    $left_sd_crypto_links = "adeel_left_cryto";
    
	$changes = array(
		"links" => "[LINKS]",
		"right_sidebar" => "[RIGHT_SIDEBAR]",
		"title" => "[TITLE]",
		"user_img" => "[USER_IMG]",
		"nice_name" => "[NICE_NAME]",
		"left_sd_crypto_links" => "[LEFT_SD_CRYPTO_LINKS]"
	);
	foreach($changes as $key => $value) {
		$value = preg_quote($value, "~");
		$a = preg_replace("~" . $value . "~", $$key, $a);
	}

	echo $a;
} else {
    wp_redirect("?page=page-404.html");
    exit;
}
?>
 


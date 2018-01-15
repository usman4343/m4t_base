<?php

/*
Template Name: Dashboard Template
*/

if(isset($_GET["logout"]) && $_GET["logout"] == 1) {
	wp_logout();
	wp_redirect(get_site_url("", "/login/"));
	exit;
}

get_header("dashboard");

if(!isset($_GET["page"])) {
	wp_redirect("?page=index.html");
	exit;
}

$page = $_GET["page"];
$a = file_get_contents(get_template_directory() . "/Dark/" . $page);
$link = get_template_directory_uri() . "/Dark/";

// change the links
$b = preg_replace("~\[LINKS\]~", $link, $a);

// inject the notifications bar
$b = preg_replace("~\[RIGHT_SIDEBAR\]~", get_template_part("Dark/dash/sidebar"), $b);
echo $b;
get_footer("dashboard");

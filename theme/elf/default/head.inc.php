<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         head.inc.php
* @Package:      elf
* @Action:       Output head HTML;
* @Author:		 Shaun Wilesmith
*
*****************************************************/
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php get_page_clean_title(); ?> &mdash;  <?php get_site_name(); ?></title>

	<?php get_header(); ?>

<!-- Load Foundation libraries -->
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/foundation.min.css" />
<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/common.css">

<?php
	/* This checks whether there is a specific css file for this page and loads it. */
	$page_specific_css_file =  "/css/" . get_page_slug(false) . ".css";
	if (file_exists("theme/elf/".$page_specific_css_file))
	{

		 echo '<link rel="stylesheet" href="' . get_theme_url(false) . $page_specific_css_file . '">';

	}
?>

<script src="<?php get_theme_url(); ?>/js/vendor/jquery.js"></script>
<script src="<?php get_theme_url(); ?>/js/vendor/what-input.js"></script>
<script src="<?php get_theme_url(); ?>/js/vendor/foundation.js"></script>
<script src="<?php get_theme_url(); ?>/js/main.js"></script>

<script src="<?php get_theme_url(); ?>/js/script.js"></script>
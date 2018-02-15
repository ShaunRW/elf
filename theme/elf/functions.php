<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         functions.php
* @Package:      elf
* @Action:       Global functions for the theme.
* @Author:		 Shaun Wilesmith
*
*****************************************************/

function get_navigation_children($parent_slug = ""){
	$menu_data = menu_data();
	foreach($menu_data as $page){
		if($page['menu_status']=='Y' && $page['parent_slug']==$parent_slug){
			$children[] = $page;
		}
	}
	return $children;
}

function has_active_navigation_link($children){
	foreach($children as $child){
		if(return_page_slug()==$child['slug']){
			return true;
		}
	}
	return false;
}

?>
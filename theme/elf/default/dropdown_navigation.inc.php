<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         navigation.inc.php
* @Package:      themeSO
* @Action:       Output Navigation HTML.
* @Author:		 Shaun Wilesmith
*
*****************************************************/ ?>

<ul class="dropdown menu" data-dropdown-menu>
	<?php
		$top_level = get_navigation_children();
		foreach($top_level as $link)
		{
			$children = get_navigation_children($link['slug']);
			if(is_array($children))
			{
				echo "<a href='".$link['url']."'>".$link['menu_text']."</a>";
	
				echo "<ul class='menu'>";
				foreach($children as $sublink){
					echo ($sublink['slug']==return_page_slug()) ? "<li class='active'>" : "<li>";
					echo "<a href='".$sublink['url']."'>".$sublink['menu_text']."</a></li>";
				}
				echo "</ul></li>";
			}
			else
			{
				echo ($link['slug']==return_page_slug()) ? "<li class='active'>" : "<li>";
				echo "<a href='".$link['url']."'>".$link['menu_text']."</a></li>";
			}
		} 
	?>
</ul>
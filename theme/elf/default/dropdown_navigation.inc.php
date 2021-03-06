<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         navigation.inc.php
* @Package:      elf
* @Action:       Output Navigation HTML.
* @Author:		 Shaun Wilesmith
*
*****************************************************/ ?>

<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="large">
	<button class="" type="button" data-toggle="main-menu">
		<div class="title-bar-title"><span class="fa fa-bars"></span> MENU</div>
	</button>
</div>

<div class="top-bar" id="main-menu">
    <ul class="dropdown menu" data-responsive-menu="accordion large-dropdown">
      <?php
			$top_level = get_navigation_children();
			foreach($top_level as $link)
			{
				$children = get_navigation_children($link['slug']);
				if(is_array($children))
				{
					echo "<li class='has-submenu'><a href='".$link['url']."'>".$link['menu_text']."</a>";
		
					echo "<ul class='submenu menu vertical'>";
					foreach($children as $sublink){
						echo ($sublink['slug']==return_page_slug()) ? "<li class='is-active'>" : "<li>";
						echo "<a href='".$sublink['url']."'>".$sublink['menu_text']."</a></li>";
					}
					echo "</ul></li>";
				}
				else
				{
					echo ($link['slug']==return_page_slug()) ? "<li class='is-active'>" : "<li>";
					echo "<a href='".$link['url']."'>".$link['menu_text']."</a></li>";
				}
			} 
		?>
    </ul>
</div>


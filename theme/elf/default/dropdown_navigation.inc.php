<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         navigation.inc.php
* @Package:      themeSO
* @Action:       Output Navigation HTML.
* @Author:		 Shaun Wilesmith
*
*****************************************************/ ?>

<div class="row">
	<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="large">
	  <button class="menu-icon" type="button" data-toggle="main-menu"></button>
	  <div class="title-bar-title">Sunraysia Outdoors</div>
	</div>
	
	<div class="top-bar" id="main-menu">
	  <div class="top-bar-left">
	    <ul class="dropdown menu expanded vertical large-horizontal" data-dropdown-menu>
	      
			<?php
				$top_level = get_navigation_children();
				foreach($top_level as $link){
					$children = get_navigation_children($link['slug']);
					if(is_array($children)){
	
						if(has_active_navigation_link($children)){
							echo "<li class='menu active'>";
						}else{
							echo "<li class='menu'>";
						}
						echo "<a href='".$link['url']."'>".$link['menu_text']."</a>";
	
						echo "<ul class='menu'>";
						foreach($children as $sublink){
							echo ($sublink['slug']==return_page_slug()) ? "<li class='active'>" : "<li>";
							echo "<a href='".$sublink['url']."'>".$sublink['menu_text']."</a></li>";
						}
						echo "</ul></li>";
					}else{
						echo ($link['slug']==return_page_slug()) ? "<li class='active'>" : "<li>";
						echo "<a href='".$link['url']."'>".$link['menu_text']."</a></li>";
					}
				}
			?>
	
	    </ul>
	  </div>
	</div>
</div>
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
	  <div class="title-bar-title">MENU</div>
	</div>
	
	<div class="top-bar" id="main-menu">
	  <div class="top-bar-left">
	    <ul class="menu expanded vertical large-horizontal">
	      
			<?php
				$top_level = get_navigation_children();
				foreach($top_level as $link) {
					//echo ($link['slug']==return_page_slug()) ? "<li class='active'>" : "<li>";
					echo "<li><a href='".$link['url']."'>".$link['menu_text']."</a></li>";
				}
			?>
	
	    </ul>
	  </div>
	</div>
</div>
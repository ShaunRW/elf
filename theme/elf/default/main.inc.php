<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         main.inc.php
* @Package:      themeSO
* @Action:       Output content HTML supplied to the getSimple cms.
* @Author:		 Shaun Wilesmith
*
*****************************************************/ ?>

<?php if (return_page_slug()!="index") { ?>
	<div class="fluid content-title-bar-container shadow-container">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell content-title-bar">
					<div class="shadow top"></div>
					<div class="content-title">
						<h1><?php get_page_clean_title(); ?></h1>
						<div class="breadcrumbs"><a class="home" href="<?php get_site_url(); ?>"><span class="fa fa-home"></span> Home</a> → <span class="current-page"><?php get_page_clean_title(); ?></span></div>
					</div>
					<div class="shadow bottom"></div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<div class="content-wrapper"><?php get_page_content(); ?></div>
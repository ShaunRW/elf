<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         header.inc.php
* @Package:      elf
* @Action:       Output header HTML;
* @Author:		 Shaun Wilesmith
*
*****************************************************/
?>

<div class="fluid top-contact-bar-outer-container hide-for-small-only hide-for-medium-only">
	<div class="grid-container top-contact-bar-container">
		<div class="grid-x">
			<div class="cell text-right contact-bar">
				<span class="phone-contact"><span class="fa fa-phone"></span> 0400 123 456</span> or
				<span class="email-contact"><a href="<?php get_site_url(); ?>/contact-us"><span class="fa fa-envelope"></span> Email</a></span>
			</div>
		</div>
	</div>
</div>

<div class="fluid header-outer-container">
	<div class="grid-container header-main-inner-container">
		<div class="grid-x">
			<div class="small-6 large-3 align-self-middle header-logo-container"><a href="<?php get_site_url(); ?>"><img src="http://via.placeholder.com/256x64?text=Logo"></a></div>
			<div class="small-12 large-7 align-self-middle header-navigation-container">

				<?php require("dropdown_navigation.inc.php"); ?>

			</div>
			<div class="small-2 align-self-middle text-right header-quote-btn-container hide-for-small-only hide-for-medium-only">
				<a href="<?php get_site_url(); ?>/contact-us"><div class="quote-button">Request a<br/> Free Quote!</div></a>
			</div>
		</div>
	</div>
</div>
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

<div class="fluid top-contact-bar-outer-container">
	<div class="grid-container top-contact-bar-container">
		<div class="grid-x">
			<div class="cell text-right contact-bar">
				<span class="phone-contact"><span class="fa fa-phone"></span> 0400 123 456</span> or
				<span class="email-contact"><span class="fa fa-envelope"></span> Email</span>
			</div>
		</div>
	</div>
</div>

<div class="fluid header-outer-container">
	<div class="grid-container header-main-inner-container">
		<div class="grid-x">
			<div class="small-3 align-self-middle header-logo-container"><a href="<?php get_site_url(); ?>"><img src="http://via.placeholder.com/256x64?text=Logo"></a></div>
			<div class="small-6 align-self-middle header-navigation-container">
				<ul class="dropdown menu" data-dropdown-menu>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li>
						<a href="#">Fencing</a>
						<ul class="menu">
							<li><a href="#">Treated Pine Fencing</a></li>
							<li><a href="#">COLORBOND Fencing</a></li>
							<li><a href="#">Chain Wire Fencing</a></li>
						</ul>
					</li>
					<li><a href="#">Landscaping</a></li>
					<li><a href="#">Contact US</a></li>
				</ul>
			</div>
			<div class="small-3 align-self-middle text-right header-quote-btn-container">
				<div class="quote-button">Request a<br/> Free Quote!</div>
			</div>
		</div>
	</div>
</div>
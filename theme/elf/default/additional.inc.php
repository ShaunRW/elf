<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         header.inc.php
* @Package:      themeSO
* @Action:       Output additional HTML supplied by the CMS, and initiate the foundation css library;
* @Author:		 Shaun Wilesmith
*
*****************************************************/
?>

<?php get_component('additional'); ?>

<script>
	$(document).ready(function() {
	    $(document).foundation();
	    $(".owl-carousel").owlCarousel({
	    	navText: ["<",">"],
	    	responsiveClass: true,
	    	responsive:{
	    		0:{
	    			items: 1,
	    			nav: false
	    		},
	    		640:{
	    			items: 2,
	    			nav: true
	    		},
	    		1024:{
	    			items: 3,
	    			nav: true
	    		}
	    	}
	    });
	})
</script>
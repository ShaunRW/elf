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
	})
</script>
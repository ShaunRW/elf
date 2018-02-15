<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         template.php
* @Package:      elf
* @Action:       Main template file. Ties all template files together.
* @Author:		 Shaun Wilesmith
*
*****************************************************/
?>

<!DOCTYPE html>
<html lang=en>
	
	<head>

		<?php require('default/head.inc.php'); ?>
	
	</head>


	<body>

		<?php require('default/header.inc.php'); ?>
		<?php //require('default/navigation.inc.php'); ?>
		<?php require('default/main.inc.php'); ?>
		<?php require('default/footer.inc.php'); ?>

		<?php require('default/additional.inc.php'); ?>

	</body>
</html>
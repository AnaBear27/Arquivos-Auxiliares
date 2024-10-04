<?php
	include("lib/smarty/libs/Smarty.class.php");
	
	$smarty = new Smarty;
	
	$smarty->cache_dir="cache";
	$smarty->config_dir="configs";
	$smarty->compile_dir="templates_c";
	$smarty->templates_dir="templates";
?>
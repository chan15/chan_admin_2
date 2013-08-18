<?php
include'../main.php';
include 'login-policy.php';
$pageItemName = ''; // nav name
$subItemName = ''; // sidebar name
$incCssArr = array();
$incJsArr = array();
include 'inc.php';
include 'nav.php';

$smarty->display('admin/welcome.tpl');
?>

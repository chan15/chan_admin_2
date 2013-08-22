<?php
include'../main.php';
include 'login-policy.php';
$pageItemName = ''; // nav name
$subItemName = ''; // sidebar name
include 'inc.php';
include 'nav.php';

$smarty->display('admin/welcome.tpl');
?>

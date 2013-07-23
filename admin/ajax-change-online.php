<?php
include '../main.php';
$chan->checkSourceUrl();

switch ($_POST['tableField']) {
    case 'tbl_test':
        $loginAuth = 1;
        break;
}

include 'login-policy.php';

$chan->dbConnect();
$chan->table = @$_POST['tableField'];
$chan->pk = @$_POST['idField'];
$chan->pkValue= @$_POST['id'];
$chan->addField(@$_POST['onField'], @$_POST['action']);
$chan->dataUpdate();
?>


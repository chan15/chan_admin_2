<?php
include '../main.php';

if (isset($_POST['login'])) {
    $chan->checkSourceUrl();
    $username = @$_POST['username'];
    $password = @$_POST['password'];

    if ($username !='' && $password != '') {
        $chan->dbConnect();
        $sql = sprintf("SELECT * FROM tbl_admin WHERE a_username = %s AND a_password = %s",
            $chan->toSql($username, 'text'),
            $chan->toSql($password, 'text'));
        $row = $chan->myOneRow($sql);

        if (!$row) {
            echo '查無資料';
        } else {
            $_SESSION['admin'] = true;
        }
        exit;
    }
}

$smarty->display('admin/index.tpl');
?>

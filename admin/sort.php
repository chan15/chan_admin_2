<?php
include_once '../main.php';
$chan->checkSourceUrl();
$chan->dbConnect();

$tableField = $_POST['tableField'];
$idField = $_POST['idField'];
$sortField = $_POST['sortField'];
$idSerial = $_POST['idSerial'];
$sortSerial = $_POST['sortSerial'];

if ($idSerial == '' || $sortSerial == '') exit;

$idArr = explode(',', $idSerial);
$sortArr = explode(',', $sortSerial);
if (count($idArr) != count($sortArr)) exit;

// start update sort
$chan->table = $tableField;
foreach ($idArr as $k => $id) {
    $chan->pk = $idField;
    $chan->pkValue = $id;
    $chan->addField($sortField, $sortArr[$k], 'int');
    $chan->dataUpdate();
}
?>

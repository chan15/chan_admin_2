<?php
include '../main.php';
include 'login-policy.php';
$chan->checkSourceUrl();
$chan->dbConnect();

$id = $_POST['id'];
$tableField = $_POST['tableField'];
$idField = $_POST['idField'];
$idArr = explode(',', $id);

foreach ($idArr as $k) {
    $chan->table = $tableField;
	$chan->pk = $idField;
	$chan->pkValue = $k;
	
	// delete file if needed
	switch($tableField) {
        case 'tbl':
			$path = '../uploads/test/';
			$chan->fileDelArr[] = $chan->getFileName('m_img');
			$chan->dataFileDel($path);
        break;
    }
	
	$chan->dataDelete();

    // delete detail data if needed
    switch ($tableField) {
        case 'tbl_news':
            $sqlDetail = sprintf("SELECT nd_id, nd_img FROM tbl_news_detail WHERE n_id = %s",
                $chan->toSql($k, 'int'));
            $rowDetail = $chan->myRow($sqlDetail);
            if ($rowNewsDetail) {
                foreach ($rowDetail as $detail) {
                    $chan->table = 'tbl_detail';
                    $chan->pk = 'd_id';
                    $chan->pkValue = $detail['d_id'];
                    $chan->fileDelArr[] = $detail['d_img'];
                    $chan->dataFileDel($path);
                    $chan->dataDelete();
                }
            }
        break;
    }
}
?>

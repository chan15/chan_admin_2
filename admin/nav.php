<?php
include_once '../libs/simple_html_dom.php';
$html = file_get_html('nav.xml');
$navStr = '';
$mainCss = '';
$subSat = '';
$subCss = '';
$sideBar = '';
$containerSize = 'span9';

foreach($html->find('main') as $main) {
	$mainItem = $main->find('item',0)->plaintext;
	$mainCss = (strtolower($pageItemName) == strtolower($mainItem)) ? 'active' : '';
	if ($main->find('sub', 0)) {
		$navStr .= sprintf('<li class="%s"><a href="%s">%s</a></li>',
			$mainCss,
			$main->find('url', 0)->plaintext,
			$main->find('title', 0)->plaintext);

        if (strtolower($pageItemName) == strtolower($mainItem)) {
            foreach ($main->find('sub', 0)->find('subItem') as $sub) {
                $subItem = $sub->find('item', 0)->plaintext;
                $subCss = (strtolower($subItemName) == strtolower($subItem)) ? 'active' : '';
                $sideBar .= sprintf('<li class="%s"><a href="%s">%s</a></li>',
                    $subCss,
                    $sub->find('url', 0)->plaintext,
                    $sub->find('title', 0)->plaintext);
            }
        }
	} else {
		// no sub menu
		$navStr .= sprintf('<li class="%s"><a href="%s">%s</a></li>',
			$mainCss,
			$main->find('url', 0)->plaintext,
			$main->find('title', 0)->plaintext);
	}
}
$html->clear();

if ($sideBar == '') $containerSize = 'span12';

$smarty->assign('nav', $navStr);
$smarty->assign('sideBar', $sideBar);
$smarty->assign('containerSize', $containerSize);
?>

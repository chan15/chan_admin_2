<?php
$incJs = '';
$incCss = '';

foreach ($incCssArr as $css) {
    $incCss .= sprintf("    <link rel=\"stylesheet\" href=\"%s\" />\r\n", $css);
}

foreach ($incJsArr as $js) {
    $incJs .= sprintf("    <script src=\"%s\" type=\"text/javascript\"></script>\r\n", $js);
}

$smarty->assign('incJs', $incJs);
$smarty->assign('incCss', $incCss);
?>

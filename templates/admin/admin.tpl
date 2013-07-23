<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$smarty.const.ADMIN_TITLE} 管理系統</title>
	<link rel="shortcut icon" href="images/admin.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/initial.css" />
    <link rel="stylesheet" href="css/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" />
{$incCss}
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="ckeditor/config.js" type="text/javascript"></script>
    <script src="ckeditor/adapters/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/messages_zh_TW.js" type="text/javascript"></script>
    <script src="js/jquery.form.js" type="text/javascript"></script>
    <script src="js/jquery.relatedselects.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/initial.js" type="text/javascript"></script>
{$incJs}
</head>
<body>
    {include file="admin/modal.tpl"}
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand">{$smarty.const.ADMIN_TITLE}</a>
                <ul class="nav">
                    {$nav}
                </ul>
                
            </div>
        </div>
    </div>
    {block name="content"}{/block}
</body>
</html>

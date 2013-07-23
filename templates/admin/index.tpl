<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$smarty.const.ADMIN_TITLE} 管理系統</title>
    <link rel="stylesheet" href="css/initial.css" />
    <link rel="stylesheet" href="css/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" />
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/messages_zh_TW.js" type="text/javascript"></script>
    <script src="js/jquery.form.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/initial.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>
</head>
<body>
    <div class="modal hide fade">
        <div class="modal-body">
            <p>processing...</p>
        </div>
    </div>
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand">{$smarty.const.ADMIN_TITLE}</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="index-center">
                <div class="hero-unit">
                    <h1>{$smarty.const.ADMIN_TITLE} 管理系統</h1>
                    <p>歡迎使用 {$smarty.const.ADMIN_TITLE} 後台管理系統</p>
                    <form name="login-form" id="login-form" autocomplete="off">
                        <div>
                            <input id="username" name="username" type="text" placeholder="請輸入帳號">
                        </div>
                        <div>
                            <input id="password" name="password" type="password" placeholder="請輸入密碼">
                        </div>
                        <button type="submit" class="btn btn-primary">登入</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

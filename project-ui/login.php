   <?php include_once 'inc/config.php'; ?>
   <?php include_once 'inc/actions.php';?>
    <!doctype html>
    <html lang="fa">
    <head>
        <meta charset="UTF-8">
        <title><?php echo QA_TITLE; ?></title>
        <link rel="stylesheet" href="css/pure.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
    <div class="main">
        <div class="pure-g">
            <div class="pure-u-1 header">
                <div class="inner">
                    <a href="<?php echo QA_HOME_URL; ?>"><h1><?php echo QA_TITLE; ?></h1></a>
                </div>
            </div>
        </div>

        <div class="pure-g">
            <div class="pure-u-1-5 sidebar">
                <div class="inner">
                    <div class="menu">
                        <div class="menu-title">طرح سوال :</div>
                        <div class="menu-content">
                            <form action="" method="post" class="pure-form searchform">
                                <input type="text" name="uName" placeholder="نام کامل شما"/>
                                <input type="text" name="uMail" class="ltr" placeholder="ایمیل شما"/>
                                <input type="text" name="uMobile" class="ltr" placeholder="شماره موبایل شما"/>
                                <textarea type="text" name="uQuestion" placeholder="متن سوال شما"></textarea>
                                <input type="submit" name="submitQuestion" value="ارسال سوال"
                                       class="pure-button button-green">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pure-u-4-5 content">
                <div class="inner">
                    <form action="" method="post" class="ltr pure-form loginform">
                        <input type="text" name="username" class="ltr" placeholder="Username"><br>
                        <input type="password" name="password" class="ltr" placeholder="Password"><br>
                        <input type="submit" name="login" value="Login" class="pure-button button-green">
                    </form>
                </div>
            </div>
        </div>
        <div class="pure-g">
            <div class="pure-u-1 footer">
                <div class="inner">تمامی حقوق محفوظ است ...</div>
            </div>
        </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/admin.js"></script>
    </body>
    </html>
<?php
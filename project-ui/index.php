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
    <?php if (isAdmin()): ?>
        <div class="info">
            <span class="adminName"> خوش آمدی <?php echo QA_ADMIN_DISPLAYNAME;?> عزیز </span>
            <a href="<?php echo QA_HOME_URL.'?logout=1';?>" class="logout">خروج</a>
        </div>
    <?php endif; ?>
    <div class="main">
        <?php
            if ($errorMsg){
                echo "<div class='error'>".nl2br($errorMsg)."</div>";
            }else if($successMsg){
                echo "<div class='success'>".nl2br($successMsg)."</div>";
            }

        ?>
        <div class="pure-g">
            <div class="pure-u-1 header">
                <div class="inner">
                    <a href="<?php echo QA_HOME_URL; ?>"><h1><?php echo QA_TITLE; ?></h1></a>

                    <form action="" method="get" class="pure-form searchform">
                        <select name="status">
                            <option value="pending">منتظر تائید</option>
                            <option value="publish">بدون پاسخ</option>
                            <option value="answered">پاسخ داده شده</option>
                        </select>
                        <input type="text" name="search" id="s"/>
                        <button class="pure-button button-green">جستجو</button>
                    </form>


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
                           <div class="qTitle">لیست سوالات : (<?php echo $numQuestions; ?> مورد)</div>
                           <?php
                           if ($questions == null) {
                               echo '
                               <div class="notfound">موردی یافت نشد<br><br>
                                   <a href="' . QA_HOME_URL . '">بازگشت به صفحه اصلی</a>
                               </div>';
                           } else {
                               ?>
                               <?php foreach ($questions as $q): ?>
                                   <div class="question <?php echo $q['status']?>" id="q-<?php echo $q['id'] ?>">
                                       <?php if (isAdmin()): ?>
                                           <div class="qManage br5">
                                               <span class="result" style="display: none">...</span>
                                               <span class="qmr">افزودن پاسخ</span> &nbsp; &nbsp;
                                               <span class="qm" id="qmd-<?php echo $q['id'] ?>">حذف</span> &nbsp; &nbsp;
                                               <?php if ($q['status'] != 'answered') { ?>
                                                   <span class="qm" id="qmpu-<?php echo $q['id'] ?>">تائید</span> &nbsp; &nbsp;
                                                   <span class="qm" id="qmpe-<?php echo $q['id'] ?>">لغو تائید</span>
                                               <?php } ?>
                                           </div>
                                       <?php endif; ?>
                                       <div class="q"><span class="i">+</span><?php echo $q['text'] ?><span
                                               class="date">(<?php echo $q['uname'] . '  در ' . jdate(QA_DATE_FORMAT, strtotime($q['create_date'])); ?>
                                               )</span></div>
                                       <?php if (isAdmin()): ?>
                                           <div class="r">
                                               <form action="" method="post" class="pure-form replyForm">
                                                   <input name="qid" value="<?php echo $q['id'] ?>" type="hidden"/>
                                                   <textarea name="text" rows="5" placeholder="پاسخ دهید ..."></textarea>
                                                   <input type="submit" name="submitAnswer"
                                                          class="pure-button button-green submit" value="ارسال پاسخ"/>

                                                   <div class="clear"></div>
                                               </form>
                                           </div>
                                       <?php endif; ?>
                                       <?php
                                       if ($q['status'] == 'answered') {
                                           echo getAnswers($q['id']);
                                       } else if ($q['status'] == 'publish') {
                                           echo '<div class="a">پاسخی برای این سوال داده نشده است !</div>';
                                       } else if ($q['status'] == 'pending' and isAdmin()) {
                                           echo '<div class="a">این سوال هنوز تائید نشده است.</div>';
                                       }
                                       ?>
                                   </div>
                               <?php endforeach; ?>
                           <?php } ?>
                       </div>




                <div class="pagination clearfix">
                    <a href="?page=first">«</a>
                    <a href="?page=1">1</a>
                    <strong>2</strong>
                    <a href="?page=3">3</a>
                    <a href="?page=last">»</a>
                </div>
            </div>
        </div>
        <div class="pure-g">
            <div class="pure-u-1 footer">
                <div class="inner">تمامی حقوق محفوط است ...</div>
            </div>
        </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <?php if (isAdmin()): ?>
    <script src="js/admin.js"></script>
    <?php endif; ?>
    </body>
    </html>
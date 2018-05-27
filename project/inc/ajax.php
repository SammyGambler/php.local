<?php
include_once 'functions.php';

if (isset($_GET['action']) && isValidAjaxRequest()) {
    sleep(1);
    if (isAdmin()) {
        $action = $_GET['action'];
        if ($action == 'qm') { // do question management
            $qmArr = explode('-', $_POST['qmStr']);
            $operation = $qmArr[0];
            $qid = $qmArr[1];
            if ($operation == 'qmd') {
                removeQuestion($qid);
                echo 'حذف شد .';
            } elseif ($operation == 'qmpe') {
                changeQuestionStatus($qid, 'pending');
                echo 'لغو تائید انجام شد .';
            } elseif ($operation == 'qmpu') {
                changeQuestionStatus($qid, 'publish');
                echo 'تائید و منتشر شد .';
            }
        } else {
            // another ajax actions here
        }
    } else {
        echo "دسترسی غیر مجاز ...";
    }
} else {
    echo "درخواست نامعتبر است .";
}
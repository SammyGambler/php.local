<?php
// config for Question Answering System

// Website information
define('QA_TITLE', 'سامانه پاسخگویی به سوالات ');
define('QA_HOME_URL', 'http://localhost/project-ui/');
define('QA_QUSETION_PER_PAGE', 5);
define('QA_QUSETION_MIN_LENGTH', 10);
define('QA_UNAME_MIN_LENGTH', 5);
define('QA_DATE_FORMAT', "d F Y");

// admin information
define('QA_ADMIN_DISPLAYNAME', 'مدیر');
define('QA_ADMIN_USERNAME', 'Sammy');
define('QA_ADMIN_PASSWORD', '135790');


// turn off error reporting after project completion
ini_set('display_errors', 'On');
error_reporting(E_ALL);


// database information
$dbHost = 'localhost';
$dbUser = 'qa_db_user';
$dbPass = 'KRxotrI0ogqwpxlI';
$dbName = 'project_qa';

$db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

/* check connection */
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
// for farsi data transfer to/from database
$db->query("SET NAMES UTF8;");

// define our tables for usage in code
$db->questionTable = "questions";
$db->answerTable = "answers";
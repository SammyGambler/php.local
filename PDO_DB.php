<?php define('PDO_TITLE','Introduction to PDO');
      define('PDO_Author','SammyGambler');
      include_once 'common.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo PDO_TITLE; ?></title>
</head>
<body>

<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=tests;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}

$stmt = $db->query('SELECT * FROM users');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($results) . '<br>';
echo '</pre>';
//echo '<br>' . $stmt->rowCount();
describeObject('PDO');


?>


<div style="background-color: #b7b7b7;text-align: center;font-size: 30px">Author : <?php echo PDO_Author; ?></div>
</body>
</html>

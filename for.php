<?php
include 'function_wp.php';
$users = get_users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
    </tr>
    <?php foreach ($users as $u):?>
        <tr>
            <td><?php echo $u['id']?></td>
            <td><?php echo $u['name']?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
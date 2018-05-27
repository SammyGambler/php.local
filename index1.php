<?php include 'function_wp.php'; ?>
<?php if (isset($_POST['Send'])){
        $background_color = select_bg($_POST['background']);
}
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wp</title>
</head>
<body style="background-color: <?php echo $background_color;?>">
<div>
    <!--    --><?php //if (is_user_logged_in()): ?>
    <!--    <p>Welcome</p>-->
    <!--    --><?php //else: ?>
    <!--    <a href="#">Login</a>-->
    <!--    --><?php //endif; ?>
    <form action="" method="post">
        <input type="radio" name="background" value="blue">Blue
        <input type="radio" name="background" value="red">Red
        <input type="radio" name="background" value="green">Green
        <input type="submit" name="Send" value="Send">
    </form>
</div>
</body>
</html>
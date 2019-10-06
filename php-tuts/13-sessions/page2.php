<?php 
    session_start();

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest'; //if is set not same as ''
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h5> Thank you <?php echo $name; ?></h5>
    <h5><?php echo $email; ?> has subscribed</h5>

    <a href="page3.php">Go to Page 3</a>

</body>
</html>
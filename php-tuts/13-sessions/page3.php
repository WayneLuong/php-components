<?php 
    session_start();
    //$_SESSION['name'] = 'John Doe'; //set session variable
    print_r($_SESSION);

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
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
    <h1>Hello <?php echo $name; ?></h1>
    <a href="page4.php">Go to Page 4</a>

</body>
</html>
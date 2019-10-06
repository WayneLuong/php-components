<?php 
    //STORED ON LOCAL COMPUTER
    if( isset($_POST['submit'])){ //input has name of submit
        $username = htmlentities($_POST['username']);

        // name atrr / var / expiry time
        setcookie('username', $username, time()+3600); //1hr

        header('Location: page2.php');
    }
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
    <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?> ">
        <input type="text" name='username' placeholder='ENTER USERNAME'>
        <input type="text" name='email' placeholder='ENTER EMAIL'>
        <input type="submit" name='submit' value='submit'>

    </form>
</body>
</html>
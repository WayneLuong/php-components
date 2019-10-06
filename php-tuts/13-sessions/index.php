<?php 
    //sessions stored in server MORE SAFE THAN COOKIES
    if (isset($_POST['submit'])){
        session_start(); //Start the session use on every page you want sessions

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        //redirect
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
        <input type="text" name='name' placeholder='ENTER NAME'>
        <input type="text" name='email' placeholder='ENTER EMAIL'>
        <input type="submit" name='submit' value='submit'>

    </form>
</body>
</html>
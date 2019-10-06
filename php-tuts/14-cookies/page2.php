<?php
    //Change cookie
    setcookie('username', 'Frank', time()+(86400*30));
    //Delete cookie Unset set a time that is past
    //setcookie('username', 'Frank', time()-(3600));

    if(count($_COOKIE)>0){
        echo 'there are '. count($_COOKIE). ' saved<br>';
    }else {
        echo 'there are no cookies saved<br>';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '.$_COOKIE['username'].' is set<br>';  
    }else {
        echo'User is not set';
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
    
</body>
</html>
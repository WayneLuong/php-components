<?php 
    // shown in header /php/1/get_post.php?name=test&email=
    if(isset($_GET['name'])){
        $name =  htmlentities($_GET['name']); //Protect from script attacks
        echo $name;
        print_r($_GET);
    }
    // not shown /php/1/get_post.php MORE SECURE BEST METHOD
    if(isset($_POST['name'])){
        $name =  htmlentities($_POST['name']); 
        echo $name;
        print_r($_POST);
    }
    // WORKS with both get/post
    if(isset($_REQUEST['name'])){
        $name =  htmlentities($_REQUEST['name']); 
        echo $name;
        print_r($_REQUEST);
    }
    // gets whole form // works without form also
    echo $_SERVER['QUERY_STRING'];
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
    <!-- method='GET'-->
    <form action="get_post.php"  method='POST'>
        <div>
            <label for="">Name</label>
            <input type="text" name='name'>
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name='email'>
        </div>
        <input type="submit" value='Submit'>
    </form>
    <!-- FOR query string-->
    <ul>
        <li><a href="get_post.php?name='Test'">TEST</a></li>
        <li><a href="get_post.php?name='Steve'">Steve</a></li>
    </ul>
    <h1><?php echo"{$name}'s Profile"; ?></h1>
</body>
</html>
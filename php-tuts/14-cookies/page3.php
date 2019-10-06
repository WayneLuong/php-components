<?php 
    $user = ['name'=> 'Brad', 'email'=>'test@test.com', 'age'=>35];

    //for array
    $user = serialize($user);

    setcookie('user', $user, time(86400)*30);

    $user = unserialize($_COOKIE['user']);
    echo $user['name'].'<br>';
    print_r($user);
?>
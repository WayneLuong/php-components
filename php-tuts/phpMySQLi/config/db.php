<?php
//Create connextion
    //$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
    //$conn = mysqli_connect('localhost', 'root', '', 'phpblog');
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()){
        //Connection failed
        echo 'Failed to connect to mysqli'. mysqli_connect_errno(); 
    } else {
        //connection success
        echo 'connection success';
    }
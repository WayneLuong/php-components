<?php
    //Function - can have by reference function simpleFunction($num, &$num2)
    function simpleFunction($num, $num2){
        echo $num + $num2;
        echo 'Hello World';
    }
    $num2= 4;
    simpleFunction(1,$num2);

    //IF
    
?>
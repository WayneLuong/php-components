<?php 
    /*Arrays
     -indexed
     -associative
     -multi dimensional
    */

    //indexed
    $indexed= array('Kevin', 'Bob', 5);
    $indexed2= [1, 2, 'string'];
    $indexed2[1] = 3;
    $indexed2[] = 'BMW'; //append


    echo "$indexed[1]  $indexed2[1] $indexed2[3] ";

    echo count($indexed2) . "<br>";
    print_r($indexed2);
    echo "<br>"; 
    var_dump($indexed2) . "<br>";

    //associative - can define the key instead of number value
    $people = array('Bob'=> 35, 44 => 'jon', 'brad'=>'string');
    $people['Jill'] = 99;
    echo $people['Jill'];
    print_r ($people['Jill']);

    //Multi dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Ford', 23, 1),
        array('Toyota', 21, 12)
    );
    echo $cars[1][0];
?>
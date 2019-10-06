<?php 
    //Loops

    //For
    for ($i=0; $i<10;$i++){
        echo "$i For";
    };
    //while
    $i=0;
    while ($i<10){
        echo" $i While";
        $i++;
    };
    //do .. while
    $i=0;
    do{
        echo "$i Do..while";
        echo "<br>";
        $i++;
    } while ($i<10);

    //foreach for arrays
    /*$people = array('Brad', 'Jon', 'Jane');
    foreach($people as $person){
        echo $person;
        echo "<br>";
    }*/
    $people = array('Brad'=>3, 'Jon'=>12, 'Jane'=>44);
    foreach($people as $person=>$age){
        echo $person . $age;
        echo "<br>";
    }
?>
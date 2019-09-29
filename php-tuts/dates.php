<?php
    //date
    echo date('d');
    echo date('m');
    echo date('Y');
    echo date('l');
    echo date('d/m/y');

    //time
    //set time zone
    date_default_timezone_set("Europe/London");
    echo "<br>";

    echo date('h:i:s:a');
    echo "<br>";

    //make time-  time / date
    $myTime = mktime(6, 11,1, 17,11,1993 );
    echo date('d/m/Y h:i:sa', $myTime);

    $_t =strtotime('7:00pm March 11 2011');
    $_t =strtotime('next sunday');
    $_t =strtotime('tomorrow');
    $_t =strtotime('+ 2 Months');
    echo "<br>";
    echo date('d/m/Y h:i:sa',$_t);

 ?>
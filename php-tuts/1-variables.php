<h1>
    <?php
    // Single line
    /* Multi line  */
    echo 'Hello World <b>Echo</b>'.' concat ';
    print ' Hello World <b>Print</b>';
    ?>
</h1>

<?php 
    #variables
    // Prefix $ for variable or it is looked as constant
    $output = 'Hi ';
    $output2 = 'Output';
    $greeting = $output.$output2;
    $greeting2 = "$output $output2 3";
    $greeting3 = '$output $output2 3';


    $_num1 = 4;
    $float = 3.4;
    $sum = $_num1 + $float;
    $bool = false;
    // double quote to parse php
    echo $greeting . $greeting2 . $greeting3 . '<br> ' .   "$_num1  <br> $float $bool $sum " ;

    /* Escape - backslash*/
    $escape = 'They\'re here';
    $escape = "They're here";

    //Constants - in capitals / case sensitive until add true
    define('GREETING', 'hello constant', true);
    echo GREETING;
?>
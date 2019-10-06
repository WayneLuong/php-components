<?php 
    //substr() //returns a portion of the string
    $output = substr('hello',1, 3);
    $output = substr('hello', -2);

    //strlen() length of a string
    $output = strlen('hello world');

    //strpos() first occurence of a sub string
    //strrpos() last occurence of a sub string
    $output = strpos('Hello World', 'o');
    $output = strrpos('Hello World', 'l');
    echo $output;

    //trim() trim white space either side //  GOOD FOR FORM INPUT
    $text = 'Hello world    ';
    var_dump($text);
    $trimmed = trim($text);
    var_dump($trimmed);

    //strtoupper UPPERCASE
    //strtolower LOWERCASE
    //ucwords() capitalise every word
    $text = 'lOwER world';
    echo strtolower($text);
    echo strtoupper($text);
    echo ucwords($text);

    //str_replace() place all occurences of a search string with a replacement
    $output2 = str_replace ("lOwER", "test", $text);
    echo $output2;

    //is_string() check if is string returns 1 or nothing
    $values = array(33, '33', true, null, 2.4, '', 0);
    foreach( $values as $value){
        if (is_string($value)){
            echo "{$value} is a string";
        }
    }

    //gzcompress compress a string for sending
    $string = 'this is a long string';
    $compressed = gzcompress($string);
    $original = gzuncompress($compressed);

    echo $compressed;
    echo $original;
?>
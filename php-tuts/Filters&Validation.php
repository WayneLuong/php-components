<?php 
    //Check for posted data
    //INPUT_POST // INPUT_GET // name of data
    if (filter_has_var(INPUT_POST, 'data')){
        echo 'data found';
    } else{
        echo 'no data';
    }

    //Check for email
    if (filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];
        //sanitize remove illegal characters
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        echo $email."<br>";

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email is valid';
        } else{
            echo 'email is not valid';
        }
    }
    /**FILTER_VALIDATE_
     * URL
     * BOOLEAN
     * FLOAT
     * INT
     * IP
     * REGEXP
     * INT
     * EMAIL
     
     FILTER_SANITIZE_
     EMAIL
     ENCODED
     NUMBER_FLOAT
     NUMBER_INT
     SPECIAL_CHARS
     STRING
     URL
     */

     //validate multiple field data through array
    $filters = array(
         "data"=>FILTER_VALIDATE_EMAIL,
         "data2"=>array(
             "filter"=>FILTER_VALIDATE_INT,
             "options"=>array(
                "min_range"=> 1,
                "max_range"=>100
             )
         )
    );
    //filter array
    print_r(filter_input_array(INPUT_POST, $filters));

    //Filter array
    $arr = array(
        "name"=> 'jon',
        'age'=> 25,
        'email'=>'test@test.com'
    );

    $filterArray = array(
        "name"=> array(
            'filter'=> FILTER_CALLBACK,
            'options'=> 'ucwords'
        ),
        'age'=>array(
            'filter'=> FILTER_VALIDATE_INT,
            'options'=> array(
                'min_range'=>1,
                'max_range'=> 100
            )
        ),
        'email'=>FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filterArray));
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <input type="text" name='data'>
    <input type="text" name='data2'>

    <button type='submit'>Submit</button>
</form>
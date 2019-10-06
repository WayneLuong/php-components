<?php 
    $path='/dir0/dir1/myfile.php';
    //Return file name
    echo basename($path);

    //Return filename without extension
    echo basename($path,'.php');

    //return dir name from path
    echo dirname($path);

    //check if file or FOLDER exists
    $file ='file1.txt';
    echo file_exists('test');

    // get abs absolute path
    echo realpath($file);

    //checks to see is file only
    is_file($file);

    //check if file is writable
    echo is_writable($file);

    //check if file is readable
    echo is_readable($file);

    //get file size
    echo filesize($file);

    // MANIPULATE FILES

    //create a dir
    mkdir('testing');

    //delete a directory as long as no file is in it
    rmdir('test');

    //copy a file
    echo copy('file1.txt', 'file2.txt');

    //rename a file
    rename('file2.text', 'myfile.txt');

    //delete a file
    unlink('myfile.txt');

    //write from file to string
    file_get_contents($file);

    //write/replace string to file //passes file size back
    file_put_contents($file,'Good Bye World');

    //append to file
    $current = file_get_contents($file);
    $current .= ' Goodbye World';
    file_put_contents($file, $current);

    // open a file for reading
    $handle = fopen($file, 'r');
    $data=fread($handle, filesize($file));
    echo $data; 
    fclose($handle);

    //open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "Test write \n";
    fwrite($handle, $txt);
    $txt = 'steve smith';
    fclose($handle);


?>
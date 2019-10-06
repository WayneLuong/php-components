<?php 
    require './config/config.php';
    require './config/db.php';

    //check for delete
    if (isset($_POST['delete'])){
        //echo'deleted';
        //Get form data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        //create query
        $query = "DELETE FROM posts WHERE id={$delete_id}";
        //check query
        //die($query);
        if(mysqli_query($conn,$query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'error'.mysqli_error($conn);
        }
    } 

    //get id // escape harful characters
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //create query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

    //get result
    $result = mysqli_query($conn, $query);

    //fetch data
    $post=mysqli_fetch_assoc($result);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

    //var_dump($post);
?>

<?php include 'include/header.php'; ?>

    <div class="container">
        <a href="<?php echo ROOT_URL; ?>" class='btn btn-default'>Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at']; ?> 
        by <?php echo $post['author'] ?></small>
        <p><?php echo $post['body']; ?></p>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST' class="pull-right">
            <input type="hidden" name='delete_id' value='<?php echo $post['id'] ?>'>
            <input type="submit" value='Delete' name='delete' class='btn btn-danger'>
        </form>
        <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class='btn btn-default'>Edit</a>
    </div>
    
<?php include 'include/footer.php'; ?>

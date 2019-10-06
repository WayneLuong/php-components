<?php 
    require './config/config.php';
    require './config/db.php';

    //check for submit
    if (isset($_POST['submit'])){
        //echo'submitted';
        //Get form data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        //create query
        $query = "UPDATE posts SET
            title='$title',
            author='$author',
            body='$body'
            WHERE id=$update_id";
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
?>

<?php include 'include/header.php'; ?>
<div class="container">
    <h1>Add Posts</h1>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post'>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name='title' class='form-control' value='<?php echo $post['title'] ?>'>
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name='author' class='form-control' value='<?php echo $post['author'] ?>'>
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name='body' class='form-control' ><?php echo $post['body'] ?></textarea>
        </div>
        <input type="hidden" name='update_id' value='<?php echo $post['id']?>'>
        <input type="submit" class='btn btn-primary' name='submit' value=Submit>
    </form>
</div>
<?php include 'include/footer.php'; ?>
    

<?php 
    require './config/config.php';
    require './config/db.php';

    //check for submit
    if (isset($_POST['submit'])){
        //echo'submitted';
        //Get form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        //create query
        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn,$query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'error'.mysqli_error($conn);
        }


    }
?>

<?php include 'include/header.php'; ?>
<div class="container">
    <h1>Add Posts</h1>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post'>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name='title' class='form-control'>
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name='author' class='form-control'>
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name='body' class='form-control'></textarea>
        </div>
        <input type="submit" class='btn btn-primary' name='submit' value=Submit>
    </form>
</div>
<?php include 'include/footer.php'; ?>
    

<?php 
    require './config/config.php';
    require './config/db.php';

    //create query
    $query = 'SELECT * FROM posts ORDER BY created_at DESC';

    //get result
    $result = mysqli_query($conn, $query);

    //fetch data
    $posts=mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

    //var_dump($posts);
?>

<?php include 'include/header.php'; ?>
<div class="container">
    <h1>Posts</h1>
    <?php foreach($posts as $post): ?>
        <div class="well">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at']; ?> </small> by <?php echo $post['author']; ?>
            <p><?php echo $post['body']; ?></p>
            <a class='btn btn-default' href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']?>">Read More</a>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'include/footer.php'; ?>
    

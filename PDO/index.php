<?php 
$host = 'localhost';
$user= 'root';
$password = '';
$dbname = 'pdoposts';

//Set DSN data source name
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//create a dbo instance
$pdo = new PDO($dsn, $user, $password);
$pdo -> setattribute(PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_OBJ);
//false the emulator to use LIMIT sql
$pdo -> setattribute(PDO::ATTR_EMULATE_PREPARES,
false);

//PDO query
$stmt= $pdo->query('SELECT * FROM posts');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['title'].'<br>';
}
/*while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo $row->title.'<br>';
}*/

//Prepared statements(prepare & execute)

//UNSAFE 
//$sql = "SELECT * FROM posts WHERE author = '$author' ";

//FETCH multiple posts with prepared statements
//user input 
$author = 'Wayne';
$is_published = true;
$id = 1;

//Positional params
$sql = 'SELECT * FROM posts WHERE author = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$author]);
$posts = $stmt->fetchAll();

//var_dump($posts);

foreach($posts as $post){
    echo $post->title.'<br>';
}

//Named params
$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
$stmt = $pdo->prepare($sql);
$stmt->execute(['author'=>$author, 'is_published'=>$is_published]);
$posts = $stmt->fetchAll();

foreach($posts as $post){
    echo $post->title.'<br>';
}

//FETCH single post
$sql = 'SELECT * FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id]);
$post = $stmt->fetch();

echo $post->text;

//GET row count
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
$stmt->execute([$author]);
$postCount= $stmt->rowCount();

echo $postCount;

//INSERT data
$title = 'Post 3';
$text = 'this is post 3';
$author = 'Kevin';

$sql = 'INSERT INTO posts(title, text ,author) VALUES(:title, :text, :author)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['title'=> $title, 'text' => $text, 'author'=> $author]);
echo 'Post added';

//UPDATE
$id = 1;
$text = 'this is post update';

$sql = 'UPDATE posts SET text = :text WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['text'=> $text, 'id' => $id]);
echo 'Post updated';

//DELETE
$id = 2;

$sql = 'DELETE FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
echo 'Post deleted ';

//SEARCH
$search = '%post%';
$limit = 1;
 
//name param
$sql = 'SELECT * FROM posts WHERE title LIKE ? LIMIT ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search, $limit]);
$posts = $stmt->fetchAll();

foreach($posts as $post)
{
     echo $post->title;
}


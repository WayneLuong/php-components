<?php include './server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Server Info</h1>
        <?php if ($server) : ?>
            <ul class="list-group">
                <?php foreach($server as $key=> $value): ?>
                    <i class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </i>
                <?php endforeach ?> 
            </ul>
        <?php endif ?>

        <h1>Client Info</h1>
        <?php if ($client) : ?>
            <ul class="list-group">
                <?php foreach($client as $key=> $value): ?>
                    <i class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </i>
                <?php endforeach; ?>
                
                <!-- Two ways to include php in html
                <h1>Client Info</h1>
                <?php foreach($client as $key=> $value){ ?>
                    <i class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </i>
                <?php }; ?> -->

            </ul>
                <?php endif; ?>
    </div>
</body>
</html>

